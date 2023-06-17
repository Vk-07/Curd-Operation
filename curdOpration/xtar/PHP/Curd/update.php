<?php

    include '../conn.php';

    if (isset($_POST['upsubmitBtn'])) {
        
        $upuserName = $_POST['upuserName'];        
        $upuserAge = $_POST['upuserAge'];        
        $upuserQly = $_POST['upuserQly'];        
        $upuserSkill = $_POST['upuserSkill'];
        $upUserID = $_POST['upUserID'];
        
        $stm = "UPDATE `user` SET `name`='$upuserName',`age`='$upuserAge',`Qly`='$upuserQly',`Skill`='$upuserSkill' WHERE ID = $upUserID";
        
        if ($conn -> query($stm) === TRUE) {
            ?>
                <script>
                    window.location = "../../index.php";
                </script>
            <?php
        }else{
            echo "not updated". $conn->error;
        }

    }





?>