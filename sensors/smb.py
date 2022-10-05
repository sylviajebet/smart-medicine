import RPi.GPIO as GPIO
import time
from time import sleep
from threading import Thread
def led():
    GPIO.setmode(GPIO.BCM)
    GPIO.setwarnings(False)
    GPIO.setup(23,GPIO.OUT)
    i=1
    while i < 20:
        GPIO.output(23,GPIO.HIGH)
        print ("LED on")
        time.sleep(1)
        GPIO.output(23,GPIO.LOW)
        print ("LED off")
        time.sleep(1)
        i+=1

        
def buzzer():
    GPIO.setwarnings(False)
    #Select GPIO mode
    GPIO.setmode(GPIO.BCM)
    #Set buzzer - pin 12 as output
    buzzer=12 
    GPIO.setup(buzzer,GPIO.OUT)
    #Run loop for 10 seconds
    i=1
    while i<15:
        GPIO.output(buzzer,GPIO.HIGH)
        print ("Beep")
        sleep(0.5) # Delay in seconds
        GPIO.output(buzzer,GPIO.LOW)
        print ("No Beep")
        sleep(0.5)
        i+=1

def servo():
    GPIO.setmode(GPIO.BOARD)
    GPIO.setup(3, GPIO.OUT)
    pwm=GPIO.PWM(3, 50)
    pwm.start(0)
    def SetAngle(angle):
        #while True:
            duty = angle / 18 + 2
            GPIO.output(3, True)
            pwm.ChangeDutyCycle(duty)
            sleep(1)
            GPIO.output(3, False)
            pwm.ChangeDutyCycle(0)
            
    SetAngle(360) 
    pwm.stop()
    GPIO.cleanup()
    

  
if __name__ == '__main__':
    a = Thread(target = led)
    b = Thread(target = buzzer)
    servo()
    a.start()
    b.start()


