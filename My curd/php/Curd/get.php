<?php
    
    include '../mycon.php';

    $userID = $_GET['userID'];
    
    $stm = "SELECT * FROM `user` WHERE ID = $userID";
    $data = mysqli_query($mycon, $stm);
    $arry = [];

    for ($i=0; $i < mysqli_num_rows($data); $i++) { 
        $row = mysqli_fetch_assoc($data);
        $arry = [$row['ID'], $row['name'], $row['age'], $row['Qly'], $row['Skill']];
    }

    echo json_encode($arry);




?>