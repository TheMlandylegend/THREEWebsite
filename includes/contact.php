<?php 
	include"process.php";
?>
<!doctype html><head>
<meta charset="utf-8">
	<link rel="stylesheet" href="normalize.css" />
	<link rel="stylesheet" href="mystyle.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>  




<section class="second">
	<div class="contact">				
		<div class ="contactform">	
	<?php 		if (isset($msg)) { echo '<div id ="formmessage"><p>', $msg , '</P> </div>';}?>	
	<form id="myform" name="theform"class="contact-form" action="<?php echo $_SERVER['PHP_SELF]']?>" method="POST">
		<span id="formerro" class="error"></span>
		
		<input type="text" name="myname" id="myname" title="Please enter your name" tabindex="3" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>
		<input type="text" name="mail" id="yourmail" placeholder="Email Address" tabindex="2" autofocus required value="<?php if(isset($yourmail)) {echo $yourmail; } ?>">
		<?php  if (isset($err_yourmail)) {echo $err_yourmail; }?>
		<?Php if (isset($err_pattternmatch)) {echo $err_patternmatch;}?>			
		<textarea name="message" id="mymessage" placeholder="Type your Message Here" tabindex="3" autofocus required > <?php if (isset($mymessage)) { echo $mymessage; }  ?></textarea>

		<button type="submit" name="submit" data-submit="...Sending">Submit</button>             													
			</form>
				</div>
                    
					</div>	
                		</section>
