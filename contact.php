<?php

// configs
$email_subject_prefix ='BIG Website Contact Form: ';
$email_from ='website@big.cs.bris.ac.uk';
$email_from_nice ='BIG Website';

//If the form is submitted
if(isset($_POST['submit'])) {

        //Check to make sure that the name field is not empty
        if(trim($_POST['contactname']) == '') {
                $hasError = true;
        } else {
                $name = trim($_POST['contactname']);
        }

        //Check to make sure that the subject field is not empty
        if(trim($_POST['subject']) == '') {
                $hasError = true;
        } else {
                $subject = $email_subject_prefix;
                $subject .= trim($_POST['subject']);
        }

        //Check to make sure sure that a valid email address is submitted
        if(trim($_POST['email']) == '')  {
                $hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$",
			trim($_POST['email']))) {
                $hasError = true;
        } else {
                $email = trim($_POST['email']);
        }

        //Check to make sure comments were entered
        if(trim($_POST['message']) == '') {
                $hasError = true;
        } else {
                if(function_exists('stripslashes')) {
                        $comments = stripslashes(trim($_POST['message']));
                } else {
                        $comments = trim($_POST['message']);
                }
        }

        //Check to make sure comments were entered
        if($_POST['spam_prevention_test']) {
                $isSpam = true;
        }

	//If there is no error, send the email
	if(!isset($hasError) AND !isset($isSpam)) {
		$emailTo = $person_email;
		$body = "
			Name: $name \n\n
			Email: $email \n\n
			Subject: $subject \n\n
			Comments:\n $comments";
		$headers = 
			'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 
			'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>

<!-- Detected as spam -->
<?php if(isset($isSpam)) { ?>
	<p class="error">
		Your message was considered spam, Please check that you did not fill in 
		the 'If you're human leave this blank' field. Thank you.
	</p>
<?php } ?>

<!-- Has errors -->
<?php if(isset($hasError)) { ?>
	<p class="error">
		Please check if you've filled all the fields with valid information.
	</p>
<?php } ?>

<!-- Email sent -->
<?php if(isset($emailSent) && $emailSent == true) { ?>
	<p><strong>Email Successfully Sent!</strong></p>
	<p>Thank you. <?php echo $person_forename; ?> will be in touch soon.</p>
<?php } ?>

<!-- The email form -->
<?php
	// The action must point to the current page to execute the above php code.
	$action = "/people/" . $person_slug;
?>
<form method="post" action="<?php echo $action; ?>"
		id="contactform" class="form">
	<div>
		<label for="name"><strong>Name:</strong></label>
		<input type="text" size="50" name="contactname" id="contactname"
				value="<?php echo $_POST['contactname']; ?>" class="required" />
	</div>

	<div>
		<label for="email"><strong>Email:</strong></label>
		<input type="text" size="50" name="email" id="email"
				value="<?php echo $_POST['email']; ?>" class="required email" />
	</div>

	<div>
		<label for="subject"><strong>Subject:</strong></label>
		<input type="text" size="50" name="subject" id="subject"
				value="<?php echo $_POST['subject']; ?>" class="required" />
	</div>

	<div>
		<label for="message"><strong>Message:</strong></label>
		<textarea rows="8" cols="66" style="width: 376px" name="message"
				id="message"
				class="required"><?php echo $_POST['message']; ?></textarea>
	</div>

	<!-- The following field is for robots only, invisible to humans: -->
	<div class="spam_prevention" id="pot">
		<label for="message">
			<strong>Spam prevention test:</strong><br/>
			If you're human leave this blank:
		</label>
		<input name="spam_prevention_test" type="text" id="spam_prevention_test"
				class="spam_prevention_test"
				value="<?php echo $_POST['spam_prevention_test']; ?>"/>
	</div>
	<input class="submit-button" type="submit" value="Send" name="submit" />
</form>	
