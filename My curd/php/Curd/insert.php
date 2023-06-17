<?php
include "../mycon.php";

if(isset($_POST['formBtn'])){

    $name =$_POST['name'];
    $age =$_POST['age'];
    $qualy =$_POST['qualy'];
    $skill =$_POST['skill'];

    $sqlquery = "INSERT INTO `table`( `name`, `age`, `qualy`, `skill`) VALUES ('$name','$age','$qualy','$skill')";

    if($mycon -> query($sqlquery) === True){
        ?>
        <script>
            window.location ="../../thanks.php";
        </script>
        <?php

    }
    $mycon -> close();
}
?>














?>