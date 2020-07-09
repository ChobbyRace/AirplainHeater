#import Adafruit_DHT as dht    # Importing Adafruit library for DHT22
from datetime import *
from random import randrange

def get_temp():
    #temp = dht.read_retry(dht.DHT22, dht22Pin)
    temp = 69
    temp = ('{0:0.1f}'.format(temp))
    with open("../cpu_temp.csv") as log:
        first_line = log.readline()
        if first_line == "":
            first_line = True
        else:
            first_line = False
    with open("../cpu_temp.csv", 'a') as log:
        if first_line:
            log.write("{0},{1},{2}\n".format("Date","Time","Temp (C*)"))
        log.write("{0},{1},{2}\n".format(date.today(),datetime.now().strftime("%H:%M:%S"),str(temp)))
get_temp()