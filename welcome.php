<?php

// if remember checked set cookie
$username = $_POST['name'];
$pwd = $_POST['pwd'];

if ($pwd == "bar") {
    echo "Welcome $username";
    if (isset($_POST['remember']) && $_POST['remember'] == "ON") {
        echo "remember";
        setcookie("user", $username, time() + (60 * 2));
    } else {
        echo "forget";
    }
} else {
    echo "bad username or password";
}

