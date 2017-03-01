
<?php
/* Set e-mail recipient */
$myemail  = "jobs-cafe@berkeley.edu";

/* Check all form inputs using check_input function */
$yourname = check_input($_POST['name'], "Enter your name");
$email  = check_input($_POST['email'], "Enter you email");
$major  = check_input($_POST['major'], "Enter you major");
$year = check_input($_POST['year'], "Select your year");

/* Let's prepare the message for the e-mail */

$subject = "Application submitted by $yourname"

$message = "Hello!

Your application form has been submitted by:

Name: $yourname
E-mail: $email
Major: $major
Year: $year

End of message
";


/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

/* If URL is not valid set $website to empty */
if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $website))
{
    $website = '';
}

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: index.html');
exit();

/* Functions we used */
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

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>