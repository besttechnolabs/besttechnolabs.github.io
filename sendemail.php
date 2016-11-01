<?php
    header('Content-type: application/json');
         $status = array(
		'type'=>'success',
		'message'=>'Thank you. We will contact you as early as possible.'
	);

	
	$name       = @trim(stripslashes($_POST['name1'])); 
        $email_from = @trim(stripslashes($_POST['email1']));
        $subject    = @trim(stripslashes($_POST['subject1'])); 
        $message    = @trim(stripslashes($_POST['message1']));  
        $email_to   = "besttechnolabs@gmail.com,chaithanya.btl@gmail.com,girinath009@gmail.com,gnane.btl@gmail.com";
    
        $body = 'Name: ' . $name . "\n\n" . 
             'Email: ' . $email_from . "\n\n" .
            'Subject: ' . $subject . "\n\n" .            
            'message : ' . $message . "\n\n";

        $success = @mail($email_to, 'BTL Conact Request: <'.$subject.'>', $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;