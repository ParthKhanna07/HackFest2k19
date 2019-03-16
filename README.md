# PetroBYTES
 ![LOGO](https://driller.000webhostapp.com/client/favicon.png)
 
 A one stop solution to prevent all SCAM in the Petroleum Distribution
 
### Prototype
[PetroBYTES client](https://driller.000webhostapp.com/client/)

 
### :fuelpump: What are the Petroleum Scams ? 

##### Deviation (Specially for bikes):- (Involvement of two employees of gas station) :- 
When your turn comes you go and park your vehicle firmly and say XXX rs then you open the tank lock of your bike/scooty at same movement the person standing close to you to collect money(second person) will say something to you just to deviate You But the moment you respond then fist person will start filling petrol and you will not able to see ZERO on it. Scam is done. Meter/machine will show 5L but you never know how much is actually in you tank. 
Place : Almost every petrol pump in Pune.

##### Taking advantage of your comfort level (Only for four wheelers) :-  
 It happens on a machine where one side two wheelers and other side four wheelers are taking fuel. When you park your car at gas station they will tell you exact location where you need to stop and you do that. They will tell you to open the tank and we just pull a button below our seat to open tank lock, then he will tell you to check zero and you do that after that very smartly he will stand in between your left side mirror and fuel tank so that you cannot see what is happening. He will not start fuelling but he will pertain that fuelling is going on and all of a sudden you see that meter/machine stops at around 400-500rs or 100 .. 200 rs and the person will tell you something sir light cut gayi hai I will come is a second and he will quickly go to somewhere pertaining restarting Genset switch or something and the moment he comes backs he will continue fuelling from last reading whatever was that or he might reset it to zero and in the end you pay total amount. Previous reading amount and latest reading amount. SCAM is done. Guess how? In your first reading fuelling was not actually happening into your car it was for the two wheelers standing on other side of machine. Since staff was standing between your left side mirror and gas tank so you could not see that actually and you end up as a victim.
my exp: Indian Oil petrol pump hinjewadi, Pune.

##### Deviation (Applicable for all type of vehicles):- (Single employee of gas station can do this) :-  
You ask petrol pump employee to fill up petrol for 800 rs and they will stop filling petrol after rs 200 only. When you say that you have asked for 800 rs then they will say sorry or something like could not hear... and they will restart fueling petrol and they will make sure their body is in such a position so that you can not see the meter when they restart fueling and this time they will stop at 600 rs reading when you say something then they will say sir I set the meter at zero after first time fueling of 200 rs so this time added for 600 rs only. You can fight but you can not win most of the time.

 ##### Disengaging the automated nozzle before the fuel stops 
This happens in the automated nozzle petrol pumps. All of us think that these auto pumps are tamper proof but they are not. The auto nozzles have a nozzle trigger lock, which when triggered, stays on till there is flow of fuel in the pipe and automatically pops off when the fuel flow stops. The auto nozzle was designed to prevent fuel fraud but there is a small technicality that unscrupulous attendants use to their advantage. The technicality is – it’s possible to manually override the trigger lock.


##### So how do we save you from all this ? 

We have a Hardware component installed at each persons fuel tank . The hardware component consists of a FlowRate Sensor A nodeMCU module and a Weight Sensor (Not present in our domenstartion model) 
This Sensor measures the amount of liquid flowing through a particular cross-section as well the mass of the liquid flown . Using this data an OTP is generated which sent to the owner of the vehicle . Using this OTP the user can view his details from the PetroBYTES Website
The website then asks for the amount of petrol that he actually wanted and then calculates the amount of money he has been doped of 

The user can next select the address of the petrol pump from the dropdown and submit this data to a database.

Using this data We aim to predict the average FLowrate Error and Adulteration for each Petrol Pump using Linerar Regression Model . This data will be Publicly Available and hence the user can decide which is the best petrolpump for him.It also creates a pressure on the petrol pump owners to act responsibly since the entire system becomes transparent.

#### :coffee: Developed By BYTES
Suggestions and Contributions are highly Appreciated
