<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    <div id="mainBox">
        <button id="userbtn">Add New User</button>
        <table>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Qualification</th>
                    <th>Skill</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "php/mycon.php";
                $selectquery ="SELECT `ID`, `name`, `age`, `qualy`, `skill` FROM `table`";
                $data = mysqli_query($mycon , $selectquery);
                for ($i=0; $i < mysqli_num_rows($data) ; $i++) { 
                    $row = mysqli_fetch_assoc($data);

                    echo " <tr>
                                 <th> ".($i+1)."</th>
                                 <th> ".$row['name']."</th>
                                 <th> ".$row['age']."</th>
                                 <th> ".$row['qualy']."</th>
                                 <th> ".$row['skill']."</th>
                                 <th> <button><i class='fa-solid fa-pen-to-square edit ' editId = ".$row['ID']."></i></button></th>
                                 <th> <button> <i class='fa-solid fa-trash delete '  deleteId = ".$row['ID']."></i></button></th>

                          </tr>";
                }



                ?>
            </tbody>
        </table>
    </div>

    <!-- New form Starts here -->
    <div id="formBox">
        <div id="headingBox">
          <h2>New User</h2>
          <i id="closebtn" class="fa-solid fa-xmark  close"></i>
        </div>
        <form action="php/curd/insert.php" method="POST">
            <div id="inputBox">
                <input type="text" placeholder="Name" name="name" id="username" autocomplete="on">
                <input type="number" placeholder="Age" name="age" id="userage" autocomplete="on">
                <input type="text" placeholder="Qualification" name="qualy" id="userqualy" autocomplete="on">
               <select  id="selectSkill" name="skill" autocomplete="on">
                <option selected disabled>Select Skill</option>
                <option>Web Development</option>
                <option>Digital Marketing</option>
                <option>Content Writing</option>
                <option>Video Creator</option>
                <option>Graphic Designing</option>

               </select>
            </div>
            <button id="formBtn" name="formBtn">Submit</button>
        </form>
    </div>


    <script src="js/script.js"></script>
    
</body>
</html>
