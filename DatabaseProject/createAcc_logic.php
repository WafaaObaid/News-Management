
<?php
include "connectionToDatabase.php";

function validData($data): string {
$data = trim($data);
$data = htmlspecialchars($data);
return $data;
}

if($connection->error == false){
    $name = validData($_POST["Username"]);
    $email = validData($_POST["Email"]);
    $password = password_hash(validData($_POST["password"]), PASSWORD_DEFAULT);
    $gender = $_POST["gender"];

    $sql = "INSERT INTO users(name, email,password,gender)
         VALUES ('$name', '$email', '$password', '$gender') ";

   $result = $connection->query($sql);

   if($result==true){
    header("Location:login_ui.php?statusCode=201");
   // echo "done";
   }else{
    echo "fail";
   }


}

