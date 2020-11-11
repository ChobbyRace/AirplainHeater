from datetime import *
from random import randrange
import os
def get_cputmp():
    stream = os.popen('/opt/vc/bin/vcgencmd measure_temp')
    out =  stream.read()
    out_list=out.split("=")
    out_list=out_list[1].split("'C")
    return float(out_list[0])
def test_Temp():
    temp = get_cputmp()
    temp = ('{0:0.1f}'.format(temp))
    with open("/var/www/html/AirplainHeater/cpu_temp.csv") as log:
        first_line = log.readline()
        if first_line == "":
            first_line = True
        else:
            first_line = False
    with open("/var/www/html/AirplainHeater/cpu_temp.csv", 'a') as log:
        if first_line:
            log.write("{0},{1},{2}\n".format("Date","Time","Temp (C*)"))
        log.write("{0},{1},{2}\n".format(date.today(),datetime.now().strftime("%H:%M:%S"),str(temp)))

test_Temp()
