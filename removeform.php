<head>
<style type="text/css">


body 	{background-image:url("background3.jpg");
		background-repeat:no-repeat;
		background-size: cover;}
		
p			{Font-size:2em;
              font-family: Papyrus,fantasy;
			  font-weight:bold;
			  color:yellow;
			  text-align:center;
			  padding-top:50px;}
p.one		{text-align:center}
hr		{border: 2px solid black;}
	a{color:white;
	}
</style>
</head>


<?php

	mysql_connect("localhost","root","") or die(mysql_error());
	
	mysql_select_db("restaurant") or die(mysql_error());
	
		
	$name=($_POST['name']);
	mysql_query("Delete from restaurant where Restaurant_name= '$name'") or die(mysql_error());
	
	echo "<p> NOTE:Restaurant ".$name." have been removed !</p>";
	
	echo"<p><a href='remove.php'> Remove  Restaurant </a></p>";
	echo"<p><a href='index.php'> Return to Homepage </a></p>";
	
		
?>

<body>
<footer>
  <p>Coded By: Jeffry Handani 1131121266 , Tan Li Kwan 1122702571 , See Kien Seng 1122702579</p>
  
</footer>
</body>