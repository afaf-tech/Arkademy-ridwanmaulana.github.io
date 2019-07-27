<?php

//------------VALIDASI USERNAME-------
$username = "ayu567"; //<---- 'true' username
$pattern_username = "/^(?![0-9])(?=.*[A-z])(?!.*[!@#$%&*._-])(?=.*[0-9])\S{5,9}$/";
if (preg_match($pattern_username, $username)) {
    echo "<br>";
    echo "username is valid";
} else {
    echo "<br>";
    echo "Username must be a combination of lowercase letters, uppercase letters and numbers 5-9 characters long. Username cannot begin with a number.";
}

echo "<hr>";


//-----------VALIDASI PASSWORD-----
$password = "ridwan213"; //<--- 'false' password
$pattern_password = "/^(?=.*[A-z])(?=.*[!#$%&*._-])(?=.*[=])(?=.*[0-9])\S{8,15}$/";

if (preg_match($pattern_password, $password)) {
    echo "<br>";
    echo "password is valid";
} else {
    echo "<br>";
    echo "passwords must be a combination of lowercase letters, uppercase letters of at least one character, numbers of at least one character, and special characters of at least one character and must have a symbol character ‘@’ and a length of at least 8 characters.";
}
