<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
	<title>ApertureServers</title>

	<link href="css/styles.css" type="text/css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
		function DownloadingFile( fileName )
		{
			$("#status").text("Downloading " + fileName);
		}
		function SetStatusChanged( status )
		{
			$("#status").text(status);
		}
	</script>
</head>

<body bgcolor="#292929" style="overflow:hidden; cursor: default;">

	<div
		style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;"
		unselectable="on"
		onselectstart="return false;"
		onmousedown="return false;">

		<div id="snowflakeContainer">
			<p class="snowflake">*</p>
		</div>

		<center style="font-size:27px">
			<br><br><img src="img/apertureservers_logo_soon.png"><br><br>
			<span id="status">Retrieving server info...</span><br>
			<div id="countdown" style="font-size:48px"></div>
			<p style="font-size:28px"><font color="#fff">We're planning to launch 4 gmod servers!</font></p>
			<p style="font-size:24px"><font color="#000">Copyright &copy; 2015 ApertureServers All Rights Reserved</font></p>
		</center>
	</div>

	<script src="js/fallingsnow.js"></script>

</body>
</html>