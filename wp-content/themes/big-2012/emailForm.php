<?php if (!empty($person_email)) : ?>
	<a href="javascript:void(0)" onclick = "document.getElementById('emailForm').style.display='block';document.getElementById('fade').style.display='block'" class="profile-contact-link">
		<div id="profile-contact">
			Send <?php echo $person_forename; ?> an email
		</div><!-- #profile-contact -->
	</a>


	<div id="emailForm" class="white-content">
		<h3>Send <?php echo $person_forename; ?> an email</h3>

		<form class="form" name="<?php echo $person_slug; ?>-contact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<label>Subject:</label>
			<input class="full-width" id="subject" name="subject" size="30" type="text" maxlength="100" />

			<label>Message:</label>
			<textarea class="full-width" id="message" name="message" rows="8"></textarea>

			<label>Your first and last name:</label>
			<input class="half-width" id="name" name="name" size="30" type="text" maxlength="50" />

			<label>Your email address:</label>
			<input class="half-width" id="address" name="address" size="30" type="text" maxlength="50" />

			<label>Spam protection: What is the opposite of up?</label>
			<input id="spam" name="spam" size="10" type="text" maxlength="20" />

			<div class="button-row">
				<input class="submit-button" name="Send" type="submit" value="Submit" />
				<a class="submit-button" href = "javascript:void(0)" onclick = "document.getElementById('emailForm').style.display='none';document.getElementById('fade').style.display='none'">Cancel</a>
			</div>

		</form>

	</div>

	<div id="fade" class="black-overlay"></div>


<?php
  /**
  * Checks the sanity of variables
  *
  * @access private
  *
  * @param string $type  The type of variable
  * @param string $string The variable name
  * @param string $length The maximum length of the variable
  *
  * return bool
  */

  function sanityCheck($string, $type, $length){

  $type = 'is_'.$type;

  if(!$type($string))
    {
    return FALSE;
    }
  elseif(empty($string))
    {
    return FALSE;
    }
  elseif(strlen($string) > $length)
    {
    return FALSE;
    }
  else
    {
    return TRUE;
    }
}

  /**
  * Checks if the $_POST vars are set 
  *
  * @access private
  *
  * return bool
  */
  function checkSet(){
  return isset($_POST['subject'], $_POST['mesage'], $_POST['name'], $_POST['address'], $_POST['spam']);
}

  /**
  * Checks if an email address in a valid format
  *
  * @access private
  *
  * @param string $email The email address to check
  *
  * return bool
  */

function checkEmail($email){
  return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
}

	if(checkSet() != FALSE) {
		if(!empty($POST['subject']) && !sanityCheck($POST['subject'], 'string', 100)) {

		}
		else {
			echo 'Subject not set';
			exit();
		}
	}
	else {
		echo '<p>Please fill in the form above</p>';
	}

?>

<?php endif ?>

