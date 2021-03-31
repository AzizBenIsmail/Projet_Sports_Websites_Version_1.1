<?php
	$field_name = $_POST['name'];
	$field_surname = $_POST['surname'];
	$field_email = $_POST['email'];
	$field_message = $_POST['message'];

	$mail_to = 'example@gmail.com';
	$subject = 'Message'.$field_name;

	$body_message = 'From: '.$field_name."\n";
	$body_message .= 'E-mail: '.$field_email."\n";
	$body_message .= 'Message: '.$field_message;

	$headers = 'From: '.$field_email."\r\n";
	$headers .= 'Reply-To: '.$field_email."\r\n";

	$mail_status = mail($mail_to, $subject, $body_message, $headers);

	if($mail_status){ 
?>
		<script>
			alert('Thank you for the message.');
			window.location = 'index.html';
		</script>
<?php
	}
	else{
?>
		<script>
			alert('Message failed.');
			window.location = 'index.html';
		</script>
<?php
	}
?>