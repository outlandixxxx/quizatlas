# MaroQuiz VPS backups and native Windows synchronization

Preparation only: these files do not install themselves. No VPS connection or deployment is part of local verification. Production uses `/opt/maroquiz/docker-compose.prod.yml`.

## What is backed up

The runner discovers the real Compose containers and volume names, checks their production labels, and uses the local Docker socket. It requires `maroquiz-php` and `maroquiz-postgres` from this production Compose file. The existing `postgres:17` container supplies `pg_dump` and its credentials; passwords never appear in command arguments or logs.

- **Database:** a consistent custom-format PostgreSQL dump. A full `pg_restore --file=/dev/null` read/decompression check runs before publication, without connecting to a restore database. [PostgreSQL's dump documentation](https://www.postgresql.org/docs/17/app-pgdump.html).
- **Uploads:** all of the persistent `laravel_storage` volume's `storage/app`, including private files, public avatars, Exam PDF Bank PDFs and `exam_pdfs/concours/announcements`. The Laravel configuration probe reads effective cached/uncached configuration without booting providers or connecting to a database. External roots, remote disks, nested mounts and symlinks fail closed. An absent exam-PDF directory is allowed only when no database PDF record needs it. Database-referenced local PDFs/avatars must exist.
- **Manifest:** UTC start/completion timestamps, Casablanca date/timezone, database/version, discovered volume names, disk mappings, component sizes/SHA-256 and a complete per-file upload inventory.

Redis/cache/sessions/queues, Laravel logs/framework files, rebuildable public assets, raw PostgreSQL data, roles, environment files, secrets, SSL certificates and local rendering directories are not part of this backup. Preserve the production environment and original `APP_KEY` separately in an encrypted credential/configuration backup. Never substitute a local development `.env` during recovery.

There is no application pause or maintenance-mode write. The upload tree is hashed and its inode/size/mtime/ctime metadata checked before the dump and after copying. A changing upload tree or a missing referenced file makes the run fail rather than publish an inconsistent file set. A quiet upload window is required; ordinary database-only quiz activity can continue. This is an application-level consistency check, not a storage-level atomic snapshot.

Each successful backup is published by a same-filesystem directory rename:

```text
/var/backups/maroquiz/maroquiz-YYYY-MM-DDTHHMMSS+ZZZZ-xxxxxxxx/
  maroquiz-YYYY-MM-DDTHHMMSS+ZZZZ-xxxxxxxx.tar.gz
  manifest.json
  SHA256SUMS
```

The archive contains `manifest.json`, `database.dump` and `uploads.tar`. The sidecar checksums protect both the archive and external manifest; verification also checks the internal manifest, dump component, upload tar entries and every uploaded file. No tar extraction is needed to verify integrity. SHA-256 detects corruption, not a malicious rewrite by someone with backup write access.

Staging stays root-private (0700). Published directories are root:`maroquiz-backup` 0750; files are 0640. Only trusted backup readers may join this group. The destination must be under `/var/backups`, outside the application and data volumes, with no symlinks. Nothing is exposed through Laravel, Nginx or an HTTP download route.

## Production installation — run later on the reviewed VPS

The following commands assume the reviewed backup files have been placed under `/opt/maroquiz/infrastructure/backup`. They do not change Compose services, application data, migrations, seeders, existing environments or volumes. Change `ubuntu` only if your authorized SSH reader has another username.

```bash
cd /opt/maroquiz
sudo apt-get update
sudo apt-get install -y python3 tzdata util-linux
sudo groupadd --system --force maroquiz-backup
sudo usermod -aG maroquiz-backup ubuntu
sudo install -d -o root -g root -m 0755 /usr/local/lib/maroquiz-backup
sudo install -o root -g root -m 0755 infrastructure/backup/maroquiz_backup.py /usr/local/lib/maroquiz-backup/
sudo install -o root -g root -m 0644 infrastructure/backup/probe-storage.php /usr/local/lib/maroquiz-backup/
sudo install -d -o root -g maroquiz-backup -m 0750 /var/backups/maroquiz
# First installation only: preserve an existing backup configuration.
if ! sudo test -e /etc/maroquiz-backup.env; then
  sudo install -o root -g root -m 0600 infrastructure/backup/backup.env.example /etc/maroquiz-backup.env
fi
sudo install -o root -g root -m 0644 infrastructure/backup/maroquiz-backup.service infrastructure/backup/maroquiz-backup.timer /etc/systemd/system/
sudo systemd-analyze verify /etc/systemd/system/maroquiz-backup.service /etc/systemd/system/maroquiz-backup.timer
sudo systemctl daemon-reload

# Read-only preflight using exactly the installed environment settings.
sudo systemd-run --wait --pipe --collect --property=EnvironmentFile=/etc/maroquiz-backup.env /usr/bin/python3 /usr/local/lib/maroquiz-backup/maroquiz_backup.py backup --check

# First real backup; enable the timer only after this succeeds.
sudo systemctl start maroquiz-backup.service
sudo systemctl status maroquiz-backup.service --no-pager
sudo systemctl enable --now maroquiz-backup.timer
systemctl list-timers maroquiz-backup.timer --all
sudo journalctl -u maroquiz-backup.service --since today --no-pager
```

Keep Ubuntu `tzdata` and time synchronization current. The exact calendar is `*-*-* 03:00:00 Africa/Casablanca`, with one-second scheduling accuracy and no random delay; there is no fixed UTC offset and the VPS host timezone need not change. This handles Morocco's timezone transitions through IANA data. `Persistent=true` makes a missed run catch up after downtime. Failed runs retry after 15 minutes, with at most three starts per two-hour window. [systemd calendar syntax](https://www.freedesktop.org/software/systemd/man/latest/systemd.time.html), [timer behavior](https://www.freedesktop.org/software/systemd/man/latest/systemd.timer.html).

`/etc/maroquiz-backup.env` defaults to 14 days of server retention and a 1024 MiB free-space reserve. Preflight requires at least `3 × (database size + upload bytes) + reserve` to cover temporary/archive copies. There is also a reserve check before publication; I/O failures stop the run. For large data, mount reviewed backup storage below `/var/backups` and change the destination explicitly.

Retention runs **only after the new backup has been fully verified and published**, using UTC completion age (14 × 24 hours by default). Only matching, complete, verified expired bundles can be removed. Unrelated/corrupt files and abandoned private staging directories are retained for manual review. Failure before publication never deletes prior backups. Overlap is blocked with `flock`; the script never starts/stops containers or restores data. Docker must already be available. Child command output is suppressed to prevent credential leakage; failures name the operation. Watch systemd failures and last successful backup age; no external alert delivery is configured.

## Windows 10/11 installation

Windows sync is optional and independent of the VPS job. It needs only native Windows PowerShell 5.1 and the Windows OpenSSH Client (`ssh.exe`/`scp.exe`), not Python, Docker or another service on the PC. It runs read-only `latest` lookup on the VPS and downloads three known files. No remote backup, deletion, retention or restore command is issued.

From **Windows PowerShell**, confirm the built-in client is installed:

```powershell
Get-Command "$env:WINDIR\System32\OpenSSH\ssh.exe", "$env:WINDIR\System32\OpenSSH\scp.exe"
```

If absent, install the **OpenSSH Client** Windows optional feature. The equivalent command, in an elevated PowerShell window, is `Add-WindowsCapability -Online -Name OpenSSH.Client~~~~0.0.1.0`.

Copy the two scripts and example configuration from a Windows repository checkout, or copy these files to Windows first. Keep the installed tools on a local Windows drive, accessible to your Windows user:

```powershell
$Tools = Join-Path $env:LOCALAPPDATA 'MaroQuiz\BackupTools'
New-Item -ItemType Directory -Path $Tools -Force | Out-Null
Copy-Item '.\infrastructure\backup\windows\*.ps1' -Destination $Tools
$Config = Join-Path $Tools 'sync.config.json'
if (-not (Test-Path -LiteralPath $Config)) {
    Copy-Item '.\infrastructure\backup\windows\sync.config.example.json' -Destination $Config
}
# After reviewing downloaded scripts, remove their download mark if necessary.
Get-ChildItem -LiteralPath $Tools -Filter '*.ps1' | Unblock-File
notepad $Config
```

The configuration contains **no credentials**:

```json
{
  "SshHost": "maroquiz-backup",
  "RemoteBackupDirectory": "/var/backups/maroquiz",
  "Destination": "D:\\MaroQuiz\\Backups"
}
```

Use a dedicated NTFS/ReFS folder, outside repositories, web roots and shared/cloud-synced folders. The script restricts its destination's permissions to the current Windows user, SYSTEM and Administrators; downloaded files inherit them. Junctions, symbolic links, network shares and drive roots are rejected. Backup archives contain private data and database password hashes; protect the Windows account and disk. No completed local backups are ever deleted or overwritten automatically, irrespective of the VPS's 14-day retention.

### SSH key setup

Use the Windows user's existing key and SSH agent. Create an alias in `%USERPROFILE%\.ssh\config`, for example:

```text
Host maroquiz-backup
    HostName YOUR_VPS_IP
    User ubuntu
    Port 22
    IdentityFile C:/Users/YOUR_WINDOWS_USER/.ssh/id_ed25519
    IdentitiesOnly yes
```

The SSH user must belong to the VPS `maroquiz-backup` reader group; reconnect after that group change. An SSH alias also supports IPv6 and non-default ports. Direct `user@hostname`/IPv4 names are accepted. Never place SSH options or passwords in the JSON configuration.

Establish trust interactively **before scheduling**, checking the VPS host fingerprint against your trusted record:

```powershell
ssh maroquiz-backup true
# If using a passphrase-protected key, add it to the existing Windows SSH agent:
ssh-add "$env:USERPROFILE\.ssh\id_ed25519"
```

If the Windows `ssh-agent` service is disabled, an administrator can enable/start it with `Set-Service ssh-agent -StartupType Automatic` and `Start-Service ssh-agent`. Add your key as your normal Windows user. The script never stores a password/passphrase, prompts for one, disables host verification or accepts a new host key automatically. An unavailable key/agent produces a failed attempt that can retry later.

### Manual one-command download

From Windows PowerShell, after installation:

```powershell
& "$env:LOCALAPPDATA\MaroQuiz\BackupTools\Sync-MaroQuizBackup.ps1"
```

This uses the adjacent `sync.config.json` and downloads the **latest verified** VPS backup. For a different configuration:

```powershell
& "$env:LOCALAPPDATA\MaroQuiz\BackupTools\Sync-MaroQuizBackup.ps1" -ConfigPath 'C:\MaroQuiz\sync.config.json'
```

Add `-Yesterday` to request the newest successful backup from yesterday according to the **VPS's Africa/Casablanca clock**, not the Windows date. If that day has none, lookup fails clearly.

The VPS rechecks a previously verified publication's archive digest before returning its identifier, archive SHA-256/size and manifest SHA-256. Windows copies only `SHA256SUMS`, `manifest.json` and the archive into a private `.incoming-<random>` directory on the destination drive. It checks both files against their SHA-256 values from the authenticated lookup and sidecar, checks archive size and complete manifest identity, flushes the files, then renames the directory atomically to the final backup ID. Full dump/component/upload-inventory verification remains on the VPS and in the shared recovery tool; Windows does not duplicate tar parsing. Matching archive hashes establish that the transferred archive contains those already verified bytes.

A verified existing copy is rehashed and skipped without SCP. A corrupt existing copy fails clearly and is preserved for manual investigation. A failed transfer cleans up only that attempt's staging files when possible. A hard termination, power loss or locked staging file may leave a private `.incoming-*` folder; later runs ignore it and restart safely, without changing completed backups. Inspect abandoned staging folders manually. A destination lock prevents overlapping manual/scheduled transfers and is released even when staging cleanup fails. Local disk-space checks preserve previous copies when space is insufficient.

### Optional Windows Task Scheduler installation

Run as the same Windows user who owns the key and local backups:

```powershell
$Tools = Join-Path $env:LOCALAPPDATA 'MaroQuiz\BackupTools'
# Review without installing anything:
& "$Tools\Install-MaroQuizBackupTask.ps1" -DailyAt '09:00' -WhatIf
# Install after review:
& "$Tools\Install-MaroQuizBackupTask.ps1" -DailyAt '09:00'
Get-ScheduledTask -TaskName 'MaroQuiz Backup Sync'
Start-ScheduledTask -TaskName 'MaroQuiz Backup Sync'
Get-ScheduledTaskInfo -TaskName 'MaroQuiz Backup Sync'
```

The task runs at **your Windows user logon and daily at 09:00 in the Windows PC timezone** (change `-DailyAt HH:mm`). `StartWhenAvailable` catches missed scheduled runs, and the logon trigger catches the next signed-in session. It requires network availability, ignores overlaps, retries failed runs three times at 15-minute intervals and limits a run to three hours. It is allowed on battery and does not wake the PC.

The task uses the current user with limited privileges and **Run only when user is logged on**, so no Windows account password is stored and the user's SSH key/agent is available. A powered-off, sleeping, signed-out or disconnected PC cannot perform a download; the VPS backup/retention process continues independently. The next eligible trigger/catch-up retries. `LastTaskResult = 0` indicates success; script errors return nonzero and native SSH/SCP diagnostic output is suppressed. Task Scheduler history can provide run/failure timing. No task or SSH connection is created by local repository preparation.

Registration does not silently replace an existing task. Review an existing task or supply a different `-TaskName` if the name is already present. If Windows policy restricts task registration, use an authorized administrator session for installation under the intended Windows user. Execution policy remains unchanged; the scripts must be permitted by your existing policy. To disable scheduling without affecting files:

```powershell
Disable-ScheduledTask -TaskName 'MaroQuiz Backup Sync'
# Optional removal of the task definition only:
Unregister-ScheduledTask -TaskName 'MaroQuiz Backup Sync' -Confirm:$false
```

## Integrity checks and isolated restoration

Windows verifies archive/manifest SHA-256 on every sync, including skipped copies. Keep the entire three-file bundle for recovery. For a deeper offline verification or restore rehearsal, copy the complete Windows bundle to a **separate isolated Linux recovery machine** and use the existing shared Python tools below. Windows synchronization itself does not require Linux.

```bash
# Replace this with a downloaded bundle directory, not the .tar.gz inside it.
BUNDLE="/srv/maroquiz-restore-input/maroquiz-YYYY-MM-DDTHHMMSS+ZZZZ-xxxxxxxx"
python3 infrastructure/backup/maroquiz_backup.py verify "$BUNDLE"
# Optional independent outer-file check:
(cd "$BUNDLE" && sha256sum --check SHA256SUMS)

# This command refuses an existing destination and never connects to a database.
RESTORE_WORK="$(mktemp -d "$HOME/maroquiz-restore.XXXXXXXX")"
python3 infrastructure/backup/maroquiz_backup.py unpack "$BUNDLE" --destination "$RESTORE_WORK/components"
```

Rehearse on an isolated local/test machine with matching release code, no production environment, no production mounts, no published database port, and notifications/discovery/mail/jobs disabled. Keep the real production `APP_KEY` separately available if encrypted data must be inspected. Do not run the normal production Compose file for this rehearsal.

The following creates a **new, randomly named RAM-backed PostgreSQL 17 test container**. It does not target an existing database or volume. Use sufficient RAM for the actual backup size; a large rehearsal should instead use a separately provisioned disposable test volume, never `postgres_data`. Keep the restored server disconnected from production services.

```bash
RESTORE_CONTAINER="maroquiz-restore-test-$(date -u +%Y%m%dT%H%M%S)-$$"
docker run --rm -d --name "$RESTORE_CONTAINER" --network none \
  --tmpfs /var/lib/postgresql/data:rw,nosuid \
  -e POSTGRES_HOST_AUTH_METHOD=trust -e POSTGRES_USER=restore_owner -e POSTGRES_DB=maroquiz_restore postgres:17
until docker exec "$RESTORE_CONTAINER" pg_isready -U restore_owner -d maroquiz_restore; do sleep 1; done
docker exec -i "$RESTORE_CONTAINER" pg_restore -U restore_owner -d maroquiz_restore \
  --no-owner --no-acl --exit-on-error --single-transaction < "$RESTORE_WORK/components/database.dump"
docker exec "$RESTORE_CONTAINER" psql -X -U restore_owner -d maroquiz_restore \
  -c 'SELECT count(*) AS pdf_records FROM exam_pdfs; SELECT count(*) AS user_records FROM users;'

# uploads.tar was already checked to contain only safe relative regular files/directories.
mkdir -m 0700 "$RESTORE_WORK/uploads"
tar --extract --file "$RESTORE_WORK/components/uploads.tar" --directory "$RESTORE_WORK/uploads" --no-same-owner
find "$RESTORE_WORK/uploads" -type f | head
```

Compare counts with expected application records, inspect the manifest and sample PDF hashes, and use the matching application release to check PDF view/download and restored ownership in an isolated setup. `--no-owner --no-acl` makes the isolated restore belong to the test role; real runtime roles/grants are a separate reviewed recovery operation. A checksum pass and a successful synthetic test do not establish that a future production dump has passed a full application restore rehearsal.

Do not use `pg_restore --clean`, production database names, production Compose volumes, or a production `.env` with the rehearsal. No command automatically restores over production. Any eventual production recovery/reset requires separate target confirmation and authorization. Stop/remove **only** your named disposable test container when finished; do not run volume/global prune commands. Extracted backup copies are not deleted automatically.

## Focused local checks

```bash
python3 -m unittest discover -s infrastructure/tests -p backup_test.py -v
systemd-analyze verify infrastructure/backup/maroquiz-backup.service infrastructure/backup/maroquiz-backup.timer
systemd-analyze calendar --base-time='2026-02-14 00:00:00 UTC' --iterations=3 '*-*-* 03:00:00 Africa/Casablanca'
systemd-analyze calendar --base-time='2026-03-21 00:00:00 UTC' --iterations=3 '*-*-* 03:00:00 Africa/Casablanca'
# Opt-in: requires the existing local postgres:17 image; no image pull or app DB/volume access.
python3 infrastructure/tests/backup_postgres_smoke.py
```

The smoke test uses a new container with `--network none`, no ports, RAM-backed PostgreSQL storage and temporary upload fixtures. It exercises dump creation/decompression, SHA-256 verification, upload recovery and restoration into a new fixture database. It removes only its own random fixture container afterward. No production or development application database is accessed. Run real `backup --check` on the VPS only during the later authorized installation; the local tests cannot establish live mounts, capacity, SSH access or off-site recovery availability.

On Windows, from a repository checkout (no extra test framework):

```powershell
& '.\infrastructure\tests\backup_windows_test.ps1'
```

The Windows tests use temporary Windows directories and mocked SSH/SCP transfers. They cover checksums, partial/corrupt transfers, duplicate skipping, indefinite local history, offline failures, access permissions, concurrent-run locking, argument handling and actual Task Scheduler definition construction/WhatIf. Built-in OpenSSH is exercised only for version/invalid-query handling without a connection. No task is registered and no VPS is contacted. The server backup service, timer, 14-day default, dump/upload generation and shared verify/unpack tools remain unchanged.
