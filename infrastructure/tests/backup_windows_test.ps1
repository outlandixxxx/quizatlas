#Requires -Version 5.1
# Native Windows tests: temporary fixtures, mocked transfers, no VPS/task registration.
Set-StrictMode -Version Latest
$ErrorActionPreference = 'Stop'
$sourceTools = Join-Path (Split-Path $PSScriptRoot -Parent) 'backup\windows'
$testRoot = Join-Path $env:TEMP ('maroquiz-backup-test-' + [guid]::NewGuid().ToString('N'))
$tools = Join-Path $testRoot 'Tools with spaces & punctuation'
[IO.Directory]::CreateDirectory($tools) | Out-Null
Copy-Item -LiteralPath (Join-Path $sourceTools 'Sync-MaroQuizBackup.ps1'), (Join-Path $sourceTools 'Install-MaroQuizBackupTask.ps1') -Destination $tools
. (Join-Path $tools 'Sync-MaroQuizBackup.ps1')
$nativeOpenSsh = (Get-Command Invoke-MaroOpenSsh).ScriptBlock
. (Join-Path $tools 'Install-MaroQuizBackupTask.ps1')
$script:passed = 0
$script:calls = [Collections.Generic.List[object]]::new()
$script:mode = 'success'
$script:registrationCalls = 0
$script:stagingHandle = $null
$utf8 = [Text.UTF8Encoding]::new($false)

function Assert-Test { param([bool]$Value, [string]$Message) if (-not $Value) { throw $Message } }
function Test-Case {
    param([string]$Name, [scriptblock]$Body)
    & $Body
    $script:passed++
    Write-Output ('PASS: ' + $Name)
}
function Assert-Fails {
    param([scriptblock]$Body, [string]$Pattern)
    $caught = $null
    try { & $Body | Out-Null } catch { $caught = $_.Exception.Message }
    Assert-Test ($null -ne $caught -and $caught -match $Pattern) ('Expected failure matching ' + $Pattern + '; got: ' + $caught)
}
function Write-Config {
    param([string]$Destination, [string]$SshHost = 'fixture@vps.invalid', [string]$Remote = '/var/backups/maroquiz')
    $path = Join-Path $testRoot ('config-' + [guid]::NewGuid().ToString('N') + '.json')
    [IO.File]::WriteAllText($path, (@{ SshHost = $SshHost; RemoteBackupDirectory = $Remote; Destination = $Destination } | ConvertTo-Json), $utf8)
    return $path
}
function New-Fixture {
    param([string]$Id)
    $folder = Join-Path $testRoot ('server-' + [guid]::NewGuid().ToString('N'))
    [IO.Directory]::CreateDirectory($folder) | Out-Null
    [IO.File]::WriteAllBytes((Join-Path $folder ($Id + '.tar.gz')), [Text.Encoding]::ASCII.GetBytes('Opaque verified server archive fixture.'))
    [IO.File]::WriteAllText((Join-Path $folder 'manifest.json'), (@{ schema_version = 1; id = $Id; status = 'complete'; timezone = 'Africa/Casablanca'; components = @{} } | ConvertTo-Json), $utf8)
    $sha = (Get-FileHash -LiteralPath (Join-Path $folder ($Id + '.tar.gz')) -Algorithm SHA256).Hash.ToLowerInvariant()
    $manifestSha = (Get-FileHash -LiteralPath (Join-Path $folder 'manifest.json') -Algorithm SHA256).Hash.ToLowerInvariant()
    [IO.File]::WriteAllText((Join-Path $folder 'SHA256SUMS'), "$sha  $Id.tar.gz`n$manifestSha  manifest.json`n", $utf8)
    return [pscustomobject]@{ Folder = $folder; Metadata = [pscustomobject]@{ id = $Id; sha256 = $sha; manifest_sha256 = $manifestSha; size_bytes = (Get-Item -LiteralPath (Join-Path $folder ($Id + '.tar.gz'))).Length } }
}
function Invoke-MaroOpenSsh {
    param([string]$Program, [string[]]$CommandArguments)
    $script:calls.Add([pscustomobject]@{ Program = $Program; Arguments = $CommandArguments; Directory = (Get-Location).Path })
    if ($script:mode -eq 'offline') { throw 'Offline fixture; no transfer.' }
    if ($Program -eq 'ssh') {
        if ($script:mode -eq 'unsafe-id') { return (@{ id = '../outside'; sha256 = $server.Metadata.sha256; manifest_sha256 = $server.Metadata.manifest_sha256; size_bytes = 12 } | ConvertTo-Json) }
        return $server.Metadata | ConvertTo-Json
    }
    $name = $CommandArguments[-1]
    $target = Join-Path (Get-Location).Path $name
    [IO.File]::WriteAllBytes($target, [IO.File]::ReadAllBytes((Join-Path $server.Folder $name)))
    if ($name.EndsWith('.tar.gz')) {
        if ($script:mode -eq 'locked-staging') {
            $script:stagingHandle = [IO.File]::Open($target, [IO.FileMode]::Open, [IO.FileAccess]::ReadWrite, [IO.FileShare]::None)
            throw 'Interrupted fixture with a temporarily locked staging file.'
        }
        if ($script:mode -eq 'interrupted') { [IO.File]::WriteAllText($target, 'partial'); throw 'Interrupted fixture transfer.' }
        if ($script:mode -eq 'corrupt') { [IO.File]::WriteAllText($target, 'corrupt fixture'); }
    }
    if ($name -eq 'manifest.json' -and $script:mode -eq 'sidecar') { [IO.File]::WriteAllText($target, '{}'); }
    return ''
}
function Register-ScheduledTask { $script:registrationCalls++; throw 'Tests must never install tasks.' }

