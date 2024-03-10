<?php
session_start();
if(!session_is_registered(nev)){header("location:blog.php");}
?>
<html>
	<head>
		<style type="text/css">
		.postdiv{
			background-color:yellow;
			border-radius:15px;
			 }
		.nev{
			background-color:yellow;
			border-radius:5px;
		}
	
		.gomb{
			background-color:yellow;
			border-radius:5px;
		}	 
		.postdiv:hover{
			background-color:blue;
			color:white;
			}
		.postolas{
			background-color:#00c8a0;
			border-radius:15px;
		}
		
		</style>
	</head>	
	<body>
	<a href="#alja">Ugrás az aljára</a><marquee width="100%" direction="right" >
	<a href="post.php" onclick="window.open('post.php', '', 'width=825, height=625, left=20, top=25, screenX=20, screenY=25, directories=no, menubar=no, toolbar=no'); return false;"><div class="postolas"><font size="20" face="comic sans ms">POSTOLÁS</marquee></font></a></div><br>
	<div class='postdiv'><div align='right'><form method='post' action='adatlapmegtekint.php'><input class='nev' type='text' readonly name='szerzo' value='support'/><input type='submit' class='gomb' value='adatlap'/></form></div><center><h3>Április 14.-ei frissítés</h3><h4></h4><br/>Kééépek feltöltése magadról ;)</h4></center></div><br/>
	<div class='postdiv'><div align='right'><form method='post' action='adatlapmegtekint.php'><input class='nev' type='text' readonly name='szerzo' value='support'/><input type='submit' class='gomb' value='adatlap'/></form></div><center><h3>Impresszum</h3><h4></h4><br/>A szerz&#337;i jog Szabó Dávid Barnabást lilleti!!!</h4></center></div><br/>
	
	<a name="alja"/>