from gpiozero import Button, LED
from time import sleep

#import RPi.GPIO as GPIO
channel = 21 #whatever you have it hooked up to

button = Button(2)
led = LED(3)
Timer = 0

while Timer < 10:
    if button.is_pressed:
        print('Button Pressed')
        led.on()
    else:
        print('Released')
        led.on()
    sleep(1)
    Timer = Timer + 1


#the real scripts down here 

def heater_on(pin):
    GPIO.output(pin, GPIO.HIGH) #turn on heater

def heater_off(pin):
    GPIO.output(pin, GPIO.LOW) #turn off heater

        