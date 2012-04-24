<?php
$to = "tomcarter259@gmail.com";
$subject = $_POST['subject'];
$message = $_POST['message'];
$name    = $_POST['name'];
$address = $_POST['address'];
$spam    = $_POST['spam'];

$headers = "From:" . $address;

$success = mail($to,$subject,$message,$headers);

if ($success) {
	echo "SUCCESS";
}
else {
	echo "FAILURE";
}

echo "Mail Sent.";
?>

