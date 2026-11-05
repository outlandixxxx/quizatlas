#Requires -Version 5.1
[CmdletBinding(SupportsShouldProcess)]
param(
    [string]$ConfigPath = (Join-Path $PSScriptRoot 'sync.config.json'),
    [ValidatePattern('\A(?:[01][0-9]|2[0-3]):[0-5][0-9]\z')][string]$DailyAt = '09:00',
    [string]$TaskName = 'MaroQuiz Backup Sync'
)

Set-StrictMode -Version Latest
$ErrorActionPreference = 'Stop'
$installerCmdlet = $PSCmdlet
. (Join-Path $PSScriptRoot 'Sync-MaroQuizBackup.ps1') -ConfigPath $ConfigPath

function New-MaroBackupScheduledTask {
    param([string]$Script, [string]$Configuration, [string]$Time)
    Assert-MaroBackup ($Script -match '\A[A-Za-z]:\\' -and $Configuration -match '\A[A-Za-z]:\\' -and $Script -notmatch '["\x00-\x1f]' -and $Configuration -notmatch '["\x00-\x1f]') 'Install both scripts and configuration on a local Windows drive.'
    $identity = [Security.Principal.WindowsIdentity]::GetCurrent().User.Value
    $action = New-ScheduledTaskAction -Execute (Join-Path $env:WINDIR 'System32\WindowsPowerShell\v1.0\powershell.exe') -Argument ('-NoLogo -NoProfile -NonInteractive -File "{0}" -ConfigPath "{1}"' -f $Script, $Configuration) -WorkingDirectory ([IO.Path]::GetDirectoryName($Script))
    $triggers = @((New-ScheduledTaskTrigger -AtLogOn -User $identity),
        (New-ScheduledTaskTrigger -Daily -At ([datetime]::Today.Add([timespan]::ParseExact($Time, 'hh\:mm', [Globalization.CultureInfo]::InvariantCulture)))))
    $settings = New-ScheduledTaskSettingsSet -StartWhenAvailable -RunOnlyIfNetworkAvailable -MultipleInstances IgnoreNew -ExecutionTimeLimit (New-TimeSpan -Hours 3) -RestartCount 3 -RestartInterval (New-TimeSpan -Minutes 15) -AllowStartIfOnBatteries -DontStopIfGoingOnBatteries
    $principal = New-ScheduledTaskPrincipal -UserId $identity -LogonType Interactive -RunLevel Limited
    return New-ScheduledTask -Action $action -Trigger $triggers -Settings $settings -Principal $principal -Description 'Read-only MaroQuiz backup synchronization at logon and daily. Retain all local backups.'
}

if ($MyInvocation.InvocationName -ne '.') {
    try {
        $configuration = (Get-Item -LiteralPath $ConfigPath).FullName
        Get-MaroBackupConfig $configuration | Out-Null
        $scriptFile = (Get-Item -LiteralPath (Join-Path $PSScriptRoot 'Sync-MaroQuizBackup.ps1')).FullName
        $task = New-MaroBackupScheduledTask $scriptFile $configuration $DailyAt
        if ($installerCmdlet.ShouldProcess($TaskName, 'Register logon/daily Windows backup synchronization for the current user')) {
            Register-ScheduledTask -TaskName $TaskName -InputObject $task -ErrorAction Stop | Out-Null
            Write-Output ('Installed task: ' + $TaskName + '. Daily at ' + $DailyAt + ' in the Windows PC timezone, plus user logon.')
        }
    } catch { [Console]::Error.WriteLine('ERROR: ' + $_.Exception.Message); exit 1 }
}
