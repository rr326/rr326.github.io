<?php
$field_name = $_POST['Name'];
$field_email = $_POST['Mail'];
$field_message = $_POST['Message'];


$mail_to = 'YOUR_MAIL@GOES_HERE.com';
$subject = '#Message# '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$E-Mail."\r\n";
$headers .= 'Reply-To: '.$E-Mail."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. We will contact you shortly.');
  window.location = 'index.html';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
  alert('Message sending failed. Please, send an email to YOUR_MAIL@GOES_HERE.com');
  window.location = 'index.html';
 </script>
<?php
}
?>
