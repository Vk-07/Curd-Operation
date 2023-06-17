<?php

    include '../conn.php';

    $deleteID = $_GET['getID'];

    $stm = "DELETE FROM `user` WHERE ID = $deleteID";

    $msg = '';

    if ($conn -> query($stm) === TRUE) {
        $msg = "success";
    }else{
        $msg = 'error';
    }

    echo json_encode(array("msg" => $msg));




?>