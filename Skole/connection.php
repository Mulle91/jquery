<?php

$host = "localhost";
$user = "root";
$pw = "";
$dbname = "skole";
$con = new mysqli($host, $user, $pw, $dbname);
if($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}
echo "Connected";
?>

<html>

<head>

	<title>julemandens bulevard</title>
	<link rel="stylesheet" type="text/css" href="skoleside.css">
</head>

<body>

	<h1>Tilt skolen</h1>

	<h2>Kurser</h2>
	
	<button id="tilbage">Tilbage</button>
	<button id="frem">Næste</button>

	<script>
		
		function loadDoc() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatecahnge = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("demo").innerHtml = this.responseText;
				}
			};

			xhttp.open("GET", "ajax_info.txt", true);
			xhttp.send();
		}

	</script>

</body>
</html>