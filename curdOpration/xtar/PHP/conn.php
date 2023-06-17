<?php


    $host ="localhost";
    $username="root";
    $password="";
    $db_name="formdata";


    $conn = new mysqli($host,$username,$password,$db_name);

    if(!$conn -> connect_error){
        // echo "Connection Established Successfully";
    }



?>