<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'techtutorsind@techtutors.masuk.id';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  // $contact->smtp = array(
  //   'host' => 'mail.techtutors.masuk.id',
  //   'username' => 'techtutorsind@techtutors.masuk.id',
  //   'password' => 'Jumanji@TheRockBotak',
  //   'port' => '465'
  // );

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
      // Collect form data
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subjek = $_POST['subject'];
      $message = $_POST['message'];
      
  
      // Set the recipient email address
      $to = "techtutorsind@techtutors.masuk.id";
  
      // Set the email subject
      $subject = "New message from " . $name;
  
      // Set the email message
      $message_body = "Name: " . $name . "\nEmail: " . $email . "\n\n" . $message;
  
      // Set the email headers
      $headers = "From: " . $email . "\r\n";
      $headers .= "Reply-To: " . $email . "\r\n";
      $headers .= "X-Mailer: PHP/" . phpversion();
  
      // Send the email
      if (mail($to, $subject, $message_body, $headers)) {
          echo "Thank you for your message!";
      } else {
          echo "There was a problem sending your message.";
      }
  
  }
  
  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>
