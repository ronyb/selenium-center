<?php

require 'php/sendEmail.php';
require 'php/readPostParam.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $company = read_post_param("company");
    $fullName = read_post_param("fullName");
    $role = read_post_param("role");
    $email = read_post_param("email");
    $phone = read_post_param("phone");
    $message = read_post_param("message");
    
    $messageBody =  "<h2>Top-Q Selenium Center - General Query</h2>" .
    "<hr>" .
    "<p><b>Company:</b> " . $company . "</p>" .
    "<p><b>Full name:</b> " . $fullName . "</p>" .
    "<p><b>Role / Title:</b> " . $role . "</p>" .
    "<p><b>Email:</b> " . $email . "</p>" .
    "<p><b>Phone:</b> " . $phone . "</p>" .
    "<p><b>Message:</b></p><p>" . $message . "</p>";
    
    $result = sendEmail("support@topqsupportcenter.zohodesk.com", "", $email, $fullName, "General Query from: " . $fullName . " @ " . $company, $messageBody);

    if ($result) {
        include 'generalQuerySuccess.php';
    }
    else {
        echo "ERROR";
    }
}

?>