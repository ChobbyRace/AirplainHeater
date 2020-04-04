from gpiozero import Button, LED
from time import sleep
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