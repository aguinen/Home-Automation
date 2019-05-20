<html> 
<head>
	<script> 	<!--JavaScript that ensures forms are not submitted when refresh event-->
		if (window.history.replaceState) {
			window.history.replaceState( null, null, window.location.href );
		}
	</script>
<body style="background: linear-gradient(to bottom, #a6a6a6 0%, #204060 100%")> <!--- inline CSS for gradient--->
<style>
.button {
	background-color: #36b0b0;
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

.button1 {	<!-- further describes button1-->
	margin-bottom: 5px;
}

#wholePage {	<!--describes the wholePage division-->
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
	<button name="toggle" class="button button1" type="submit" value="change">Toggle Light</button>
</form>
</div>

<img class="one" src="raspi.png">	<!--loads raspi image from local directory-->

<a href="https://github.com/aguinen/Home-Automation">	<!--defines git image as hyperlink to repository-->
	<img class="two" src="git.png">
</a>

<?php	
if ($_POST['toggle'] == "change")	//checks the @_POST array against the accepted value, execute script
{
	exec( "sudo python /var/www/html/relay.py");
}
?>

</body>
</head>
</html>
