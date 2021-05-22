<?php
$mailTo="lokendrak386@gmail.com";
$subject="Testing sending message php to email";
$message="Hello this is my first message using php";
$headers="From:lokendrakumar071@gmail.com";

if(mail($mailTo,$subject,$message,$headers)){
	echo "The email is delivered";
}else{
	echo "The email is not delivered";
}




?>