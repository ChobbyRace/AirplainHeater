from datetime import *
from random import randrange

def fakeData(amount):
	for i in range(0,amount):
		temp = randrange(0,30)
		temp = ('{0:0.1f}'.format(temp))
		with open("../cpu_temp.csv", 'a') as log:
			if i == 0:
				log.write("{0},{1},{2}\n".format("Date","Time","Temp (C*)"))
			log.write("{0},{1},{2}\n".format(date.today(),datetime.now().strftime("%H:%M:%S"),str(temp)))
fakeData(30)
