from datetime import *
from random import randrange

def fakeData(amount):
	for i in range(0,amount):
		temp = randrange(0,30)
		temp = ('{0:0.1f}'.format(temp))
		with open("cpu_temp.csv", 'a') as log:
			log.write("{0},{1}\n".format(datetime.now().strftime("%H:%M:%S"),str(temp)))
fakeData(30)
