# AirplainHeater
Project for creating a remote heater for dad

to start apache server do
service apache2 start
to stop
service apache2 stop
to see status
servie apache2 status

# Cron Job 
Add this cron job to the /etc/crontab file
*/15 * * * * root python /var/www/html/AirplainHeater/PythonScripts/test_read_temp.py >> /var/www/html/AirplainHeater/log/cron_error.log 2>&1

Add this one too

0 0 * * * root /var/www/html/AirplainHeater/newlog.sh >> /var/www/html/AirplainHeater/log/cron_error.log 2>&1