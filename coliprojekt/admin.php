<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="admin.css?v=<?php echo time();?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>





    
</head>
<body>

<script>
        $(document).ready(function(){
            $("#hamburger").click(function(){
                $("#slidedown").fadeIn(300);
            });
            $("#close").click(function(){
                $("#slidedown").fadeOut(300);
            });
        });
    </script>
    
    <div id="navpc">
        <div class="logosection">
            <img src="logo.png">
            <p>EduFlex</p>
        </div>
        
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Courses</a></li>
            <li><a href="">About</a></li>
            <li><a href=""><button class="buttons">Register</button></a></li>
        </ul>
    </div>

    <div id="navmobile">
        <div class="logosection">
            <img src="logo.png">
            <p>EduFlex</p>
        </div>

        <ion-icon name="menu-outline" id="hamburger"></ion-icon>
    </div>

    <div id="slidedown">
    <div id="navmobile">
        <div class="logosection">
            <img src="logo.png">
            <p>EduFlex</p>
        </div>
        
        <ion-icon name="close-outline" id="close"></ion-icon>
    </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Courses</a></li>
            <li><a href="">About</a></li>
            <li><a href=""><button class="buttons">Register</button></a></li>
        </ul>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <center><p id="admheader">Welcome admin!</p></center>






    <table>
            <tr>
                <td>Id</td>
                <td> Name</td>
                <td>Surname</td>
                <td>Password</td>
                <td>Email</td>
                <td>Birthday</td>
            </tr>
            <?php
                $con =mysqli_connect('localhost','root','','eduflex');
                    mysqli_select_db($con,'eduflex');
                
                $select = "SELECT * FROM registration;";
                
                $query = mysqli_query($con,$select);
                
                while($row = mysqli_fetch_array($query))
                {
                    $id = $row['id'];
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];
                    $password = $row['password'];
                    $email = $row['email'];
                    $birthday = $row['birthday'];
                    $gender=$row['gender'];
                    $course=$row['course'];
                    $password=md5($password);
                    
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $firstName; ?></td>
                <td><?php echo $lastName; ?></td>
                <td><?php echo $password; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $birthday; ?></td>
             
                <td><a href="admupdate.php?update=<?php echo $id; ?>"><input type="submit" id="updatebtn" value="Update"></a></td>
                <td><a href="admdelete.php?delete=<?php echo $id; ?>"><input type="submit" id="deletebtn" value="Delete"></a></td>
            </tr>
              <?php  } ?>
            
        </table>

        <div id="footer">
    &copy;2023-<?php echo date("Y")  ?><p class="rightsreserved">All rights reserved</p>
    </div>
</body>
</html>