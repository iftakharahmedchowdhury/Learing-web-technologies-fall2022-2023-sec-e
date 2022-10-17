<?php

$name = $_POST['name'];
$password = $_POST['password'];



if (strlen($name)>=2 &&ctype_alnum($name) || is_numeric($name) || preg_match('[_-]', $name)) {
   if (strlen($password)>=8 && preg_match('(@#$%)', $name)) {
    if ($name == "admin" && $password == "1234") {
        echo "user found";
    } else {
        echo "invalid user";
    }
   }
   else{
    echo "invalid password";
   }
} else {
    echo "invalid input type";
}
