
    <!DOCTYPE html>

<html lang="en">



  <head>

 

</head>

<body>


    
    
    <?php

if(!isset($_POST['Submit']))

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$city = $_POST['city'];
//$programme = $_POST['programme'];
$duration = $_POST['duration'];
$message = $_POST['message'];
$site_url = $_POST['site_url'];
/*
//validate
if(empty($name))
{
    echo "Name is mandatory!";
}

if(empty($email))
{
    echo "Email is mandatory!";
}

if(empty($mobile))
{
    echo "Mobile is mandatory!";
}
if(empty($gender))
{
    echo "Gender is mandatory!";
}
if(empty($country))
{
    echo "Country is mandatory!";
}
if(empty($city))
{
    echo "City is mandatory!";
}
if(empty($programme))
{
    echo "Programme is mandatory!";
}
if(empty($duration))
{
    echo "Duration is mandatory!";
}
if(empty($message))
{
    echo "Message is mandatory!";
}
*/
//$to = $_POST['$email'].",swati@stirredcreative.in";

$email_from = "webenquiry@cghearth.com";
//$email_from = "swati.stirred@gmail.com";
$email_subject = "Swaswara well-being Contact Form ";
$email_body = "You have recieved a new message from the user $name.\n".
              "Email: $email\n".
              "Mobile: $mobile\n".
              "Gender: $gender\n".
              "Country: $country\n".
              "City: $city\n".
              "Duration: $duration\n".
              "Here is the message: $message\n".
              "URL: $site_url";

$to = "ijas@stirredcreative.in,elvina@stirredcreative.in,nishanth@stirredcreative.in";
//$to = "swati@stirredcreative.in";
$headers = "From: $email_from \r\n";

//Send the email!

mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.





?>
</body>
</html>
