
<?php  if (count($errors) > 0) { ?>
  <div class="error">
  	<?php foreach ($errors as $error) { ?>
  	  <p><?php echo $error ?></p>
     
  	<?php } ?>
    <?php
     echo "<script>alert('Registration not completed!');</script>";
      ?>
  </div>
<?php  } ?>


    
<?php
$empName="";
$empLastName="";
$empEmail="";
$empPassword="";
$empConfirmPassword="";
$empGender="";
$empBirthday="";
$empCourse="";
?>
<?php
// if($_SERVER['REQUEST_METHOD'] == 'POST')
// {
//    $name=secure($_POST['firstName']);
//    if(empty($name))
//    {
//     $empName='Name is required';
//    }
//    else if(!preg_match("/^[a-zA-ZëË]*$/",$name))
//    {
//     $empName="Only letters and white space is allowed";
//    }

//    $lastName=secure($_POST['lastName']);
//    if(empty($lastName))
//    {
//     $empLastName='LastName is required';
//    }
//    else if(!preg_match("/^[a-zA-ZëË]*$/",$name))
//    {
//     $empLastName="Only letters and white space is allowed";
//    }

//    $email=secure($_POST['email']);
//    if(empty($email))
//    {
//     $empEmail='Email is required';
//    }
//    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
//    {
//     $empEmail="Invalid email format";
//    }

//    $password=secure($_POST['password']);
//    if(empty($password))
//    {
//     $empPassword='Password is required';
//    }

//    $confirmPassword=secure($_POST['confirmPassword']);
//    if(empty($confirmPassword))
//    {
//     $empConfirmPassword='ConfirmPassword is required';
//    }
  
//    $gender=secure($_POST['gender']);
//    if(empty($gender))
//    {
//     $empGender='Gender is required';
//    }

//    $birthday=secure($_POST['birthday']);
//    if(empty($birthday))
//    {
//     $empBirthday='Birthday is required';
//    }
//     if(!preg_match("/^[a-zA-ZëË]*$/",$name))
//    {
//     $empname="Only letters and white space is allowed";
//    }

//    $course=secure($_POST['course']);
	
//    if(empty($course))
//    {
// 	$empCourse="Select a course";
//    }

   
//    }
// ?>


<?php
        function secure($x)
{
    $x=htmlspecialchars($x);//Ky funksion mundeson qe karakteret speciale te i konverton ne elemente te HTML ,pasiqe ato karaktere mund te shkaktojne problem ne databaze.
    $x=trim($x);//Ky funksion largon karakteret e panevojshme si(extra space,tab.newline etj) nga te dhenat hyrese te perdoruesit
    $x=stripslashes($x);//Ky funksion largon vleren e "\"(backslash)
    return $x;
}
 ?>
