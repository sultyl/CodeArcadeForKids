<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $receiving_email_address = 'sultyleke@gmail.com';

  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Create the email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Subject: $subject\n";
  $email_content .= "Message:\n$message\n";

  // Set up email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($receiving_email_address, $subject, $email_content, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
