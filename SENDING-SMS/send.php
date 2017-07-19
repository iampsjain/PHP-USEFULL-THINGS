<?php
 
    //sending text-message to user
    //Your authentication key
$authKey = "your_auth_key";

//Multiple mobiles numbers separated by comma
$mobileNumber = $mobile;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId =  "123456";

//Your message to send, Add URL encoding here.
$message = urlencode( "HERE IS MESSAGE");

//Define route 
//ROUTE 4 MEANS TRANSECTIONAL MESSAGES
//ROUTE 1 MEANS PROMOTIONAL MESSAGES
$route = "4";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

// Add YOUR API URL HERE
$url="http://api.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

//end here
    
    




?>