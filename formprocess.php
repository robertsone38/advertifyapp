<?php

if(isset($_POST['submit'])){

	$fullname = $_POST['fullName'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	if(empty($fullname) AND empty($email) AND empty($phone) AND empty($message)){
		echo "Please make sure all fields are correctly filled.";
	}else{
	 $to = "timemanagementtravel@yahoo.com";
	 $subject="Ticket Reservation";
	 $body = "A customer has just contacted you with the following information. Please do well, to 
	 contact the person as soon as possible.\n";
	 $body .=" $fullname \n";
	 $body .=" $email \n";
	 $body .=" $phone \n";
	 $body .=" $message \n";
	 if(!mail($to,$subject,$body)){
	 echo "We could not sent your ticket request at this time.Please try again.";
	}else{
		header("location:thanks.php");
		exit();
		}
	}
	
}


