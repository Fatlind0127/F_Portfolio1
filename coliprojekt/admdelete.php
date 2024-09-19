<?php
$connect=mysqli_connect("localhost","root","","eduflex");
mysqli_select_db($connect,"eduflex");

if(isset($_GET['delete'])){
	
	$delete_id = $_GET['delete'];
	
	$delete_query = "DELETE FROM registration WHERE id='$delete_id' ";
	
	if(mysqli_query($connect, $delete_query)){
	
	echo "<script>alert('Produkti eshte Fshire')</script>";
        
    echo "<script>window.open('viewfile.php','_self');</script>";

	}
}
?>