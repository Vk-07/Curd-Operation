<?php
$hostname = "localhost";
$username ="root";
$password ="";
$dbname = "newform";

$mycon = new mysqli($hostname,$username,$password,$dbname);

if(!$mycon -> connect_error){
    // echo "connection successfully";
}















?>