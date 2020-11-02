#import Adafruit_DHT as dht    # Importing Adafruit library for DHT22
from datetime import *
from random import randrange
import glob

base_dir = '/sys/bus/w1/devices/'
device_folder = glob.glob(base_dir + '28*')[0]
device_file = device_folder + '/w1_slave'

def read_temp_raw():
    f = open(device_file, 'r')
    lines = f.readlines()
    f.close()
    return lines

def read_temp():
    lines = read_temp_raw()
    while lines[0].strip()[-3:] != 'YES':
        time.sleep(0.5)
        lines = read_temp_raw()
    equals_pos = lines[1].find('t=')
    if equals_pos != -1:
        temp_string = lines[1][equals_pos+2:]
        temp_c = float(temp_string) / 1000.0
        temp_f = temp_c * 9.0 / 5.0 + 32.0
        return temp_f

def write_temp():
    temp = read_temp()
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
write_temp()
