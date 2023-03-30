<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = 'leebullish@gmail.com';
    $subject = 'New Sign Up';
    $message = "Name: " . $name . "\r\nEmail: " . $email;
    $headers = "From: leebullish@gmail.com\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
    if (mail($to, $subject, $message, $headers)) {
        echo 'Thank you for signing up!';
    } else {
        echo 'Oops! There was a problem sending your email. Please try again later.';
    }
}
