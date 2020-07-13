from time import sleep
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)
channel = 21 #whatever you have it hooked up to
state = GPIO.LOW
GPIO.setup(channel, GPIO.OUT)
#GPIO.output(channel, state)
def heater_off(pin):
    GPIO.output(pin, GPIO.LOW) #turn off heater
    channel_status = GPIO.input(pin)
    print("Pin ",pin," Status: ",channel_status)
heater_off(channel)
