<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Welcome</title>
	<!--Google Fonts-->
   <link href="https://fonts.googleapis.com/css?family=Acme|Pacifico|Shadows+Into+Light|Ultra" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Arimo:700|Black+Ops+One" rel="stylesheet">

   	<!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="option.css">
    <style type="text/css">
    	
    	body{
    		
    	
    	}
    	table {
  border-collapse: separate;
  border-spacing: 50px 0;
  box-shadow: 20px 20px 5px grey;
}

td {
  padding: 10px 0;
}

.downfull{
	width:100%;
	height:1.5em;
	position :fixed;
	top:97%;
	background-color: black;
	padding-left: 33%;
	padding-right:40%;

}
.downfullsmall{
	width:100%;
	height:1.5em;
	font-size: 0.2em;
	position :fixed;
	top:97.5%;
	background-color: black;
	padding-left:0%;
	

}

.icon-bar{
	background-color:grey;
}

html { 
  background: url(optionflower2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

    	 .container{
    	 	position: absolute;
    	 }
    	 .navbar{
    	 	margin-left:10%;
    	 }

    </style>
</head>
<body >
	<div class="imageback">

<!--<span style="font-family: '';font-size: 1.4em;text-shadow: 1px 1px white "><marquee scrollamount="13">One Stop Solution for Buying and Selling Books at Reasonable Prices.</marquee></span>-->

<div class="container">
     <!-- Navbar belongs inside container-->
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">InclinedScorpio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Help?</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Not <?php echo $_SESSION['givenName']?>?  Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

  



<center>
  <div class="hidden-xs">
	<table style="margin-top:5%;">
		<tr>
			<td>
				<a href="sell.php">	<img src="sellbook.jpg" style="height: 15em;width:18em;"></a>
            </td>
            <td>
		        <a href="buy.php"><img src="buybook.png" style="height: 18em;width:19em;"></a>
            </td>
            </tr>
</table>

<div style="font-family: 'Pacifico';font-size:1.4em;margin-top:4em;margin-left:24%;margin-right:20%;" ><center>Books are good company, in sad times and happy times, for books are people – people who have managed to stay alive by hiding between the covers of a book.” – <span style="font-family:'Acme';font-size:0.7em;">E.B. White</span></center></div>


<div class="downfull">License under Developer | <a href="http://www.linkedin.com/in/
	ashutosh-tiwari-sober">Click here</a> to contact Developer</div>
</div>
           

            <div class="visible-xs container2">

            	
            	<table style="margin-top:10%;margin-bottom: 20%;">
		<tr>
			<td>
				<a href="sell.php">	<img src="sellbook.jpg" style="height: 15em;width:18em;"></a>
            </td></tr>
            <tr>
            	<td>
		        <a href="buy.php"><img src="buybook.png" style="height: 18em;width:19em;"></a>
            </td>
            </tr>
</table>

<div style="font-family: 'Pacifico';font-size:1.2em;margin-bottom: 10%;" class="col-lg-6 text-center">Books are good company, in sad times and happy times, for books are people – people who have managed to stay alive by hiding between the covers of a book.” – E.B. White
<hr>     	<li class=""><a href="logout.php">Not <?php echo $_SESSION['givenName']?> ?<u> Logout</u></a></li>

</div>

</div>
<div class="downfullsmall">License under Developer | <a href="http://www.linkedin.com/in/ashutosh-tiwari-sober">Click here</a> to contact Developer</div>
</div>

</center>
</div>












<!-- jQuery for JAVASCRIPT Bootstrap CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Javscript Bootstrap CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Compiled Plugins Bootstrap CDN-->
</body>
</html>