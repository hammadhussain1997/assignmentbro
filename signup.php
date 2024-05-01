<?php

session_start();
$token = $_REQUEST['token'] ?? filter_input(INPUT_POST, 'token', FILTER_SANITIZE_SPECIAL_CHARS);
if ($token && session_status() === PHP_SESSION_ACTIVE && $token && $token === $_SESSION['token']) {
    
    
        if(
          (isset($_REQUEST['name']) && !empty($_REQUEST['name']))&&
          (isset($_REQUEST['email']) && !empty($_REQUEST['email']))&&
          (isset($_REQUEST['service']) && !empty($_REQUEST['service']))&&
          (isset($_REQUEST['pc']) && !empty($_REQUEST['pc']))&&
          (isset($_REQUEST['pn']) && !empty($_REQUEST['pn']))		  
            ) {                
          if(preg_match('/^[0-9]{10,14}+$/', $_REQUEST['pn'])) {
        
        
           
        $_SESSION['superhero'] = $_REQUEST['name'] ;
    	$name = $_REQUEST['name'] ;
    	$email = $_REQUEST['email'] ;
    	$subject = 'New Signup Request Assignment Bro ';
    	$service = $_REQUEST['service'] ;
    	$cntryCode = $_REQUEST['pc'] ;
    	$phone = $_REQUEST['pn'] ;

        $email_from = $email;
        $email_to = 'info@assignmentbro.co.uk';//replace with your email

        $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Service: ' . $service . "\n\n" . 'Phone: ' . $cntryCode . $phone;
	    $success = mail($email_to, $subject, $body, 'From: <' . $email_from . '>');
		
		
		
        unset($_SESSION['token']);
        

        header("Location: thanks");
            die;
        }else{
            header("Location: contact-us");
        }

        }else{
            header("Location: contact-us");
        }
		
        } else {
			header("Location: contact-us");          
            exit;
        }
	
?>
