<!DOCTYPE html>
<html>
  <head>
    <!-- Lets get bootstrap CSS for nice styling -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- we need Bugger BUTTON to be displayed, so lets include our custom button css style-->
    <link rel="stylesheet" href="buttons.css">

    <meta charset="utf-8">
    <title>SOS Status</title>
  </head>
  <body>
      <center>
    <h1>:) Thank you for letting us know- we are notified now that everything is okay </h1>
    <h2> <a href="index.html">Back to Main Page</a> </h2>
      </center>
  </body>
</html>


<?php


    /* Hotel Reception PANIC BUTTON - Wriiten by Ameed Jamous in May-2017
     * Author Email: ameed.jamous@gmail.com
     * PROJECT PURPOSE: Create a quick user-frienly way for GunesBeachHotel.com
     * to easily send SOS alerts to Managemet personals upon emergency.
     * I use the Twilio backend to quickly send SMS messages to people phones
     * which usually arrives within 3 seconds from request. Get your own twilio
     * account to be able to use this program
     */

    // Step 1: Get the Twilio-PHP library from twilio.com/docs/libraries/php,
    // following the instructions to install it with Composer.

    require_once "twilio-php/Twilio/autoload.php" ;
    use Twilio\Rest\Client;

    // Step 2: set our AccountSid and AuthToken from https://twilio.com/console
    $AccountSid = "{YOUR TWILIO Sid HERE}";
    $AuthToken = "{Your Twilio Auth Token}";

    // Step 3: instantiate a new Twilio Rest Client
    $client = new Client($AccountSid, $AuthToken);

    // Step 4: make an array of people we know, to send them a message.
    // Feel free to change/add your own phone number and name here.
    $people = array(
      "+19542003336" => "Ameed - Developer",
      "+905022222222" => "Mike Hassan",
      "+905111111111" => "John Doe",
      "+494747474774" => "David - CEO"

    );

    // Some Variables that will be used alot


    $date = date("Y/m/d");

    // Step 5: Loop over all our friends. $number is a phone number above, and
    // $name is the name next to it
    foreach ($people as $number => $name) {


        $sms = $client->account->messages->create(


        //$notification = "Hey $name, Monkey Party at 6PM. Bring Bananas! . Ohana Restuarant - Alanya - Turkey !"
            // the number we are sending to - Any phone number
            $number,

            array(
                // Step 6: Change the 'From' number below to be a valid Twilio number
                // that you've purchased
                'from' => "{INSERT YOUR TWILIO PHONE NUMBER}",

                // the sms body - Some templates



                // FOR EMERGENCIES ENABLE BELOW TEMPLATE
                'body' => "Hey $name, Everyting is OK now at the Reception
                ,DO NOT COME. Ohana Hotel Managemet Group"



            )
        );

        // Display a confirmation message on the screen
        echo "SOS Sent message to $name \n";
    }
