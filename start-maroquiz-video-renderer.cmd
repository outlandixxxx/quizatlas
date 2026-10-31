@echo off
setlocal
rem Never use the WSL UNC share as CMD's working directory.
rem This same small file can be copied to the Windows Desktop unchanged.
cd /d "%SystemRoot%"
set "WSL_EXE=%SystemRoot%\System32\wsl.exe"
if not exist "%WSL_EXE%" (
  echo ERROR: Windows Subsystem for Linux is unavailable. Enable WSL and the Ubuntu distribution.
  pause
  exit /b 1
)
"%WSL_EXE%" -d Ubuntu --exec /bin/true
if errorlevel 1 (
  echo ERROR: Cannot start the WSL distribution Ubuntu.
  echo Run: wsl.exe --list --verbose
  echo This launcher needs the existing Ubuntu project, not Windows Node or FFmpeg.
  pause
  exit /b 1
)
echo MaroQuiz video, revision image and PDF renderer - Ubuntu WSL - Linux dependencies only
echo Project: /home/lenovo/Projects/quizatlas
if "%~1"=="--check" goto check
echo Keep this console open for renderer logs. Press Ctrl+C to stop.
"%WSL_EXE%" -d Ubuntu --cd /home/lenovo/Projects/quizatlas --exec /bin/bash -lc "exec /bin/bash /home/lenovo/Projects/quizatlas/video-generator/start-local-runner.sh"
set "RENDER_EXIT=%ERRORLEVEL%"
echo.
if not "%RENDER_EXIT%"=="0" echo ERROR: Ubuntu renderer exited with code %RENDER_EXIT%. Check the Linux diagnostics above.
echo Renderer session ended. Existing output files have been preserved.
pause
exit /b %RENDER_EXIT%
:check
"%WSL_EXE%" -d Ubuntu --cd /home/lenovo/Projects/quizatlas --exec /bin/bash -lc "exec /bin/bash /home/lenovo/Projects/quizatlas/video-generator/start-local-runner.sh --check"
exit /b %ERRORLEVEL%
