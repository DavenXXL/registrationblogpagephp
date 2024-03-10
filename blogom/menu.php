<?php
session_start();

$nev = $_SESSION["username"];

if($nev == ""){header("location:infosav.php");}
?>
<html>
	<head>
	<style type="text/css">
	.icon{
		opacity:0.2;
		border-radius:5px;
	}
	.icon:hover{
		opacity:1;
		border-radius:15px;
		background-color:cyan;
	}
	</style>
	</head>
<body bgcolor="#48b61f" text="white">
	<div align="right"><table>
	<tr><td><a target="action" href="kijelentkezes.php"><img class="icon" src="IMG/logout.jpg"/></a></td>
	</tr></table></div>
</body>
</html>	