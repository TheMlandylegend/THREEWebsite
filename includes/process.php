<?php
	if (($_SEVER['myname'])) {$myname = $_POST['myname'];}
	if (($_SEVER['$yourmail'])) {$yourmail = $_POST['yourmail'];}
		if (isset($_POST['mymessage'])) {
			$mymessage = filter_var($_POST['mymessage'], FILTER_SANITIZE_STRING ); 
	}
	$formerrors = false;
if ($myname === '') :
$err_myname = '<div class="error">Sorry, your name is a required field</div>';
$formerrors = true;
endif; // input field empty

if ( !(preg_match('/[A-Za-z]+, [A-Za-z]+/', $myname)) ) :
		$err_patternmatch = '<div class="error">Sorry, the name must be in the format: Last, First</div>';
		$formerrors = true;
	endif; // pattern doesn't match
$formdata = array (
    'myname' => $myname,
    'yourmail' => $yourmail,
	'mymessage' => $mymessage 
	);
if (!($formerrors)) :
		$to			= 	"mclouigene@mcdeveloper.tech'";
		$subject	=	"From $myname -- Signup Page";
		$message	=	$_POST['message'];


		if (mail($to, $subject, $message)):
			$msg = "Thanks for filling out our form";
		else:
			$msg = "Problem sending the message";
		endif; // mail form data

	endif; // check for form errors


?>