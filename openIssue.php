<?php

require 'php/sendEmail.php';
require 'php/readPostParam.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $company = read_post_param("company");
    $fullName = read_post_param("fullName");
    $role = read_post_param("role");
    $email = read_post_param("email");
    $phone = read_post_param("phone");
    $issueType = read_post_param("issueType");
    $issueDescription = read_post_param("issueDescription");
    $programmingLanguages = read_post_param("programmingLanguages");
    $browsers = read_post_param("browsers");
    $automationFramework = read_post_param("automationFramework");
    $automationTool = read_post_param("automationTool");
    $codingSkills = read_post_param("codingSkills");
    $CI = read_post_param("CI");
    $testManagement = read_post_param("testManagement");
    $sourceControl = read_post_param("sourceControl");
    $anythingElse = read_post_param("anythingElse");

    $messageBody =  "<h2>Top-Q Selenium Center - Selenium Question</h2>" .
    "<hr>" .
    "<p><b>Company:</b> " . $company . "</p>" .
    "<p><b>Full name:</b> " . $fullName . "</p>" .
    "<p><b>Role / Title:</b> " . $role . "</p>" .
    "<p><b>Email:</b> " . $email . "</p>" .
    "<p><b>Phone:</b> " . $phone . "</p>" .
    "<hr>" .
    "<p><b>Issue Type:</b> " . $issueType . "</p>" .
    "<p><b>Issue Description:</b></p><p>" . $issueDescription . "</p>" .
    "<p><b>Programming Languages:</b> " . $programmingLanguages . "</p>" .
    "<p><b>Browsers:</b> " . $browsers . "</p>" .
    "<p><b>Automation Framework:</b> " . $automationFramework . "</p>" .
    "<p><b>Automation Tool:</b> " . $automationTool . "</p>" .
    "<p><b>Coding Skills:</b> " . $codingSkills . "</p>" .
    "<p><b>CI:</b> " . $CI . "</p>" .
    "<p><b>Test Management:</b> " . $testManagement . "</p>" .
    "<p><b>Source Control:</b> " . $sourceControl . "</p>" .
    "<p><b>Anything else:</b></p><p>" . $anythingElse . "</p>";
    
    $result = sendEmail("support@topqsupportcenter.zohodesk.com", "", $email, $fullName, "Selenium Question from: " . $fullName . " @ " . $company, $messageBody);

    if ($result) {
        include 'generalQuerySuccess.php';
    }
    else {
        echo "ERROR";
    }
}

?>