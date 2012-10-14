<?php

// configs
$email_to = 't.carter@bristol.ac.uk'; // change to person's email address.
$email_subject_prefix = 'BIG website contact form: ';
$email_from = 'big@big.cs.bris.ac.uk';
$email_from_nice = 'Big Website';

// If the form is submitted
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
        } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
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

        //Check to make sure not spam
        if($_POST['spam_prevention_test']) {
                $isSpam = true;
        }

        //If there is no error, send the email
        if(!isset($hasError) AND !isset($isSpam)) {
                $emailTo = $email_to;
                $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
                $headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email;

                mail($emailTo, $subject, $body, $headers);
                $emailSent = true;
        }
}

?>


<?php if (!empty($person_email)) : ?>
	<a href="javascript:void(0)" onclick = "document.getElementById('emailForm').style.display='block';document.getElementById('fade').style.display='block'" class="profile-contact-link">
		<div id="profile-contact">
			Send <?php echo $person_forename; ?> an email
		</div><!-- #profile-contact -->
	</a>


	<div id="emailForm" class="white-content">

		<h3>Send <?php echo $person_forename; ?> an email</h3>

		<?php if(isset($isSpam)) { ?>
			<p class="error">Your message was considered spam, Please check that you did not fill in the 'If you're human leave this blank' field. Thank you.</p>
		<?php } ?>

		<?php if(isset($hasError)) { ?>
			<p class="error">Please check if you've filled all the fields with valid information. Thank you.</p>
		<?php } ?>

		<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
			<p><strong>Email Successfully Sent!</strong></p>
		<?php } ?>

		<form class="form" method="post" action="/big.dev/people/tomcarter" id="contactform">

			<label>Subject:</label>
			<input class="full-width" id="subject" name="subject" size="30" type="text" maxlength="100" value="<?php echo $_POST['subject']; ?>" />

			<label>Message:</label>
			<textarea class="full-width" id="message" name="message" rows="8"><?php echo $_POST['message']; ?></textarea>

			<label>Your first and last name:</label>
			<input class="half-width" id="name" name="name" size="30" type="text" maxlength="50" value="<?php echo $_POST['contactname']; ?>" />

			<label>Your email address:</label>
			<input class="half-width" id="address" name="address" size="30" type="text" maxlength="50" value="<?php echo $_POST['email']; ?>" />

			<label>Spam protection: leave this blank if you are human:</label>
			<input id="spam" name="spam" size="10" type="text" maxlength="20" value="<?php echo $_POST['spam_prevention_test']; ?>" />

			<div class="button-row">
				<input class="submit-button" name="submit" type="submit" value="Send" />
				<a class="submit-button" href = "javascript:void(0)" onclick = "document.getElementById('emailForm').style.display='none';document.getElementById('fade').style.display='none'">Cancel</a>
			</div>

		</form>

	</div>

	<div id="fade" class="black-overlay"></div>


<?php endif ?>

