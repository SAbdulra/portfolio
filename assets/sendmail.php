<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;



$errors = [];
$errorMessage = ' ';
$successMessage = ' ';
//echo 'sending ...';
if (!empty($_POST))
{
  $name = $_POST['firstName'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if (empty($name)) {
      $errors[] = 'Name is empty';
  }

  if (empty($email)) {
      $errors[] = 'Email is empty';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Email is invalid';

  }

  if (empty($message)) {
      $errors[] = 'Message is empty';
  }

  if (!empty($errors)) {
      $allErrors = join ('<br/>', $errors);
      $errorMessage = "<p style='color: red; '>{$allErrors}</p>";
  } else {
      $fromEmail = $email;
      $emailSubject = 'New email from your contact form';

    mail("abdulrahaman@syedar9160.in", "New Form", $name.$message);
          // Create a new PHPMailer instance
    }
}

?>