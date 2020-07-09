from datetime import *
from random import randrange

def test_Temp():
    temp = randrange(0,30)
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
