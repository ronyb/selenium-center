<?php

require 'sendEmail.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $company = test_input($_POST["company"]);
    $fullName = test_input($_POST["fullName"]);
    $role = test_input($_POST["role"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $message = test_input($_POST["message"]);
    
    $messageBody =  "<h3>Top-Q Selenium Center - General Query</h3>" .
    "<p><b>Company:</b> " . $company . "</p>" .
    "<p><b>Full name:</b> " . $fullName . "</p>" .
    "<p><b>Role / Title:</b> " . $role . "</p>" .
    "<p><b>Email:</b> " . $email . "</p>" .
    "<p><b>Phone:</b> " . $phone . "</p>" .
    "<p><b>Message:</b></p><p>" . $message . "</p>";
    
    $result = sendEmail("support@topqsupportcenter.zohodesk.com", "", $email, $fullName, "Selenium Center - General Query", $messageBody);

    if ($result) {
        include 'generalQuerySuccess.php';
    }
    else {
        echo "ERROR";
    }
}
  
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = str_replace("\n", "<br>", $data);
    return $data;
}

?>