try {
    $server = New-Fixture 'maroquiz-2026-11-05T030000+0100-aabbccdd'
    $destination = Join-Path $testRoot ('Local Backups & ' + [char]0xE9)
    $configuration = Write-Config $destination
    $latest = Join-Path $destination $server.Metadata.id

    Test-Case 'PowerShell 5.1 parser accepts both production scripts and test file' {
        foreach ($file in @((Join-Path $tools 'Sync-MaroQuizBackup.ps1'), (Join-Path $tools 'Install-MaroQuizBackupTask.ps1'), $PSCommandPath)) {
            $tokens = $null; $errors = $null
            [Management.Automation.Language.Parser]::ParseFile($file, [ref]$tokens, [ref]$errors) | Out-Null
            Assert-Test ($errors.Count -eq 0) ('Syntax errors in ' + $file)
        }
    }
    Test-Case 'built-in OpenSSH runs without a connection and suppresses native error details' {
        $version = & $nativeOpenSsh 'ssh' @('-V')
        Assert-Test ($version -match 'OpenSSH') 'Built-in OpenSSH was not exercised.'
        Assert-Fails { & $nativeOpenSsh 'ssh' @('-Q', 'fixture-private-value') } '^SSH/SCP failed\.'
    }
    Test-Case 'verified download uses safe SSH options, private ACLs and atomic completion' {
        $result = Sync-MaroQuizBackup $configuration
        Assert-Test ($result.Status -eq 'Verified' -and (Test-Path -LiteralPath $latest)) 'No final verified backup.'
        Test-MaroBackupBundle $latest $server.Metadata
        Assert-Test ($script:calls.Count -eq 4) 'Expected one lookup and three file transfers.'
        foreach ($call in $script:calls) {
            foreach ($option in @('BatchMode=yes', 'PasswordAuthentication=no', 'KbdInteractiveAuthentication=no', 'StrictHostKeyChecking=yes')) { Assert-Test ($call.Arguments -contains $option) ('Missing ' + $option) }
            Assert-Test ($call.Arguments -contains '--') 'Missing option terminator.'
        }
        Assert-Test ($script:calls[0].Arguments[-1] -eq '/usr/bin/python3 /usr/local/lib/maroquiz-backup/maroquiz_backup.py latest --backup-dir /var/backups/maroquiz') 'Remote operation is not read-only latest lookup.'
        Assert-Test (@($script:calls | Where-Object { $_.Program -eq 'scp' -and $_.Arguments[-1] -match '[:\\/]' }).Count -eq 0) 'SCP destination must be a safe relative filename.'
        $acl = Get-Acl -LiteralPath $destination
        Assert-Test $acl.AreAccessRulesProtected 'Destination inherits public permissions.'
        Assert-Test (@($acl.GetAccessRules($true, $true, [Security.Principal.SecurityIdentifier]) | Where-Object { $_.IdentityReference.Value -notin @([Security.Principal.WindowsIdentity]::GetCurrent().User.Value, 'S-1-5-18', 'S-1-5-32-544') }).Count -eq 0) 'Unexpected destination access.'
        Assert-Test (@(Get-ChildItem -LiteralPath $destination -Force -Filter '.incoming-*').Count -eq 0) 'Staging directory remains after success.'
    }
    Test-Case 'verified duplicates skip all transfers and retain older local backups indefinitely' {
        $old = New-Fixture 'maroquiz-2000-01-01T030000+0000-11223344'
        $oldTarget = Join-Path $destination $old.Metadata.id
        Copy-Item -LiteralPath $old.Folder -Destination $oldTarget -Recurse
        $script:calls.Clear()
        Assert-Test ((Sync-MaroQuizBackup $configuration).Status -eq 'AlreadyVerified') 'Duplicate was not recognized.'
        Assert-Test ($script:calls.Count -eq 1 -and $script:calls[0].Program -eq 'ssh') 'Duplicate backup was downloaded again.'
        Test-MaroBackupBundle $oldTarget $old.Metadata
    }
    Test-Case 'offline attempts preserve server files and completed local backups' {
        $script:mode = 'offline'; $script:calls.Clear()
        Assert-Fails { Sync-MaroQuizBackup $configuration } 'Offline'
        Assert-Test (Test-Path -LiteralPath $latest) 'Offline attempt deleted a local backup.'
        Test-MaroBackupBundle $server.Folder $server.Metadata
        Assert-Test ($script:calls.Count -eq 1) 'Offline attempt tried additional remote operations.'
        $script:mode = 'success'
    }
    foreach ($failure in @('interrupted', 'corrupt', 'sidecar', 'unsafe-id')) {
        Test-Case ($failure + ' transfer cannot publish incomplete files or delete prior backups') {
            $script:mode = $failure
            $fresh = Join-Path $testRoot ('failure-' + $failure)
            [IO.Directory]::CreateDirectory($fresh) | Out-Null
            [IO.File]::WriteAllText((Join-Path $fresh 'history.keep'), 'older backup history')
            Assert-Fails { Sync-MaroQuizBackup (Write-Config $fresh) } 'Interrupted|SHA-256|invalid backup identifier|checksums'
            Assert-Test (-not (Test-Path -LiteralPath (Join-Path $fresh $server.Metadata.id))) 'Failed download was published.'
            Assert-Test (([IO.File]::ReadAllText((Join-Path $fresh 'history.keep'))) -eq 'older backup history') 'Local history changed.'
            Assert-Test (@(Get-ChildItem -LiteralPath $fresh -Force -Filter '.incoming-*').Count -eq 0) 'Failed attempt left staging files.'
            $script:mode = 'success'
        }
    }
    Test-Case 'a corrupt existing backup is rejected without overwrite or download' {
        [IO.File]::WriteAllText((Join-Path $latest 'manifest.json'), 'retained corrupt fixture')
        $script:calls.Clear()
        Assert-Fails { Sync-MaroQuizBackup $configuration } 'SHA-256'
        Assert-Test ($script:calls.Count -eq 1) 'Corrupt existing copy was overwritten via SCP.'
        Assert-Test (([IO.File]::ReadAllText((Join-Path $latest 'manifest.json'))) -eq 'retained corrupt fixture') 'Corrupt existing copy changed.'
    }
    Test-Case 'the sync lock is released even if interrupted staging cleanup cannot finish' {
        $fresh = Join-Path $testRoot 'locked-staging'
        $script:mode = 'locked-staging'
        try {
            Assert-Fails { Sync-MaroQuizBackup (Write-Config $fresh) } '.'
            Assert-Test (-not (Test-Path -LiteralPath (Join-Path $fresh $server.Metadata.id))) 'Locked staging was published.'
            $released = [IO.File]::Open((Join-Path $fresh '.sync.lock'), [IO.FileMode]::Open, [IO.FileAccess]::ReadWrite, [IO.FileShare]::None)
            $released.Dispose()
        } finally {
            if ($null -ne $script:stagingHandle) { $script:stagingHandle.Dispose(); $script:stagingHandle = $null }
            $script:mode = 'success'
        }
    }
    Test-Case 'manual and scheduled runs share an exclusive destination lock' {
        $script:calls.Clear()
        $held = [IO.File]::Open((Join-Path $destination '.sync.lock'), [IO.FileMode]::OpenOrCreate, [IO.FileAccess]::ReadWrite, [IO.FileShare]::None)
        try { Assert-Fails { Sync-MaroQuizBackup $configuration } 'lock' } finally { $held.Dispose() }
        Assert-Test ($script:calls.Count -eq 0) 'Overlap started a remote request.'
    }
    Test-Case 'SSH options, traversal, root/UNC destinations and credential properties are rejected' {
        $script:calls.Clear()
        foreach ($bad in @((Write-Config $destination '-oProxyCommand=bad'), (Write-Config $destination 'fixture' '/var/../secret'), (Write-Config 'C:\'), (Write-Config '\\server\share\backups'))) {
            Assert-Fails { Sync-MaroQuizBackup $bad } 'SSH host alias|traversal|drive root|absolute local'
        }
        $bad = Write-Config $destination
        $object = Get-Content -LiteralPath $bad -Raw | ConvertFrom-Json
        $object | Add-Member -NotePropertyName Password -NotePropertyValue 'fixture-password-never-logged'
        [IO.File]::WriteAllText($bad, ($object | ConvertTo-Json), $utf8)
        Assert-Fails { Sync-MaroQuizBackup $bad } 'do not store passwords'
        Assert-Test ($script:calls.Count -eq 0) 'Invalid configuration made a remote request.'
    }
    Test-Case 'yesterday is delegated to the VPS clock rather than calculated on Windows' {
        $script:calls.Clear()
        Sync-MaroQuizBackup (Write-Config (Join-Path $testRoot 'yesterday')) -PreviousDay | Out-Null
        Assert-Test ($script:calls[0].Arguments[-1].EndsWith(' --yesterday')) 'VPS date lookup flag missing.'
    }
    Test-Case 'Task Scheduler definition uses logon, daily, catch-up, key-friendly interactive user and no overlap' {
        $task = New-MaroBackupScheduledTask (Join-Path $tools 'Sync-MaroQuizBackup.ps1') $configuration '09:15'
        Assert-Test ($task.Triggers.Count -eq 2) 'Expected logon and daily triggers.'
        Assert-Test (@($task.Triggers | Where-Object { $_.CimClass.CimClassName -eq 'MSFT_TaskLogonTrigger' }).Count -eq 1) 'Logon trigger missing.'
        $daily = @($task.Triggers | Where-Object { $_.CimClass.CimClassName -eq 'MSFT_TaskDailyTrigger' })
        Assert-Test ($daily.Count -eq 1 -and $daily[0].DaysInterval -eq 1 -and $daily[0].StartBoundary -match 'T09:15:00') 'Daily trigger incorrect.'
        Assert-Test ($task.Settings.StartWhenAvailable -and $task.Settings.RunOnlyIfNetworkAvailable -and $task.Settings.MultipleInstances -eq 2) 'Catch-up/network/overlap settings incorrect.'
        Assert-Test ($task.Settings.RestartCount -eq 3 -and $task.Settings.ExecutionTimeLimit -eq 'PT3H') 'Retry/time limit missing.'
        Assert-Test ($task.Principal.LogonType -eq 3 -and $task.Principal.RunLevel -eq 0) 'Task should use the current logged-on user without stored passwords or elevation.'
        Assert-Test ($task.Actions[0].Arguments.Contains(' -ConfigPath "' + $configuration + '"')) 'Configuration path is not quoted correctly.'
    }
    Test-Case 'task installer WhatIf keeps custom configuration and never registers a task' {
        # The default config does not exist: this also catches lost custom parameters.
        & (Join-Path $tools 'Install-MaroQuizBackupTask.ps1') -ConfigPath $configuration -DailyAt '09:15' -WhatIf
        Assert-Test ($script:registrationCalls -eq 0) 'A task registration was attempted.'
    }
    Write-Output ('PASS: ' + $script:passed + ' Windows backup checks; no VPS connections or scheduled tasks created.')
} finally {
    # Only this test's randomly named directory, never a configured backup folder.
    if ($null -ne $script:stagingHandle) { $script:stagingHandle.Dispose() }
    if (Test-Path -LiteralPath $testRoot) { Remove-Item -LiteralPath $testRoot -Recurse -Force }
}
