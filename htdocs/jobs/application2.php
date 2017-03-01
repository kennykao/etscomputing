<?php
/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter your name");
$email  = check_input($_POST['email'], "Enter you email");
$major  = check_input($_POST['major'], "Enter you major");
$year = check_input($_POST['year'], "Select your year");
$position = $_POST['position'];

/* Let's prepare the message for the e-mail */



$message = "Hello,

Your application form has been submitted by:

Name: $name
E-mail: $email
Major: $major
Year: $year
Position: ";
$positionstring="";

foreach ($position as $pos){
		$positionstring = $positionstring.$pos.", ";
}


$message = $message.$positionstring."
Required documents are attached below.
";
$subject = "$name - ".$positionstring;

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->From      = $email;
$mail->FromName  = $name;
$mail->Subject   = $subject;
$mail->Body      = $message;
$mail->AddAddress( 'jobs-cafe@berkeley.edu' );

if (isset($_FILES['resume']) &&
    $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['resume']['tmp_name'],
                         $_FILES['resume']['name']);
}

if (isset($_FILES['exercise']) &&
    $_FILES['exercise']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['exercise']['tmp_name'],
                         $_FILES['exercise']['name']);
}

if (isset($_FILES['availability']) &&
    $_FILES['availability']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['availability']['tmp_name'],
                         $_FILES['availability']['name']);
}

// return $mail->Send();

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header('Location: thanks.html');
}

function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}
?>