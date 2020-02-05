<?php
//include('../../db_config.php');
//include ('PHPMailer-master/PHPMailerAutoload.php');
date_default_timezone_set('Asia/Calcutta');


/* $mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "test";
 
 $mysql_hostname = "http://52.74.229.7/";
$mysql_user = "root";
$mysql_password = "nud1ocjo";
$mysql_database = "casino_catering"; */

/* $prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");


$path = "http://www.cghearth.com/offers/"; */
$mode = $_REQUEST ['mode'];

/* UserName=Jayasmitha
 * &offerId=
 * &UserMobile=9538004679
 * &UserGuests=2
 * &UserEmail=jayasmitha401%40gmail.com
 * &UserCity=Bangalore
 * &stayFrom=25%2F08%2F2016
 * &stayTo=28%2F08%2F2016
 * &message=TEsting+data
 * &property=Spice+village
 * &page_source=Facebook%2C+Onam+Offer
 * &page_source_url=http%3A%2F%2Flocalhost%2Fworkspace%2FCGHEarth-Properties%2F%3Fsource%3D61352151511%26offer%3D%23001
 * &csvalue=1
 * &mode=PropertyBookingForm */			

switch ($mode) {
	case "ContactForm": 

	        //$UserName = $_REQUEST['UserName'];
	       // $UserMobile = $_REQUEST['UserMobile'];
	       // $UserEmail = $_REQUEST['UserEmail'];
	       // $comments = $_REQUEST['message'];
		//	$FromDate = $_REQUEST['FromDate'];
		//	$ToDate = $_REQUEST['ToDate'];
		//	$site_url = $_REQUEST['site_url'];

			$name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $mobile = $_REQUEST['mobile'];
            $gender = $_REQUEST['gender'];
            $country = $_REQUEST['country'];
            $city = $_REQUEST['city'];
            $programme = $_REQUEST['programme'];
            $duration = $_REQUEST['duration'];
			$message = $_REQUEST['message'];
			$site_url = $_REQUEST['site_url'];
						
			$timestamp = time();
			$date = date("Y-m-d", $timestamp);
			$time = date("H:i", $timestamp);
	
			
						
			$message = '<p  style="font-size:14px; font-family: \'Lato\' !important;color: #000000;font-weight: 500; text-align: left;margin: 20px 0px;"><b>Brunton Boatyard enquiry </b><br><br>';//echo $message;
			$message .= "Time of Submission: ".$time."<br>";
			$message .= "Deadline for Callback (within 24 hours): ".$date."<br>";
			$message .= "Name: ".$name."<br>";
			$message .= "Mobile: +91  ".$mobile."<br>";
			$message .= "Email: <a href='mailto:".$email."'>".$email."</a><br>";
			$message .= "Gender: +91  ".$gender."<br>";
			$message .= "Country: +91  ".$country."<br>";
			$message .= "City: +91  ".$city."<br>";
			$message .= "Programme: +91  ".$programme."<br>";
			$message .= "Duration: +91  ".$duration."<br>";
			$message .= "Here is the message:  ".$message."<br>";
			
			$message .= "		<br></p>";
			
								
			$message .= '</ul><br><br>
						<p  style="font-size:14px; font-family: \'Lato\' !important;color: #000000;font-weight: 500; text-align: left;margin: 20px 0px;">Thanks & Regards,<br><b>'.$UserName.'</b></p><br><br><p style="font-size:14px; font-family: \'Lato\' !important;color: #000000;font-weight: 500; text-align: left;margin: 20px 0px;"></p>';
			
			$message.='Page source Link : <a href="'.$site_url.'">'.$site_url.'</a>';
			$message_customer = '<p>Thank you for your message.</p><p>Swa Well-being will call or email you back at the earliest</p>';
			
			//echo $message;
			
			//$subject = "CGH Earth Property Booking Request through Campaign- ".time();
			
			$subject = "Swa Well-being  ".time();
			
			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Additional headers $headers .= 'To: CGH Earth<contact@cghearth.com>' . "\r\n";
			$headers .= 'From: Swa Well-being <swati@stirredcreative.in>' . "\r\n";
			//$headers .= 'Bcc: gautam@stirredcreative.in, suraj@stirredcreative.in, jayasmitha@stirredcreative.in' . "\r\n";
			//$headers .= 'Bcc: gibin@stirredcreative.in,faustina@stirredcreative.in,digital@stirredcreative.in,anisha.d@stirredcreative.in' . "\r\n";
			
			
			//Code for saving data to the Database
			/*
			$qry = "INSERT INTO tbl_paradisefound_enquiry (name,email,mobile,message,from_date,to_date,lp_type) VALUES
			('$UserName','$UserEmail','$UserMobile','$comments','$FromDate','$ToDate','brunton')";
			if(!mysqli_query($bd,$qry)){
				echo mysqli_error($bd);
			} 
			*/
			try {                			
				// if($flag){
				//     @mail('digital@stirredcreative.in,faustina@stirredcreative.in,shriya@stirredcreative.in,elvina@stirredcreative.in,harpreet@stirredcreative.in,ijas@stirredcreative.in', $subject, $message, $headers); 
				//     @mail('bhabani@stirredcreative.in', $subject, $message, $headers); 
			   //  }else{
				//     @mail('directsales@cghearth.com, directsales4@cghearth.com, feedback@cghearth.com, digital@stirredcreative.in, faustina@stirredcreative.in, shriya@stirredcreative.in, elvina@stirredcreative.in, harpreet@stirredcreative.in', $subject, $message, $headers);
				 //	@mail($UserEmail, $subject, $message_customer, $headers);
					 
					 if($flag){
						 @mail('swati@stirredcreative.in', $subject, $message, $headers); 
						 @mail('swati@stirredcreative.in', $subject, $message, $headers); 
					 }else{
						 @mail('swati@stirredcreative.in', $subject, $message, $headers);
						 @mail($UserEmail, $subject, $message_customer, $headers);
				 }
				echo "<p>Thank you for your message.</p><p>Swa Well-being will call or email you back at the earliest</p> ";
			} catch (phpmailerException $e) {
				 echo $e->errorMessage(); //Pretty error messages from PHPMailer
			} catch (Exception $e) {
				 echo $e->getMessage(); //Boring error messages from anything else!
			}

	break;
	
	default:	break;
}
?>