<!DOCTYPE html>
<html lang="en">
<head>
  <title>shelly@brand</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>shelly</h1>
  <p>hosted by Brands synology</p>
</div>

<div align="center">
	<form  method="post">
	    <input type="submit" name="openCloseDoor" value="Tor auf/zu" class="btn btn-primary btn-lg btn-block">
	    <br>
		<br>
		<br>
		<br>
		<br>
		<br> 
	    <input type="submit" name="getStatus" value="Status" class="btn btn-secondary btn-sm">
	</form>

	<?php
		if(array_key_exists('getStatus',$_POST))
		{
			$response = file_get_contents("http://192.168.1.136/relay/0");
			echo date("Y-m-d H:i:s");
			echo ' getStatus ';
			echo $response;
		}
		
		if(array_key_exists('openCloseDoor',$_POST))
		{
			$response = file_get_contents("http://192.168.1.136/relay/0?turn=on");
			$response = file_get_contents("http://192.168.1.136/relay/0?turn=off");
			echo date("Y-m-d H:i:s");
			echo ' openCloseDoor ';
			echo $response;
		}
	?>
</div>
</body>
</html>