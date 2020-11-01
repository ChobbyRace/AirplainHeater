import time
import datetime
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)
channel = 32 #whatever you have it hooked up to
state = GPIO.LOW
GPIO.setup(channel, GPIO.OUT)
#GPIO.output(channel, state)
def heater_off(pin):
    GPIO.output(pin, GPIO.HIGH) #turn off heater
    channel_status = GPIO.input(pin)
    print("Pin ",pin," Status: ",channel_status)

def output_Status(status):
     ts = time.time()
     st = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
     with open("../logs/heater_status.txt", 'a') as f:
          f.write('Heater '+ status + ' at: ' + st + '\n')

output_Status('OFF')
heater_off(channel)
GPIO.cleanup()
