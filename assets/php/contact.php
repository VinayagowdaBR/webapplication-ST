<?php
    require_once 'mail.php';

        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);
        
        $mail->setFrom($email , $name);
        $mail->addAddress('admin@siddhrans.com');  //Your Email Address demo@example.com

        $mail->Subject = 'Contact Us Message';  //Header of the message
        $mail->Body    = 
        '
        <center>
            <big>
                <table border="0" style="width: 70%; background-color: #34495e; overflow: hidden;">
                    <tr>
                        <td colspan="2" style=" background-color: #95a5a6; padding: 10px;">
                            <center><h1 style="font-size: 40px; margin: 10px;">Contact Message</h1></center>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 30%; background-color: #bdc3c7; padding: 10px;">Name:</td>
                        <td style="width: 70%; background-color: #b5bebe; padding: 10px;">' . $name . '</td>
                    </tr>
                    <tr>
                        <td style="width: 30%; background-color: #bdc3c7; padding: 10px;">Email:</td>
                        <td style="width: 70%; background-color: #b5bebe; padding: 10px;">' . $email . '</td>
                    </tr>
                     <tr>
                        <td style="width: 30%; background-color: #bdc3c7; padding: 10px;">Subject:</td>
                        <td style="width: 70%; background-color: #b5bebe; padding: 10px;">' . $subject . '</td>
                    </tr>
                    <tr>
                        <td style="width: 30%; background-color: #bdc3c7; padding: 10px;">Message:</td>
                        <td style="width: 70%; background-color: #b5bebe; padding: 10px;">' . $message . '</td>
                    </tr>
                </table>
            </big>
        </center>
        ';  // Message content
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();

?>
<!-- $message = 	"
						<html>
						<head>
							<title>Verification Code</title>
						</head>
						<body>
							<h2>Thank you for Registering.</h2>
							<p>Your Account:</p>
							<p>Email: ".$email."</p>
							<p>Password: ".$password."</p>
							
							<p>Please click the link below to activate your account.</p>
							<h4><a href='".base_url()."user/activate/".$id."/".$code."'>Activate My Account</a></h4>
						</body>
						</html>
						"; -->