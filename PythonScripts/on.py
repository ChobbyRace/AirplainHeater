from gpiozero import Button, LED
from time import sleep
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BOARD)

channel = 21 #whatever you have it hooked up to
state = GPIO.LOW
GPIO.setup(channel, GPIO.OUT)
#GPIO.output(channel, state)  this is the general syntax
def heater_on(pin):
     GPIO.output(pin, GPIO.HIGH) #turn on heater

heater_on(channel)

print("I AM SO TURNED ON RIGHT NOW")