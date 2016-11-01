<?php
    header('Content-type: application/json');
         $status = array(
		'type'=>'success',
		'message'=>'Thank you. We will contact you as early as possible.'
	);

    $email_from = @trim(stripslashes($_POST['email2']));

    $email_to = "besttechnolabs@gmail.com,chaithanya.btl@gmail.com,girinath009@gmail.com,gnane.btl@gmail.com";
    
    $subject= "BTL Email Subscription request";

    $success = @mail($email_to, $subject,'From: <'.$email_from.'>');

    echo json_encode($status);
    die;