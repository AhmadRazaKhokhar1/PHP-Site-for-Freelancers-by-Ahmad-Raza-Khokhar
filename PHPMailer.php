<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'C:\xampp\htdocs\Store\PHPMailer\src\Exception.php';// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];

  $to = 'ahmadrazayousaf19@gmail.com';
  $subject = 'Contact Form Submission';
  $message = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nDate of Birth: $dob";

  $mail = new PHPMailer(true);

  //Server settings
  $mail->SMTPDebug = 0;                      // Enable verbose debug output
  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'ahmadrazayousaf19@gmail.com';                     // SMTP username
  $mail->Password   = 'Ahmadraza786';                               // SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; also accepted
  $mail->Port       = 587;                                    // TCP port to connect to


  `PHPMailer::ENCRYPTION_SMTPS`
  //Recipients
  $mail->setFrom($email, "$first_name $last_name");
  $mail->addAddress($to);     // Add a recipient

  // Content
  $mail->isHTML(false);                                  // Set email format to plain text
  $mail->Subject = $subject;
  $mail->Body    = $message;

  if (!$mail->send()) {
    echo "The form could not be submitted.";
    echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
    echo "The form has been submitted successfully.";
    }
    
}
?>
