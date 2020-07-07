#import Adafruit_DHT as dht    # Importing Adafruit library for DHT22
import matplotlib.pyplot as plt
import matplotlib.animation as animation
import numpy as np
from datetime import *
from random import randrange

dht22Pin = 21
dateconv = lambda s: datetime.strptime(s, "%H:%M:%S")
col_names = ["T", "V"]

fig = plt.figure()
ax = fig.add_subplot(1, 1, 1)   #gets us axises to deal with

def animate(i):
	#_ , temp = dht.read_retry(dht.DHT22, dht22Pin) 
	temp = fakeTemp()
	temp = ('{0:0.1f}'.format(temp))
	with open("cpu_temp.csv", 'a') as log:
		log.write("{0},{1}\n".format(datetime.now().strftime("%H:%M:%S"),str(temp)))

	with open('cpu_temp.csv','rb') as f:
		lines = f.readlines()

	mydata = np.genfromtxt(lines[-24:], delimiter=',', names=col_names, dtype=[('T', 'O'), ('V', 'u1')], converters={"Time": dateconv})
	ax.clear()
	ax.plot(mydata['T'], mydata['V'])

	plt.xticks(rotation=45, ha='right')
	plt.subplots_adjust(bottom=0.30)
	plt.title('Temperature Graph for Last 24 Hours')
	plt.ylabel('Temp (deg C)')
	plt.xlabel('Time')

def fakeTemp():
    return randrange(0,30)

ani = animation.FuncAnimation(fig, animate, interval=60*60)
plt.show()
