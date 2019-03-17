#include <SoftwareSerial.h>

SoftwareSerial s(5,6);
const int trigPin = 11;
const int echoPin = 12;
// defines variables
long duration;
int distance1,distance2;
float hfill;
float vol;
int area=50;
int cont=1;
void first(){
  digitalWrite(trigPin, LOW);
delayMicroseconds(2);
// Sets the trigPin on HIGH state for 10 micro seconds
digitalWrite(trigPin, HIGH);
delayMicroseconds(10);
digitalWrite(trigPin, LOW);
// Reads the echoPin, returns the sound wave travel time in microseconds
duration = pulseIn(echoPin, HIGH);
// Calculating the distance
distance1= duration*0.034/2;

}
void setup() {
  Serial.begin(9600);
  delay(1000);
s.begin(9600);
delay(200);
pinMode(trigPin, OUTPUT); // Sets the trigPin as an Output
pinMode(echoPin, INPUT); // Sets the echoPin as an Input// Starts the serial communication
first();}


void loop(){
  if (cont){
if (digitalRead(10)==HIGH){
  digitalWrite(trigPin, LOW);
delayMicroseconds(2);
// Sets the trigPin on HIGH state for 10 micro seconds
digitalWrite(trigPin, HIGH);
delayMicroseconds(10);
digitalWrite(trigPin, LOW);
// Reads the echoPin, returns the sound wave travel time in microseconds
duration = pulseIn(echoPin, HIGH);
// Calculating the distance
distance2= duration*0.034/2;
hfill=distance1-distance2;
hfill=abs(hfill);
Serial.print("Level filled in cm=  ");
Serial.println(hfill);
vol=hfill*area;
vol=vol/1000;
Serial.print("volume in litres =  ");
Serial.println(vol);
cont=0;
delay(100);
s.write(vol);

}}}
