<?php
require 'class-Clockwork.php';

try
{
    $API_KEY = 'b8ddad30e9debb25bba2aae59f167bb8879d38f2';
    // Create a Clockwork object using your API key
    $clockwork = new Clockwork( $API_KEY );

    // Setup and send a message
    $message = array( 'to' => '18167459286', 'message' => ' :<>' );
    $result = $clockwork->send( $message );

    // Check if the send was successful
    if($result['success']) {
        echo 'Message sent - ID: ' . $result['id'];
    } else {
        echo 'Message failed - Error: ' . $result['error_message'];
    }
}
catch (ClockworkException $e)
{
    echo 'Exception sending SMS: ' . $e->getMessage();
}
?>