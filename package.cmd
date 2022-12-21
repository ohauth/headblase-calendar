@echo off
tools\tar -cf .\\dist\temp\\files.tar files
copy package.xml .\dist\temp\ >nul
copy cronjob.xml .\dist\temp\ >nul
tools\tar -cf .\\dist\\net.headblast.calendar.eventcreator.tar .\\dist\\temp
echo Done.
