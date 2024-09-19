<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="login.css?v=<?php echo time();?>">
    <link rel="icon" href="logo.png">
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
            <li><a href="#intro">Home</a></li>
            <li><a href="">Courses</a></li>
            <li><a href="">About</a></li>
            <li><a href="#form"><button class="buttons">Register</button></a></li>
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

<div id="filllogin"><p id="header">Fill the form with your information and login to your account</p></div>
<div id="login">    
<img id="loginbck" src="loginbck.jpg">



<form method="post" id="loginform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
Email:<input type="text"class="inputs" placeholder="Write your email here"  name="Email"><br><br>
Password:<input type="password" class="inputs" name="Password" placeholder="Write your password here"><br><br>

<div id="buttonatlogin"><input type="submit" class="buttons"  name="login" value="Log in"><br><br>
<input type="reset" class="buttons" id="resetbutton"  name="reset" value="Cancel">
<a id="signuplink" href="index.php">Not registered yet?Register now!</a>
</div>




</form>
    </div>

<?php
    $connect=mysqli_connect('localhost','root','','eduflex');
        mysqli_select_db($connect,'eduflex');

        if(isset($_POST['login']))
        {
           
            $password=$_POST['Password'];
            $email=$_POST['Email'];
            $password=md5($password);
                   
            $login = "SELECT * FROM registration WHERE password='$password' and email='$email'";
                   
            $con=mysqli_query($connect, $login);
            $roli=mysqli_fetch_assoc($con);

                    if(mysqli_num_rows($con)>0)
                    {
                        if($roli['roli']==0)
                        {
                            $_SESSION['Email']=$email;
                            
                            echo "<script>
                            alert('Login successful');
                            </script>";
                            echo "<script>window.open('user.php','_self');</script>";
                        }
                        elseif($roli['roli']==1)
                        {
                            $_SESSION['Email']=$email;
                            
                            echo "<script>
                            alert('Login successful');
                            </script>";
                            echo "<script>window.open('admin.php','_self');</script>";
                        }
                         
                        elseif($roli['roli']==2)
                        {
                            $_SESSION['Email']=$email;
                            
                            echo "<script>
                            alert('Login successful');
                            </script>";
                            echo "<script>window.open('teachers.php','_self');</script>";
                        }

                    }
                    elseif(empty($password)||empty($email))
                    {
                        echo "<script>alert('Njera nga fushat jane te zbrazeta');</script>";
                    }
                    
                    else
                    {
                        echo "<script>
                        alert('Username ose Password jane gabim!');
                        </script>";
                    }
                
        } 
               
?>

<div id="footer">
    &copy;2023-<?php echo date("Y")  ?><p class="rightsreserved">All rights reserved</p>
    </div>
</body>
</html>










