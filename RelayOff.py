#!/usr/bin/python

#RelayOff.py
#this is a program that activates a normally off relay for home automation
#The active pin is set with the Relay1 integer
#more active relays could be added by adding more GPIO pin placeholders
#Angus Guinen - 2019/5/19 - V1

import RPi.GPIO as GPIO #imports the GPIO list

GPIO.setmode(GPIO.BCM)	#declares GPIO as list, not board list

Relay1 = 21 #defines the active GPIO pin

GPIO.setup(Relay1, GPIO.OUT)

GPIO.output(Relay1, GPIO.LOW) #Sets the active pin High



