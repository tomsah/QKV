<?php 


       $your_email ='thomas.salah@gmail.com';
       $name = $_POST['name'];
       $visitor_email = $_POST['email'];
       $user_message = $_POST['message'];

       // set here
       $to = $your_email;
       //$subject="New form submission";
       $from = $your_email;
       $body = $message;

       $body = "A user  $name submitted the contact form:\n".
              "Name: $name\n".
              "Email: $visitor_email \n".
              "Message: \n "."$user_message\n";  
              
       $headers = "From: $from \r\n";

       // $headers = "From: $email\r\n";
       // $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       header('Location:thank-you-page.html');
	   
	   if (mail ($to, $subject, $body, $headers)) echo"thanks for sending an email"; else echo "mail not send" ;
?>

