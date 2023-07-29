<?php
if(!isset($_POST['send']))
{
    echo "error; you need to submit the form";
}

$name = $_POST['name'];
$lname = $_POST['last name'];
$email = $_POST['Email'];
$Phone = $_POST['phone'];
$message = $_POST['message'];

if(empty($name)||empty($email)||empty($phone))
{
    echo "Name and email are mandatory!";
    exit;
}

$email_form = 'digitalbhadasinfo@gmail.com';
$email_subject = 'New Form submission';
$email_body = "you have recieved a new message from the user $name.\n",
    "email address: $email\n",
    "phone no: $phone\n"
    "Here is the message:\n $message".

$to = "digitalbhadasinfo@gmail.com"
$header = "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $header);