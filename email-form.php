<?php

// Get the form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$postCode = $_POST['post-code'];

// Create the email body
$emailBody = "You have received a new message from $name:\n\n$message";

// Send the email
mail('wijehomes@gmail.com', 'New message from $name', $emailBody);

// Redirect the user to a confirmation page
// header('Location: confirmation.php');

?>