<?php
    session_start();
    $_SESSION["user-id"];
    $_SESSION["user-name"];
    $_SESSION["validity"];
    if(isset($_POST["submit"])){
        //connect ot mysqli
        $mysqli = require __DIR__ . "/database.php";

        $email= $mysqli->real_escape_string($_POST['email']);
        $password= $_POST['password'];
        
        if($mysqli->connect_error){
            die('Connection failed : '.$mysqli->connect_error);
        }else{
            $query = sprintf("SELECT * FROM account WHERE email = '%s'", $email);
            $result = $mysqli->query($query);
            $usr = $result->fetch_assoc();
            var_dump($usr);
            if($usr){
                if(password_verify($password, $usr["password"])){
                    $_SESSION["user-id"] = $usr["id"];
                    $_SESSION["user-name"] = $usr["email"];
                    header("location: ../home/index.php");
                }else{
                    header("location: ../account/login.php");
                    $_SESSION["validity"] =  true;
                    exit;
                }
            }else{
                $_SESSION["validity"] = true;
                header("location: ../account/login.php");
                    exit;
            }
        }
    }else{
        header("location: ../account/login.php");
        exit;
    }




?>