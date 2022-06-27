<?php
    
    /*
    Remeber to do some filtering and some sanitization in those POST params otherwise we gonna cause SQLi and other attacks
    */
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

    //We are good to go

    $postdata = "username="+$username+"&"+"password="+$password
    if (isset($username) && isset($password)) {
        if ($username !== "" && $password !== "") {
            echo "Not Connected";
        }
    }
?>
