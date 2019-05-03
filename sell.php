<?php
	session_start();

$conn=mysqli_connect('localhost','root','','deltaio');
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
	
	<!--Google Fonts-->
   <link href="https://fonts.googleapis.com/css?family=Acme|Pacifico|Shadows+Into+Light|Ultra" rel="stylesheet">	
   <link href="https://fonts.googleapis.com/css?family=Arimo:700|Black+Ops+One" rel="stylesheet">
   <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>SELL-BOOK</title>
	<link rel="stylesheet" type="text/css" href="sellwarn.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

<div class="container">
     <!-- Navbar belongs inside container-->
     <div class="navbar navbar-default" role="navigation" style="background-color: #D3D9D7">
     	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
     		<span class="icon-bar"></span>
     		<span class="icon-bar"></span>
     		<span class="icon-bar"></span>
     	</button>
     	     	<div class="navbar-header">
     		<span class="navbar-brand"><a href="option.php"><u><span style="font-family:'Arimo';">Inclined Scorpio</span></u></a></span>
     	</div>
     	<div class="navbar-collapse collapse">
     	<ul class="nav navbar-nav">
     		<li class="active"><a href="#">Fill Details</a></li>
     		<li><a href="register.php">Help ?</a></li>
     		<li><a href="#">About Us</a></li>
     		<li><a href="logout.php"><i>Logout</i></a></li>
     		
     	</ul>
     </div>
     </div>





<center>
	<div class="hidden-xs hidden-sm ">
	<div style="background-color: #F8F8F8;width: 20em;height: 36.8em;margin-top: 2.2em;border-radius: 20px;box-shadow: 10px 10px grey" name="deltaio">
			<h1 style="color:black;"><div style="font-family: 'Acme' ;color:#69393B;">FILL DETAILS</div></h1>
			<form action="uploadsell.php" method="POST" enctype="multipart/form-data">
				<table >
					<tr style="background-color: #E3E7E6;">
						<td colspan="2" style="padding:0.2em;text-align: center;">Select Department</td>
					</tr>
					<tr style="background-color: #E3E7E6;">
						<td colspan="2"  style="padding:0.3em;">
						 
		                       <select  onchange="myfunc(this.value) " name="dept" style="width:18em;">
			                     <option  hidden >Choose here</option>
			                     <?php
			                     	$q="select * from department";
			                     	$result=mysqli_query($conn,$q);
			                     	while($rows=mysqli_fetch_array($result)){
			                     ?>
			                     	<option value="<?php echo $rows['deptid'];?>"><?php echo $rows['deptname'];?>
					
			                     	</option>
			                     	<?php
			                     	    }
			                     	?>
	    </select>



					</td>
				</tr>
					<tr>
						<td style="padding:1.3em;">

							BRANCH
						</td>
						<td style="padding:1.3em;">
						<select  id="dataget" name="branch">
					<option>Choose here</option>
					<br>
				           </select>


						</td>
					</tr>
					<tr style="background-color: #E3E7E6;">
						<td>
						Subject Code
					    </td>

						<td><input type="text" style="margin-top:0.9em;" name="subjectcode"><br><h6>For faster Reachability</h6>
						</td>
					</tr>
					<tr>
						<td>
						Subject Name
					    </td>

						<td><input type="text" style="margin-top:0.9em;" name="subjectname"><br><h6>check name twice !</h6>
						</td>
					</tr>
					<tr style="background-color: #E3E7E6;">
						<td>
						Condition
					    </td>

						<td><input type="radio" name="bookcondition" value="new" style="margin-left:0.3em;margin-right:0.2em;" id="newcondition"><label for="newcondition">New</label> 
						<input type="radio" name="bookcondition" value="Used" style="margin-left: 0.8em;margin-right: 0.2em;" id="usedcondition"><label for="usedcondition">Used</label> 
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<strong><i>Upload Pics</i></strong><span style="margin-bottom:5em;" ><input type="file" style="margin-bottom: 0.6em;" name="bookpic"></span></td>
					</tr>
					<tr style="background-color: #E3E7E6;">
						<td colspan="2" style="text-align: center;padding:0.5em;">
						Contact Number
					    </td>
					</tr>
					<tr style="background-color: #E3E7E6;">
					    <td colspan="2">
					    	<input type="text" name="phnumber" style="margin-left: 3.5em;"><br><span style="margin-left: 2.4em;">We appreciate Whatsapp Number.</span>
					    </td>
					</tr>



				</table>

			<button type="submit" class="btn btn-primary" name="submitit" style="margin-top:0.6em;background-color: #019BC5;">Submit</button>
		</form>
		</div>

<div class="mywarnings" style="background-color: #F8F8F8;width: 20em;height: 16.8em;margin-top: 2.2em;border-radius: 20px;box-shadow: 10px 10px grey;position:fixed;top:10%;left: 5%;right:0%;">
	<h4><strong>Please Note</strong> 
</h4>
		<h5> 
			<ul>
				<li style="color:black;font-weight: bolder;text-shadow: 0.3px 0.3px black;">Image-file Should be in .png .jpg or .jpeg ONLY.</li><br>
				<li>Single Clear Image is enough for a glance.</li><br>
				<li>Proper Name and Subject Code will help you.</li><br>
				<li>Contact Number is important to contact you.</li>
			</ul>
		</h5>
	</div>
