<html> 
<head>
<body style="background: linear-gradient(to bottom, #a6a6a6 0%, #204060 100%")>
<style>
.button {
	background-color: #2eb8b8;
	border: none;
	color: white;
	text-align: center;
	display: inline-block;
	height: 50px;
	width: 500px;
	font-size: 16px;
	border-radius: 5px;
	display: block;	
	transition-duration: 0.4s;	
}

.button:hover {
	background-color: #1f7a7a;	
}

.button1 {
	margin-bottom: 25px;
}

#wholePage {
	width: 100%;
	display: flex;
	margin-top: 10%;
	justify-content: center;
}

img.one {
	display: block;
	margin-left: auto;
	margin-right: auto;
	height: auto;
	width: 500px;
}

img.two {
	display: block;
	margin-left: auto;
	margin-right: auto;
	height: auto;
	width: 300px;
}

</style>
<div id="wholePage"> 

<form method="post">
	<button name="on" class="button button1">Light On</button>
	<button name="off" class="button button2">Light Off</button>
</form>
</div>

<img class="one" src="raspi.png">
<img class="two" src="git.png">

<?php	
	
	if (isset($_POST['on']))
	{
		exec("sudo python /var/www/html/RelayOn.py");
	}
	if (isset($_POST['off']))
	{
		exec("sudo python /var/www/html/RelayOff.py");
	}
?>

</body>
</head>
</html>
