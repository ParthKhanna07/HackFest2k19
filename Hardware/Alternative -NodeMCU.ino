#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
#include <SoftwareSerial.h>

/* Set these to your desired credentials. */

const char *ssid = "pk";  //ENTER YOUR WIFI SETTINGS
const char *password = "parth@khanna";

//Web/Server address to read/write from 
const char *host = "https://driller.000webhostapp.com";  


SoftwareSerial s(D5,D6);



 
void setup() {
  // Initialize Serial port
  Serial.begin(9600);
  s.begin(9600);
  
  int vol=s.read();
  delay(100);
  Serial.print(vol);
  
  WiFi.mode(WIFI_OFF);        //Prevents reconnection issue (taking too long to connect)
  delay(1000);
  WiFi.mode(WIFI_STA);        //This line hides the viewing of ESP as wifi hotspot
  
  WiFi.begin(ssid, password);     //Connect to your WiFi router
  Serial.println("");

  Serial.print("Connecting");
  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());  //IP address assigned to your ESP
  HTTPClient http;    //Declare object of class HTTPClient

  String getData, Link;
  //GET Data
 int otpp=random(1000,9999);
  String otp=String(otpp);
  vol=0.20;
  String volu=String(vol);
  String mass=String(vol*50);
  getData = "?otp="+otp+"&volume="+volu+"&mass="+mass ;  //Note "?" added at front
  Link = "http://driller.000webhostapp.com/client/functions/addTempData.php" + getData;
  
  http.begin(Link);     //Specify request destination
  
  int httpCode = http.GET();            //Send the request
  String payload = http.getString();    //Get the response payload

  Serial.println(httpCode);   //Print HTTP return code
  Serial.println(payload);    //Print request response payload

  http.end();  //Close connection
  }
  }
  
 
void loop() {
  
}
