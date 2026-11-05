#Requires -Version 5.1
[CmdletBinding()]
param(
    [string]$ConfigPath = (Join-Path $PSScriptRoot 'sync.config.json'),
    [switch]$Yesterday
)

Set-StrictMode -Version Latest
$ErrorActionPreference = 'Stop'

function Assert-MaroBackup {
    param([bool]$Condition, [string]$Message)
    if (-not $Condition) { throw $Message }
}

function Assert-MaroLocalPath {
    param([string]$Path)
    Assert-MaroBackup ($Path -match '\A[A-Za-z]:[\\/]' -and $Path -notmatch '["<>|*?\x00-\x1f]' -and -not $Path.Substring(2).Contains(':')) 'Use an absolute local Windows folder, without wildcards or alternate streams.'
    $full = [IO.Path]::GetFullPath($Path).TrimEnd('\')
    Assert-MaroBackup ($full.Length -gt 3) 'A drive root cannot be the backup destination.'
    foreach ($protected in @($env:USERPROFILE, $env:WINDIR, $env:ProgramFiles, $env:ProgramData, $env:PUBLIC)) {
        Assert-MaroBackup (-not $protected -or $full -ine $protected.TrimEnd('\')) 'Choose a dedicated backup folder, not a profile or system folder.'
    }
    $ancestor = [IO.DirectoryInfo]::new($full)
    while ($null -ne $ancestor) {
        if (Test-Path -LiteralPath $ancestor.FullName) {
            Assert-MaroBackup (-not ([IO.File]::GetAttributes($ancestor.FullName) -band [IO.FileAttributes]::ReparsePoint)) 'Backup paths must not contain junctions or symbolic links.'
        }
        $ancestor = $ancestor.Parent
    }
    return $full
}

function Get-MaroBackupConfig {
    param([string]$Path)
    Assert-MaroBackup ([Environment]::OSVersion.Platform -eq [PlatformID]::Win32NT) 'Run this synchronization script in native Windows PowerShell.'
    $file = Get-Item -LiteralPath $Path
    Assert-MaroBackup (-not $file.PSIsContainer -and $file.Length -lt 16384) 'Invalid sync configuration file.'
    $config = Get-Content -LiteralPath $Path -Raw -Encoding UTF8 | ConvertFrom-Json
    $properties = @($config.PSObject.Properties.Name)
    Assert-MaroBackup ($properties.Count -eq 3 -and @($properties | Where-Object { $_ -cnotin @('SshHost', 'RemoteBackupDirectory', 'Destination') }).Count -eq 0) 'Configuration needs only SshHost, RemoteBackupDirectory and Destination; do not store passwords.'
    Assert-MaroBackup ($config.SshHost -is [string] -and $config.SshHost -cmatch '\A[A-Za-z0-9][A-Za-z0-9._-]*(?:@[A-Za-z0-9][A-Za-z0-9._-]*)?\z') 'Use an SSH host alias or user@hostname; SSH options are not accepted here.'
    Assert-MaroBackup ($config.RemoteBackupDirectory -is [string] -and $config.RemoteBackupDirectory -cmatch '\A/[A-Za-z0-9_./-]+\z' -and @($config.RemoteBackupDirectory.Split('/') | Where-Object { $_ -in @('.', '..') }).Count -eq 0) 'Remote backup directory must be an absolute shell-safe path without traversal.'
    Assert-MaroBackup ($config.Destination -is [string]) 'Destination must be a Windows folder.'
    $config.Destination = Assert-MaroLocalPath $config.Destination
    $config.RemoteBackupDirectory = $config.RemoteBackupDirectory.TrimEnd('/')
    Assert-MaroBackup ($config.RemoteBackupDirectory.Length -gt 0) 'Remote backup directory cannot be the filesystem root.'
    return $config
}

function Initialize-MaroBackupDirectory {
    param([string]$Path)
    $drive = [IO.DriveInfo]::new([IO.Path]::GetPathRoot($Path))
    Assert-MaroBackup ($drive.IsReady -and $drive.DriveType -ne [IO.DriveType]::Network -and $drive.DriveFormat -in @('NTFS', 'ReFS')) 'Use a ready local NTFS/ReFS drive supporting private Windows permissions.'
    [IO.Directory]::CreateDirectory($Path) | Out-Null
    # Persist only the DACL, never audit/owner sections requiring elevated privileges.
    $acl = [Security.AccessControl.DirectorySecurity]::new($Path, [Security.AccessControl.AccessControlSections]::Access)
    $owner = [Security.Principal.WindowsIdentity]::GetCurrent().User
    $acl.SetAccessRuleProtection($true, $false)
    foreach ($existing in @($acl.GetAccessRules($true, $false, [Security.Principal.SecurityIdentifier]))) { $acl.RemoveAccessRuleSpecific($existing) }
    foreach ($sid in @($owner.Value, 'S-1-5-18', 'S-1-5-32-544')) {
        $rule = [Security.AccessControl.FileSystemAccessRule]::new(
            [Security.Principal.SecurityIdentifier]::new($sid),
            [Security.AccessControl.FileSystemRights]::FullControl,
            [Security.AccessControl.InheritanceFlags]'ContainerInherit, ObjectInherit',
            [Security.AccessControl.PropagationFlags]::None,
            [Security.AccessControl.AccessControlType]::Allow)
        $acl.AddAccessRule($rule)
    }
    if ($PSVersionTable.PSVersion.Major -le 5) { [IO.Directory]::SetAccessControl($Path, $acl) }
    else { [IO.FileSystemAclExtensions]::SetAccessControl([IO.DirectoryInfo]::new($Path), $acl) }
}

function Invoke-MaroOpenSsh {
    param([ValidateSet('ssh', 'scp')][string]$Program, [string[]]$CommandArguments)
    $executable = Join-Path $env:WINDIR ('System32\OpenSSH\' + $Program + '.exe')
    Assert-MaroBackup (Test-Path -LiteralPath $executable -PathType Leaf) 'Install the Windows OpenSSH Client optional feature first.'
    $savedPreference = $ErrorActionPreference
    try {
        # Capture native stderr as well: it must not leak into task logs.
        $ErrorActionPreference = 'Continue'
        $output = @(& $executable @CommandArguments 2>&1)
        $code = $LASTEXITCODE
    } finally { $ErrorActionPreference = $savedPreference }
    Assert-MaroBackup ($code -eq 0) 'SSH/SCP failed. Check connectivity, the trusted host key, key authentication and backup-reader access. Native output suppressed.'
    return ($output | ForEach-Object { [string]$_ }) -join "`n"
}

function Get-MaroTransferMetadata {
    param([object]$Config, [string[]]$SshOptions, [switch]$PreviousDay)
    $command = '/usr/bin/python3 /usr/local/lib/maroquiz-backup/maroquiz_backup.py latest --backup-dir ' + $Config.RemoteBackupDirectory
    if ($PreviousDay) { $command += ' --yesterday' }
    $raw = Invoke-MaroOpenSsh 'ssh' (@($SshOptions) + @('-T', '--', $Config.SshHost, $command))
    Assert-MaroBackup ($raw.Length -lt 16384) 'VPS lookup response is oversized.'
    $metadata = $raw | ConvertFrom-Json
    Assert-MaroBackup ($metadata.id -is [string] -and $metadata.id -cmatch '\Amaroquiz-[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{6}[+-][0-9]{4}-[0-9a-f]{8}\z') 'VPS returned an invalid backup identifier.'
    foreach ($field in @('sha256', 'manifest_sha256')) {
        Assert-MaroBackup ($metadata.$field -is [string] -and $metadata.$field -cmatch '\A[0-9a-f]{64}\z') 'VPS returned invalid SHA-256 metadata. Install the matching backup tools release.'
    }
    Assert-MaroBackup (($metadata.size_bytes -is [long] -or $metadata.size_bytes -is [int]) -and $metadata.size_bytes -gt 0) 'VPS returned an invalid archive size.'
    return $metadata
}

function Test-MaroBackupBundle {
    param([string]$Directory, [object]$Metadata)
    $item = Get-Item -LiteralPath $Directory -Force
    Assert-MaroBackup ($item.PSIsContainer -and -not ($item.Attributes -band [IO.FileAttributes]::ReparsePoint)) 'Invalid local backup directory.'
    $archive = $Metadata.id + '.tar.gz'
    $names = @($archive, 'manifest.json', 'SHA256SUMS')
    $entries = @(Get-ChildItem -LiteralPath $Directory -Force)
    Assert-MaroBackup ($entries.Count -eq 3) 'Local backup components are missing or unexpected; nothing will be overwritten.'
    foreach ($entry in $entries) {
        Assert-MaroBackup ($entry.Name -cin $names -and -not $entry.PSIsContainer -and -not ($entry.Attributes -band [IO.FileAttributes]::ReparsePoint)) 'Unsafe local backup component.'
    }
    Assert-MaroBackup ((Get-Item -LiteralPath (Join-Path $Directory 'manifest.json')).Length -le 32MB -and (Get-Item -LiteralPath (Join-Path $Directory 'SHA256SUMS')).Length -lt 4096) 'Backup metadata is oversized.'
    $sums = @{}
    foreach ($line in [IO.File]::ReadAllLines((Join-Path $Directory 'SHA256SUMS'))) {
        Assert-MaroBackup ($line -cmatch '\A([0-9a-f]{64})  (.+)\z') 'Invalid checksum file.'
        $hash = $Matches[1]; $name = $Matches[2]
        Assert-MaroBackup ($name -cin @($archive, 'manifest.json') -and -not $sums.ContainsKey($name)) 'Unexpected or duplicate checksum entry.'
        $sums[$name] = $hash
    }
    Assert-MaroBackup ($sums.Count -eq 2 -and $sums[$archive] -ceq $Metadata.sha256 -and $sums['manifest.json'] -ceq $Metadata.manifest_sha256) 'Downloaded checksums disagree with the authenticated VPS lookup.'
    foreach ($name in @($archive, 'manifest.json')) {
        $actual = (Get-FileHash -LiteralPath (Join-Path $Directory $name) -Algorithm SHA256).Hash.ToLowerInvariant()
        Assert-MaroBackup ($actual -ceq $sums[$name]) 'Local backup SHA-256 mismatch; existing backups are retained.'
    }
    Assert-MaroBackup ((Get-Item -LiteralPath (Join-Path $Directory $archive)).Length -eq $Metadata.size_bytes) 'Local archive size mismatch.'
    $manifest = Get-Content -LiteralPath (Join-Path $Directory 'manifest.json') -Raw -Encoding UTF8 | ConvertFrom-Json
    Assert-MaroBackup ($manifest.schema_version -eq 1 -and $manifest.id -ceq $Metadata.id -and $manifest.status -ceq 'complete' -and $manifest.timezone -ceq 'Africa/Casablanca') 'The backup manifest is incomplete or belongs to another backup.'
}

function Sync-MaroQuizBackup {
    param([string]$Configuration, [switch]$PreviousDay)
    $config = Get-MaroBackupConfig $Configuration
    Initialize-MaroBackupDirectory $config.Destination
    $lock = $null; $incoming = $null
    try {
        try { $lock = [IO.File]::Open((Join-Path $config.Destination '.sync.lock'), [IO.FileMode]::OpenOrCreate, [IO.FileAccess]::ReadWrite, [IO.FileShare]::None) }
        catch { throw 'Another sync holds the destination lock, or the lock is not writable; no transfer started.' }
        $options = @('-o', 'BatchMode=yes', '-o', 'PasswordAuthentication=no', '-o', 'KbdInteractiveAuthentication=no',
            '-o', 'StrictHostKeyChecking=yes', '-o', 'ConnectTimeout=10', '-o', 'ConnectionAttempts=1',
            '-o', 'ServerAliveInterval=15', '-o', 'ServerAliveCountMax=3', '-o', 'LogLevel=ERROR')
        $metadata = Get-MaroTransferMetadata $config $options -PreviousDay:$PreviousDay
        $target = Join-Path $config.Destination $metadata.id
        if (Test-Path -LiteralPath $target) {
            Test-MaroBackupBundle $target $metadata
            return [pscustomobject]@{ Status = 'AlreadyVerified'; BackupId = $metadata.id; Directory = $target }
        }
        $drive = [IO.DriveInfo]::new([IO.Path]::GetPathRoot($config.Destination))
        Assert-MaroBackup ($drive.AvailableFreeSpace -ge ([decimal]$metadata.size_bytes + 96MB)) 'Insufficient local free space; previous backups are retained.'
        $incoming = Join-Path $config.Destination ('.incoming-' + [guid]::NewGuid().ToString('N'))
        [IO.Directory]::CreateDirectory($incoming) | Out-Null
        Push-Location -LiteralPath $incoming
        try {
            foreach ($name in @('SHA256SUMS', 'manifest.json', ($metadata.id + '.tar.gz'))) {
                $remote = $config.SshHost + ':' + $config.RemoteBackupDirectory + '/' + $metadata.id + '/' + $name
                # A relative local filename avoids SCP ambiguity with Windows drive colons/spaces.
                Invoke-MaroOpenSsh 'scp' (@('-q') + $options + @('--', $remote, $name)) | Out-Null
            }
        } finally { Pop-Location }
        Test-MaroBackupBundle $incoming $metadata
        foreach ($file in Get-ChildItem -LiteralPath $incoming -Force) {
            $stream = [IO.File]::Open($file.FullName, [IO.FileMode]::Open, [IO.FileAccess]::ReadWrite, [IO.FileShare]::Read)
            try { $stream.Flush($true) } finally { $stream.Dispose() }
        }
        # Same-volume directory move: incomplete files never appear under the final backup ID.
        [IO.Directory]::Move($incoming, $target)
        $incoming = $null
        return [pscustomobject]@{ Status = 'Verified'; BackupId = $metadata.id; Directory = $target }
    } finally {
        # Delete only this attempt's private staging directory, never a completed backup.
        try {
            if ($null -ne $incoming -and (Test-Path -LiteralPath $incoming)) { Remove-Item -LiteralPath $incoming -Recurse -Force }
        } finally { if ($null -ne $lock) { $lock.Dispose() } }
    }
}

if ($MyInvocation.InvocationName -ne '.') {
    try { Sync-MaroQuizBackup -Configuration $ConfigPath -PreviousDay:$Yesterday }
    catch { [Console]::Error.WriteLine('ERROR: ' + $_.Exception.Message); exit 1 }
}