</div>
	</center>
</div>




<!-- FOR SMALLER SCREEN SIZE  ************************************************************* -->


	<div class="visible-xs visible-sm ">
		<span style="position:fixed;top:36%;left:1%;font-family: 'Pacifico';transition: top 0.3s;font-size: 0.7em; " id="shuffleit"><u><a href="#comehere">Fill Form</a></u> </span><i class="fas fa-angle-double-down" style="position:fixed;top:40%;left:4%;"></i>
		<center>
			<div class="mywarnings" style="background-color: #F8F8F8;width: 20em;height: 16.8em;margin-top: 2.2em;border-radius: 20px;box-shadow: 10px 10px grey;top:10%;left: 5%;right:0%;">
	<h4><strong>Please Note</strong> <i class="fas fa-exclamation-circle"></i></i>
</h4>
		<h5> 
			<ul>
				<li style="color:black;font-weight: bolder;text-shadow: 0.3px 0.3px black;">Image-file Should be in .png .jpg or .jpeg ONLY.</li><br>
				<li>Single Clear Image is enough for a glance.</li><br>
				<li>Proper Name and subject code will help you.</li><br>
				<li>Contact Number is important to contact you.</li>
			</ul>
		</h5>
	</div>
		<div style="background-color: #F8F8F8;width: 20em;height: 36.8em;margin-top: 2.2em;border-radius: 20px;box-shadow: 10px 10px grey" name="deltaio">
			<h1 style="color:black;"><div style="font-family: 'Acme' ;color:#69393B;">FILL DETAILS</div></h1>
			<form action="uploadsell.php" method="POST" enctype="multipart/form-data">
				<table >
					<tr style="background-color: #E3E7E6;">
						<td colspan="2" style="padding:0.2em;text-align: center;">Select Department</td>
					</tr>
					<tr style="background-color: #E3E7E6;">
						<td colspan="2"  style="padding:0.3em;">
						 
		                       <select  onchange="myfunc(this.value) " name="dept" style="width:18em;">
			                     <option  hidden >Choose here</option>
			                     <?php
			                     	$q="select * from department";
			                     	$result=mysqli_query($conn,$q);
			                     	while($rows=mysqli_fetch_array($result)){
			                     ?>
			                     	<option value="<?php echo $rows['deptid'];?>"><?php echo $rows['deptname'];?>
					
			                     	</option>
			                     	<?php
			                     	    }
			                     	?>
	    </select>



					</td>
				</tr>
					<tr>
						<td style="padding:1.3em;">

							BRANCH
						</td>
						<td style="padding:1.3em;">
						<select  id="dataget" name="branch">
					<option>Choose here</option>
					<br>
				           </select>


						</td>
					</tr>
					<tr style="background-color: #E3E7E6;">
						<td>
						Subject Code
					    </td>

						<td><input type="text" style="margin-top:0.9em;" name="subjectcode"><br><h6>For faster Reachability</h6>
						</td>
					</tr>
					<tr>
						<td>
						Subject Name
					    </td>

						<td><input type="text" style="margin-top:0.9em;" name="subjectname"><br><h6>check name twice !</h6>
						</td>
					</tr>
					<tr style="background-color: #E3E7E6;">
						<td>
						Condition
					    </td>

						<td><input type="radio" name="bookcondition" value="new" style="margin-left:0.3em;margin-right:0.2em;" id="newcondition"><label for="newcondition">New</label> 
						<input type="radio" name="bookcondition" value="Used" style="margin-left: 0.8em;margin-right: 0.2em;" id="usedcondition"><label for="usedcondition">Used</label> 
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<strong><i>Upload Pics</i></strong><span style="margin-bottom:5em;" ><input type="file" style="margin-bottom: 0.6em;" name="bookpic"></span></td>
					</tr>
					<tr style="background-color: #E3E7E6;">
						<td colspan="2" style="text-align: center;padding:0.5em;">
						Contact Number
					    </td>
					</tr>
					<tr style="background-color: #E3E7E6;">
					    <td colspan="2">
					    	<input type="text" name="phnumber" style="margin-left: 3.5em;"><br><span style="margin-left: 2.4em;">We appreciate Whatsapp Number.</span>
					    </td>
					</tr>



				</table>

			<button type="submit" class="btn btn-primary" name="submitit" style="margin-top:0.6em;background-color: #019BC5;" id="comehere">Submit</button>
		</form>
		</div>


	</center>
    
    </div>






<script type="text/javascript">
	function myfunc(datavalue){
		$.ajax({
			url:'load.php',
			type:'POST',
			data:{datapost:datavalue},

			success : function(result){
				$('#dataget').html(result);

			}


		});

	}
</script>





<script type="text/javascript">
	var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("shuffleit").style.top = "36%";
  } else {
    document.getElementById("shuffleit").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}

</script>


















<!-- jQuery for JAVASCRIPT Bootstrap CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Javscript Bootstrap CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Compiled Plugins Bootstrap CDN-->
</body>
</html>

						