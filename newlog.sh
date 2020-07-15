#!/usr/bin/bash
#this will transfer the current cpu data to the log file with a new date
#clears cpu_temp.csv for the next day's data
now=$(date +"%Y-%m-%d");
file_name="/var/www/html/AirplainHeater/logs/$now.cpu_temp.csv";
cp /var/www/html/AirplainHeater/cpu_temp.csv $file_name;
> /var/www/html/AirplainHeater/cpu_temp.csv;
