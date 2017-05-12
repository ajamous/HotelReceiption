# HotelReception
Friendly User Interface for a Panic Button to send SMS using Twilio backend alert from reception to management to notify them about an emergency

Requirements:

- Apache Server
- PHP V.5 or higher.
- Twilio PHP Library - Download it from here https://codeload.github.com/twilio/twilio-php/zip/master
- Twilio Account SID and Token from www.twilio.com 

Installation: 

- CD into your web-server document root directory e.g CD C:\xmpp\apache\htdocs\
- Clone this project using git, e.g #git clone or Download project to your computer and save it in your web root directory
- Place the Twilio PHP Library folder in your project (Download Link: https://codeload.github.com/twilio/twilio-php/zip/master
- Insert your Account SID & TOKEN
- Update phone numbers and names of people you want to send the alert to when RED is clicked for emergency or when GREEN is clicked for cancelation the request.
- Open your browser and go to http://localhost/HotelReception 

Finally ! 

Click the big RED button to send SMS alert asking for Help.

Click the BIG Green button to send SMS alert asking for Help. 

P.S : You must have available balance in your Twilio account for the SMS to be sent successfully. so ensure you have auto-recharge enabled for your account.




