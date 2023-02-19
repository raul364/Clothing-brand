<?php
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        //hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        //connect ot DB

        $mysqli = require __DIR__ . "/database.php";
        $stmt = $mysqli->stmt_init();
        $stmt = $mysqli->prepare("insert into account(email, password) value(?, ?)");
        //check for query error
        
        if(!$stmt){
            die("SQL error: " . $stmt->error);
        }

        $stmt->bind_param("ss", $email, $hashed_password);

        if($stmt->execute()){
            echo "../account/postcreation.html";
        }else {
            die($stmt->error . " " . $stmt->errno);
        }
        
    }else{
        header("location: ../account/signup.html");
        exit;
    }




?>