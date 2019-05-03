<?php
	$conn=mysqli_connect('localhost','root','','deltaio');

  $val=$_POST['datapost'];

	$q="select * from branch where deptid='$val'";
	$result=mysqli_query($conn,$q);

	while($rows=mysqli_fetch_array($result)){
		?>
	
	<option value="<?php echo $rows['branchname'];?>"><?php echo $rows['branchname'];?></option>
	<?php
		}
    ?>

