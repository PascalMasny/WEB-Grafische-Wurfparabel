#!/usr/bin/env python
#Wurfparabel

#https://repl.it/languages/python3

#imports

import time
import math
import decimal
import os
import subprocess
import sys

#https://stackoverflow.com/questions/8984287/execute-php-code-in-python


#

#counter
t = 0

#Gx0,5
g= 4.5
#counter
n = 0



#Hello and read

beta = open('B.txt','r')
b = float(beta.read())
beta.close()

gesch = open('V.txt','r')
v = float(gesch.read())
gesch.close()

start = open('z.txt','r')
z = float(start.read())
start.close()

zeit = open('t2.txt','r')
t2 = float(zeit.read())
zeit.close()

abst = open('s.txt','r')
s = float(abst.read())
abst.close()

print("Berechnungen starten") 






#Cos/sin

cos = math.cos(math.radians(b))
sin = math.sin(math.radians(b))




datei = open('data.dat','w')




#counter
print("X:                    Y:")

while n < t2:
    
    n = n + s
    t = t + s
    
    x = t * v * cos
    y = t * v * sin + z - g * t * t

    print(x ,"  " ,y)

    datei.write("\n")
    datei.write(str(x))
    datei.write("   ")
    datei.write(str(y))

print("")


