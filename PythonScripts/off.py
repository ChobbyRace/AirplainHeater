from gpiozero import Button, LED
from time import sleep
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BOARD)

channel = 21 #whatever you have it hooked up to
state = GPIO.LOW
GPIO.setup(channel, GPIO.OUT)
#GPIO.output(channel, state)
def heater_off(pin):
     GPIO.output(pin, GPIO.LOW) #turn off heater

heater_off(channel)

print("I AM SO TURNED ON RIGHT NOW")