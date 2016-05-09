<?php
//this entire exercise is based off: http://myphpform.com/final-form.php
/* setup e-mail recipient */
$myemail = "you@domain.com";

/* check all form inputs using check_input function */
$yourname = check_input($_POST['yourname'],"Enter your name");
$subject = check_input($_POST['subject'],"Write a subject");
$email = check_input($_POST['email']);
$website = check_input($_POST['website']);
$likeit = check_input($_POST['likeit']);
$how_find = check_input($_POST['how']);
$comment = check_input($_POST['comment'], "Write your comments");

/* if email is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}

/* if URL is not valid set $website to empty */
if (!preg-match("/^(https?:\/\/+[\w\-]+[\w\-]+)i", $website))
{
$website='';
}

/* Prepare the message for the e-mail */
$message="Hello!
Your contact form has been submitted by:
Name:$yourname
E-mail:$email
URL:$website

Like the website? $likeit
How did he/she find it? $how_find
    
Comments:
$comments
    
End of message
";

/* Send the message using mail() function */
mail($myemail,$subject,$message);

/* redirect visitor to thank you page */
header('Location:thanks.html');
exit();

/* Functions that we used */
function check_input($data,$problem='')
{
$data=trim($data);
$data=striplashes($data);
$data=htmlspecialchars($data);
if($problem&&strlen($data))==0)
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
        <b>Please correct the following errors:</b> <br />
        <?php echo $myError; ?>
    </body>
</html>
<?php
 exit ();
}
?>