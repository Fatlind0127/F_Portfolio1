<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update ID</title>
    <link rel="icon" href="logo.png">
    
</head>
<body>

<?php
    $connect = mysqli_connect('localhost','root','','eduflex');
        mysqli_select_db($connect,'eduflex');
        error_reporting();
    if(isset($_POST['update']))
    {

        $newID = $_POST['id'];
        $firstName1 = $_POST['firstName'];
        $lastName1 =$_POST['lastName'];
        $password1 = $_POST['password'];
        $email1 = $_POST['email'];
        $birthday1 = $_POST['birthday'];

    
	  
        if($firstName1=='' || $lastName1=='' || $password1=='')
        {  
            echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
            echo "<script>window.open('viewFile.php','_self');</script>";
		    exit();
        }
        else 
        {	
            $update_query="UPDATE registration SET
                firstName = '$firstName1',
                lastName = '$lastName1',
                password = '$password1',
                email='$email1',
                birthday='birthday1'
                WHERE
                id = '$newID'";
            
            if(mysqli_query($connect, $update_query))
            {
		
			     echo "<script>alert('Changes were saved!')</script>";
                 echo "<script>window.open('viewFile.php','_self');</script>";
			     //header("location: viewFile.php");
		      }
	    }
    
    }
?>




</body>
</html>