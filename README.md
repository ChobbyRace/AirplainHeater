# AirplainHeater
This is a project I worked on for creating a device to remotely turn on heaters for my father's airplane. 

The requirement to preheat cold engines before flying is a common problem for many private airplane owners who live in the Northern part of the United States. This process can take multiple hours, and for pilots that house their planes far from home, driving an hour to the hanger to turn on a heater and wait is a big problem. 

There are a few comercial solutions available, but they are both: 
1) Expensive  
2) Do not provide features such as scheduling and temperature readings to provide peice of mind

The goal of this project is to create a product that will solve these two problems, as well as give me experience working with HTML, PHP, and the Raspbery Pi. 

# Requirements 

- Easy to use
- Reliable
- Provide Temperature Readings
- Able to operate without Wifi
- Low cost

# Implementation

Utilizing the python Raspbery Pi Input Output library, the two simple scripts are used to turn off and on a 5V/120V relay using it's I/O pins. These scripts are executed through PHP on a custom made webpage that will be locally hosted on the Raspberry PI. The device also has a temperature sensor attached, with it's readings dynamicly updated on the locally hosted web page to allow for monitoring of the airplane's temperature.

To compensate for the lack of WIFI in many private pilot's hangers, the device limits it's internet use in order to operate on a limited cellular hotspot to operate. The device will be connected to a privatly hosted VPN to limit access to the local webpage to only users I give VPN keys to. This provides security, as well as removing the need to port forward with the cellular hotspot.

# Front End

Custom made HTML page with PHP to execute python scripts

# Back End

Apache 2 webserver
RPi Input Output Python Library
Cronjobs for logging
Bash scripts for temperature sensor reading 
