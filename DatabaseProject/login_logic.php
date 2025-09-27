
<?php
session_start();
include "connectionToDatabase.php";

if($connection->error == false){
    if(isset($_POST["login"])){
        $email = trim($_POST["Email"]);
        $password =trim( $_POST["password"]);

        $sql = "SELECT * FROM users WHERE email = '$email' ";

        $result = $connection->query($sql);
        if($result->num_rows >0){
            $data = $result->fetch_assoc();
            if(password_verify($password, $data["password"])){
                $_SESSION["authUser"] = $data;
                header("Location: dashbordUI.php");
                //echo "login done";
            }else{
                echo "password fail ";
            }
        }else{
            echo "login fail";
        }
    }
}