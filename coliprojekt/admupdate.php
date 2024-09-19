<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Update </title>
        <link rel="icon" href="logo.png">
        <link rel="stylesheet" href="admupdate.css?v=<?php echo time();?>">
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










    <?php
        $connect=mysqli_connect("localhost","root","","eduflex");
            mysqli_select_db($connect,"eduflex");

        if(isset($_GET['update'])){

            $update_id = $_GET['update'];

            $select = "SELECT * FROM registration WHERE id='$update_id'";
	
            $query = mysqli_query($connect, $select);

        $row=mysqli_fetch_array($query);
	
    ?>
     <form id="form" method="post" action="admupdateID.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                Name:<input type="text" class="input" name="firstName" placeholder="Name" value="<?php echo $row['firstName'];?>"> <br>
                Surname:<input type="text" class="input" name="lastName" placeholder="Surname" value="<?php echo $row['lastName'];?>"><br>
                Password:<input type="password" class="input"  name="password" placeholder="Password" value="<?php echo $row['password'];?>"><br>
                <!-- <input type="password" class="input" name="confirmPassword" placeholder="Confirm your password" value=""><br> -->
                Email:<input type="email" class="input" name="email" placeholder="Write your email" value="<?php echo $row['email'];?>"><br>
                Birthday:<input type="date" class="input" name="birthday" value="<?php echo $row['birthday'];?>"><br>
                Gender:<div id="gender"> Gender:<input type="radio" class="gender" checked="checked" name="gender" <?php if (isset($gender) && $gender=="Femer") echo "checked";?> value="Femer">F<br>
                        <input type="radio" class="gender" name="gender" <?php if (isset($gender) && $gender=="Mashkull") echo "checked";?> value="Mashkull">M</div><br><br>

                Course:<select class="input" name="course" value="<?php echo $row['course'];?>">
                    <option>Math</option>
                    <option>Physics</option>
                    <option>Biology</option>
                    <option>Chemistry</option>
                </select><br>
                <div id="buttons"> <input type="submit" name="update" class="buttons" value="Update"><br>
                <input type="reset" class="buttons" id="reset" value="Cancel">








    <?php }?>  



    </body>
</html>