@echo off
chdir C:\Program Files (x86)\PostgreSQL\9.3\bin\
set database=fonoteca
set PGUSER=postgres
set PGPASSWORD=postgres
set port=5432
set host=localhost
set currentdate=%date%
set year=%currentdate:~6,4%
set month=%currentdate:~3,2%
set day=%currentdate:~0,2%
set file=%database%_%year%.%month%.%day%
mkdir C:\Datos_salvados
pg_dump.exe -h %host% -p %port% -U %PGUSER% -F c -b -v -f C:\Datos_salvados\%file%.backup %database%