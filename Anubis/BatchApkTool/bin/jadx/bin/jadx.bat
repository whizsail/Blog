@if "%DEBUG%" == "" @echo off
@rem ##########################################################################
@rem
@rem  jadx startup script for Windows
@rem
@rem ##########################################################################

@rem Set local scope for the variables with windows NT shell
if "%OS%"=="Windows_NT" setlocal

set DIRNAME=%~dp0
if "%DIRNAME%" == "" set DIRNAME=.
set APP_BASE_NAME=%~n0
set APP_HOME=%DIRNAME%..

@rem Add default JVM options here. You can also use JAVA_OPTS and JADX_OPTS to pass JVM options to this script.
set DEFAULT_JVM_OPTS=

set JAVA_EXE=java.exe

@rem Get command-line arguments, handling Windows variants

if not "%OS%" == "Windows_NT" goto win9xME_args

:win9xME_args
@rem Slurp the command line arguments.
set CMD_LINE_ARGS=
set _SKIP=2

:win9xME_args_slurp
if "x%~1" == "x" goto execute

set CMD_LINE_ARGS=%*

:execute
@rem Setup the command line

set CLASSPATH=%APP_HOME%\lib\jadx-cli-0.9.0-b656-28d348b3.jar;%APP_HOME%\lib\jadx-core-0.9.0-b656-28d348b3.jar;%APP_HOME%\lib\dx-1.16.jar;%APP_HOME%\lib\android-5.1.jar;%APP_HOME%\lib\logback-classic-1.2.3.jar;%APP_HOME%\lib\slf4j-api-1.7.25.jar;%APP_HOME%\lib\jcommander-1.74.jar;%APP_HOME%\lib\commons-io-2.6.jar;%APP_HOME%\lib\asm-7.0.jar;%APP_HOME%\lib\annotations-16.0.3.jar;%APP_HOME%\lib\cloning-1.9.11.jar;%APP_HOME%\lib\logback-core-1.2.3.jar;%APP_HOME%\lib\objenesis-2.6.jar

@rem Execute jadx
"%JAVA_EXE%" %DEFAULT_JVM_OPTS% %JAVA_OPTS% %JADX_OPTS%  -classpath "%CLASSPATH%" jadx.cli.JadxCLI %CMD_LINE_ARGS%

:end
@rem End local scope for the variables with windows NT shell
if "%ERRORLEVEL%"=="0" goto mainEnd

:fail
rem Set variable JADX_EXIT_CONSOLE if you need the _script_ return code instead of
rem the _cmd.exe /c_ return code!
if  not "" == "%JADX_EXIT_CONSOLE%" exit 1
exit /b 1

:mainEnd
if "%OS%"=="Windows_NT" endlocal

:omega
