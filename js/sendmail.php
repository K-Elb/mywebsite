<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $title = $_POST['title'];
    $message = $_POST['message'];

    $to = "kareem112000@hotmail.com"; 
    $subject = "New Form Submission by $name";
    $body = "Name: $name\nEmail: $email\nTel: $tel\nTitle: $title\nMessage: $message";

    if(mail($to, $subject, $body)){
        echo "Thank you for your message!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}

?>