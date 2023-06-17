<?php

    include '../conn.php';

    if (isset($_POST['submitBtn'])) {
        $userName = $_POST['userName'];
        $userAge = $_POST['userAge'];
        $userQly = $_POST['userQly'];
        $userSkill = $_POST['userSkill'];
    }

    $insertQuery = "INSERT INTO `user`(`name`, `age`, `Qly`, `Skill`) VALUES ('$userName','$userAge','$userQly','$userSkill')";


    if ($conn -> query($insertQuery) === TRUE) {
        ?>
        <script>
            window.location = '../../index.php';
        </script>
        <?php
    }

?>