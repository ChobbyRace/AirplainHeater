import RPi.GPIO as GPIO

def get_pin():
    print("What GPIO Pin do you want to know about?")
    x = int(input())
    return x

def checkGPIO():
    pin = get_pin()
    GPIO.setmode(GPIO.BCM)
    GPIO.setup(pin, GPIO.IN)
    channel_status = GPIO.input(pin)
    print("Pin ",pin," Status: ",channel_status)
checkGPIO()
GPIO.cleanup()

