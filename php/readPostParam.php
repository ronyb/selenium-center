<?php

function read_post_param($paramName) {
    
    if (isset($_POST[$paramName])) {
        
        $param = $_POST[$paramName];
        
        if (gettype($param) == "string") {
            $param = trim($param);
            $param = stripslashes($param);
            $param = htmlspecialchars($param);
            $param = str_replace("\n", "<br>", $param);
            if ($param == "") {
                return ("<span style='color: #999;'>-- wasn't provided --</span>");
            }
        }
        elseif (gettype($param) == "array") {
            $values = "";
            foreach ($param as $value) {
                $values .= $value . "; ";
            }
            return $values;
        }
        
        return $param;
    }
    else {
        return ("<span style='color: #999;'>-- wasn't provided --</span>");
    }
}

?>