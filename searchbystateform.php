<html>

<head>
<style type="text/css">


body 	{background-image:url("background3.jpg");
		background-repeat:no-repeat;
		background-size: cover;}
		
p			{Font-size:2em;
              font-family: Papyrus,fantasy;
			  font-weight:bold;
			  text-align:center;
			  color:yellow;
			  padding-top:60;}
p.one		{text-align:center}
hr		{border: 3px solid grey;}
div{text-align:center;}
p.music {text-align:bottom}

	a {color:white;}
	a:hover{background-color:black;}
	p.normal{color:green;}

</head>
</style>
<?php

	mysql_connect("localhost","root","") or die(mysql_error());
	
	mysql_select_db("restaurant") or die(mysql_error());
	
		
	$state=($_POST['state']);
	
	
	$result = mysql_query("SELECT * FROM restaurant where state='$state'") or die(mysql_error());
	
	while($row = mysql_fetch_array($result))
	{
		echo "<p>[NAME]:";
		echo $row['Restaurant_name']."[CUISINE]:   ".$row['Cuisine']."[TEL]:  ".$row['Tel']."[STATE]: ".$row['State'];
		echo "</p>";
	}
	
	echo "<p><a href='index.php'> Back to Homepage</a></p>";
	echo "<p><a href='searchbystate.php'> Search by state</a></p>";
	echo "<p><a href='searchbycuisine.php'> Search by cuisine </a></p>";
	
	
?>
<body>
<footer>
  <p>Coded By: Jeffry Handani 1131121266 , Tan Li Kwan 1122702571 , See Kien Seng 1122702579</p>
  
</footer>
</body>
</html>
