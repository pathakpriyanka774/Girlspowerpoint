<?php
$connect=mysqli_connect("localhost","root","","gymdb") or die("Data base could not connected");
if(isset($_POST['submit']))
{	
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$insert = "insert into gymdata values('$_POST[fullname]','$_POST[email]','$_POST[password]')";
	$query = mysqli_query($connect,$insert) or die("Query could not executed".mysqli_error($connect).$query);
	if($query)
	{
		echo "Signup successfully!!!";
		header("location:girlspowerpoint.php");
	}
}




?>