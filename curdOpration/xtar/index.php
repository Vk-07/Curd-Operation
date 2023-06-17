<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

                    include 'PHP/conn.php';
                    
                    $selectQuery = "SELECT * FROM `user`";
                    $data = mysqli_query($conn, $selectQuery);

                    for ($i=0; $i < mysqli_num_rows($data); $i++) { 
                        $row = mysqli_fetch_assoc($data);
                        echo "<tr>";
                        echo "<td>". ($i + 1) ."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['age']."</td>";
                        echo "<td>".$row['Qly']."</td>";
                        echo "<td>".$row['Skill']."</td>";
                        echo "<td><button><i class='fa-solid fa-pen-to-square edit' editID=". $row['ID'] ." ></i></button></td>";
                        echo "<td><button><i class='fa-solid fa-trash delete'  deleteID=". $row['ID'] ." ></i></button></td>";
                        echo "</tr>";
                    }


                ?>
            </tbody>
        </table>
    </div>

    <div id="formBox">
        <form action="PHP/Curd/insert.php" method="POST">
            <div id="upformHeading">
                <h2>User form</h2>
                <i id="closeBtn" class="fa-solid fa-xmark closeBtn"></i>
            </div>
            <div id="inputBox">
                <input type="text" id="userName" name="userName" placeholder="Name">
                <input type="number" id="userAge" name="userAge" placeholder="Age">
                <input type="text" id="userQly" name="userQly" placeholder="Qualification">
                <select id="selectSkill" name="userSkill">
                    <option>Video Editing</option>
                    <option>Web Development</option>
                    <option>Graphic Designing</option>
                    <option>Content Writing</option>
                    <option>Digital Marketing</option>
                </select>
            </div>
            <button id="formBtn" name="submitBtn">Submit</button>
        </form>
    </div>
    
    
    <div id="upformBox">
        <form action="PHP/Curd/update.php" method="POST">
            <div id="upformHeading">
                <h2>Update User form</h2>
                <i id="upcloseBtn" class="fa-solid fa-xmark upcloseBtn"></i>
            </div>
            <div id="upinputBox">
                <input type="text" id="upuserName" name="upuserName" placeholder="Name">
                <input type="number" id="upuserAge" name="upuserAge" placeholder="Age">
                <input type="text" id="upuserQly" name="upuserQly" placeholder="Qualification">
                <input type="hidden" id="upUserID" name="upUserID">
                <select id="upselectSkill" name="upuserSkill">
                    <option>Video Editing</option>
                    <option>Web Development</option>
                    <option>Graphic Designing</option>
                    <option>Content Writing</option>
                    <option>Digital Marketing</option>
                </select>
            </div>
            <button id="upformBtn" name="upsubmitBtn">Submit</button>
        </form>
    </div>

    <script src="Js/script.js"></script>

</body>
</html>