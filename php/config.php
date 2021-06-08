<?php
    $conn = mysqli_connect("redma", "root", "", "chat");
    if(!$conn){
        echo "Database connected" . mysqli_connect_error();
    }else{
        // echo "Error";
    }
?>