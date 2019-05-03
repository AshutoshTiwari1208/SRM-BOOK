<?php
	session_start();

	if (!isset($_POST['submitit'])) {
		header('Location: logout.php');
		exit();
	}

  $conn=mysqli_connect("localhost","root","","sell");
  if(!$conn){
  	echo"PROBLEM WITH CONNECTION TO SERVER | CONTACT DEVELOPER";
  }  
  $department=$_POST["dept"];
  $branch=$_POST["branch"];
  $subjectcode=$_POST["subjectcode"];
  $subjectname=$_POST["subjectname"];
  $bookcondition=$_POST["bookcondition"];
  $phnumber=$_POST["phnumber"];
  

  $files=$_FILES["bookpic"];
  $filename=$files["name"];
  $fileerror=$files["error"];
  $filetmp=$files["tmp_name"];

  $fileext=explode('.',$filename);
  $filecheck=strtolower(end($fileext));
  //jpg or png or jpeg....

  $fileextstored=array('png','jpg','jpeg');
  if(in_array($filecheck,$fileextstored)){

  	$destinationfile='loggedinimage/'.$filename;
  	move_uploaded_file($filetmp, $destinationfile);

  	$q="INSERT INTO `bookdetails`( `department`, `branch`, `subjectcode`, `subjectname`, `bookcondition`, `bookpic`, `phnumber`) VALUES ('$department','$branch','$subjectcode','$subjectname','$bookcondition','$destinationfile','$phnumber')";

  	$query=mysqli_query($conn,$q);



  }
  else{
  	echo"<center>| IMAGE-FILE FORMAT WRONG | <hr>"."<a href='sellwarn.php'>Click Here</a> to try again</center>";
  	header("location:sellwarn.php");
  }
  







?>












