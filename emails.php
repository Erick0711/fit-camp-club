<?php

    $destinario = "maicolarteaga0711@gmail.com";

    $fullName = $_POST['fullname'];
    $emailUser = $_POST['email'];
    $message = $_POST['message'];

    $header = "FIT-CAMP CLUB ACTIVA !IMPORTANTE";
    $fullMessage = "Hola soy: ". $fullName . "\nCorreo: " . $emailUser . "\n" . $message;

    mail($destinario, $header , $fullMessage );

    header("Location:./index.html");

?>