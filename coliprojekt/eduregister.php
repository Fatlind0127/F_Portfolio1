

<?php
  

    //Inicializimi i variablave
    $firstName="";
    $lastName="";
    $email="";
  
    $errors=array();


    $conn=mysqli_connect("localhost","root","","eduflex");
    mysqli_select_db($conn,'eduflex');

    if(isset($_POST['login']))
    {
        $firstName=mysqli_real_escape_string($conn,$_POST['firstName']);
        $lastName=mysqli_real_escape_string($conn,$_POST['lastName']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $confirmPassword=mysqli_real_escape_string($conn,$_POST['confirmPassword']);
        $gender=mysqli_real_escape_string($conn,$_POST['gender']);
        $birthday=mysqli_real_escape_string($conn,$_POST['birthday']);
        $course=mysqli_real_escape_string($conn,$_POST['course']);

        if(empty($firstName)) {array_push($errors,"Firstname is required");}
        if(empty($lastName)){array_push($errors,"Lastname is required");}
        if(empty($email)){array_push($errors,"Email is required");}
        if(empty($password)){array_push($errors,"Password is required");}
        if(empty($confirmPassword)){array_push($errors,"Confirm your password");}
        if(empty($gender)){array_push($errors,"Select your gender");}
        if(empty($birthday)){array_push($errors,"Select your birthday");}
        if(empty($course)){array_push($errors,"Select your course");}

        if($password!=$confirmPassword)
        {
            array_push($errors,"The two passwords do not match");
        }

        $check_query="Select*from registration where firstName='$firstName' or lastName='$lastName' or email='$email' limit 1 ";
        $result=mysqli_query($conn,$check_query);
        $user=mysqli_fetch_assoc($result);

        if($user)
        { //If user exists
           

            if($user['email']===$email)
            {
                array_push($errors,"Email already exists");
            }
        }

        if(count($errors)==0)
        {
            $password=md5($password);


            $regist="Insert into registration(firstName,lastName,email,password,gender,birthday,course)
            values('$firstName','$lastName','$email','$password','$gender','$birthday','$course')";

            $rows="select * from registration where firstName='$firstName' AND lastName='$lastName'";

            $run=mysqli_query($conn,$rows);

            if(mysqli_num_rows($run)<7)
            {
                mysqli_query($conn,$regist);

                echo "<script>alert('Registration completed successfully!');</script>";
 
            }
            else
            {
                echo "<script>alert('Full users');</script>";
                
            }
            
        }


    }





?>
