<?php 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    try {
        // Sanitize and validate inputs
        $fname = htmlspecialchars(trim($_POST["fname"]));
        $lname = htmlspecialchars(trim($_POST["lname"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $number = htmlspecialchars(trim($_POST["number"]));
        $message = nl2br(htmlspecialchars(trim($_POST["message"]))); // Make sure newlines are converted to <br> tags for HTML

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format");
        }

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        // SMTP server configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'homeandhaven123@gmail.com';
        $mail->Password = 'kgqnsrgiyjksbhvm';  // Consider using environment variables for security
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender and recipient
        $mail->setFrom('homeandhaven123@gmail.com');
        $mail->addAddress($email);

        // Email subject and body
        $mail->Subject = $_POST["subject"];
        $mail->isHTML(true);

        // Using <style> for email body formatting
        $mail->Body = "
        <div style='width: 100%; background-color: #fdced6; padding: 1%;'>
        <div style='width: 80%; margin: auto; background-color: white; padding: 2%; border-radius: 15px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;'>
        <img src='https://i.ibb.co/Cws5D7Q/logo.png' alt='Home and Haven Logo'>
        <h3 style='color: black !important;'>Hi! Gracie and Taylor,</h3>

        <p style='color: black !important;'> I hope this message finds you well. I am writing to inform you that there is an individual who wishes to get in 
        touch with you through the Home and Haven Website. <br> Below are the details you may need to proceed with this contact:</p>
        
        <p style='color: black !important; text-transform: capitalize;'><b>Name:</b> $fname $lname<br>
        <b>Email Address:</b><span style='color: black !important; text-transform: none;'>$email</span><br>
        <b>Phone Number:</b> $number<br>

        <b>Message:</b><br> $message</p><br>

        <p style='color: black !important;'> Thank you and have a great day ahead! </p>
        <i style='color: black !important;'>Best Regards,</i>
        <h3 style='color: black !important;'>Home and Haven (automailer)</h3>
        </div>
        </div>";

        // Send the email
        $mail->send();

        // Redirect or show success message
        echo "<script>alert('Sent Successfully'); document.location.href = 'index.php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
