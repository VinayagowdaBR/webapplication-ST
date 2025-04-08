<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'mailer/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

 //Server settings
try {

    $mail->isSMTP();                                    //Send using SMTP
    $mail->Host       = 'mail.siddhrans.com';           //Set the SMTP server to send through
    $mail->SMTPAuth   =  true;                          //Enable SMTP authentication
    $mail->Username   = 'admin@siddhrans.com';          //SMTP username 
    $mail->Password   = 'Admin@siddhrans1';             //SMTP password
    $mail->SMTPSecure = "ssl";
    $mail->Port       = 465;

    //Content
    $mail->isHTML(true);
    $mail-> CharSet= "utf-8";
    
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
    
    // Redirect to the specified URL after sending the email
    header('Location: https://siddhrans.com/');
    exit;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; // Message shown on errors
}
?>