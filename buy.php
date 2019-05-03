<?php

$conn=mysqli_connect('localhost','root','','sell');
if(!$conn)
{
	echo"<h1>CAN'T CONNECT TO SERVER .....CONTACT DEVELOPER ASAP !";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--METADATA ABOVE-->
	<title>BUY</title>
	<!--Google Fonts-->
	<link rel="stylesheet" type="text/css" href="">
   <link href="https://fonts.googleapis.com/css?family=Acme|Pacifico|Shadows+Into+Light|Ultra" rel="stylesheet">	
   <link href="https://fonts.googleapis.com/css?family=Arimo:700|Black+Ops+One" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body>
	<div class="container">
		<h1 class="text-center text-white bg-dark">BUY YOUR CHOICE </h1>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover text-center">
				<thead class="bg-dark text-white">
					<th>Department</th>
					<th>Branch</th>
					<th>Subject Code</th>
					<th>Subject Name</th>
					<th>Glimpse</th>
				</thead>


				<tbody>
					<?php

					$q="select * from bookdetails";
					$querydisplay=mysqli_query($conn,$q);
					while($result=mysqli_fetch_array($querydisplay)){
						?>
						<tr>
							<td><?php echo $result['department'];?></td>
							<td><?php echo $result['branch'];?></td>
							<td><?php echo $result['subjectcode'];?></td>
							<td><?php echo $result['subjectname'];?></td>
							<td><img src="<?php echo $result['bookpic'];?>" height="70px" width="70px"></td>
						</tr>
						<?php
					}
					?>









				</tbody>
			</table>





	</div>
















































</body>
</html>

	