<?php
            $to="recipeint@gmail.com";
            $subject="My Subject";
            $message="<h1>My Message</h1>";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <contact@autodice.in>' . "\r\n";
            $headers .= "Reply-To: contact@autodice.in\r\n";
            $headers .= "Return-Path: contact@autodice.in\r\n";
            mail($to,$subject,$message,$headers);
            # replace contact@autodice.in with your email address.

?>
