
<?php

include "connectionToDatabase.php";

if($connection->error == false){
    if(isset($_POST["add"])){
        $category_name = $_POST["new_category_name"];
        $category_kind = $_POST["new_category_kind"];

        $sql = "INSERT INTO category (category_name, category_kind) 
                    VALUES ('$category_name', '$category_kind')";

        $result = $connection->query($sql);

        if($result == true){
            header("Location:view_category.php?added=true");
        }else{
            echo "fail";
        }
    }
}
?>