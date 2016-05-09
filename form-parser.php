<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comments = $_POST['comments'];
    $from = "From: form inquiry";
    $to = "emily@gmail.com";
    $subject = "I have a question...";
    $human = $_POST['human'];
    
    $body = "From: $name\n Email: $email\n Phone: $phone\n Message: $comments";

if ($_POST['submit']) {
    if ($name !='' && $email !='') {
        if ($human == '4') {
            if (mail ($to, $subject, $body, $from)) {
                echo '<p>Your message has been sent.</p>';
            } else {
                echo '<p>Something is wrong, go back and try again.</p>';
            }
        } else if ($_POST['submit'] && $human !='4'){
                echo '<p>Your math stinks, try again.</p>';
            }
        } else {
            echo '<p>You need to fill in all required fields</p>';
        }
        
}
?>