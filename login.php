<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $postdata = "username="+$username+"&"+"password="+$password
    if (isset($username) && isset($password)) {
        if ($username !== "" && $password !== "") {
            echo "Not Connected";
        }
    }
?>