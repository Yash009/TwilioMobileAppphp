<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC96ce2a5a8bd543a324809ee09baa8ed1';
$token = '3555fbf93496d3c3d51bc4262a7ace77';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
// the number you'd like to send the message to
    '+12016162490',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+19103009728',
        // the body of the text message you'd like to send
        'body' => "Hello this is yash chaturvedi"
    )
);
/*
$account_sid = 'AC96ce2a5a8bd543a324809ee09baa8ed1';
$auth_token = '';
$client = new Services_Twilio($account_sid, $auth_token);

$client->account->messages->create(array(
'To' => "2016162490",
'From' => "+19103009728",
'Body' => "Hello this is yash chaturvedi",
));
*/
?>