<?php
session_start();
if(session_is_registered(nev)){header("location:homepage.php");}
?>
<html>
<head>
		<style type="text/css">
		.elkuld_gomb{
			background-color:gray;
			font-size:15px;
			padding:5px;
			border-radius:15px;
					}
		
		.elkuld_gomb:HOVER{
			background-color:orange;
			
						  }
		
		a{
			text-decoration:none;
		
		 }
		
		a:HOVER{
			color:red;
			   }
		
		.felh{
			background-image:url('IMG/felh.png');
			background-repeat:no-repeat;
			padding-left:25px;
			 }
		.felh:hover{
			background-color:yellow;
				   }
		.jelszo:hover{
			background-color:yellow;
					 }	
		
		.jelszo{
			background-image:url('IMG/jelszo.png');
			background-repeat:no-repeat;
			padding-left:25px;
			   }
		</style>
	</head>
<body>
<form method="POST" action="ellenoriz.php">
            <center>
				<div class="eloter">
				Felhasználó név:<br />
				<input type="text" name="felhnev"  class="felh"> <br />
				Jelszó: <br />
				<input type="password" name="jelszo" class="jelszo"> <br /> <br />
				
				<input type="submit" value="Bejelentkezés!" class="elkuld_gomb">
				<br />
				<br />
				<a href="regisztracio.php"> Regisztráció</a> <br />
				<a href="elfelejtett_jelszo.php"> Elfelejtettem a jelszavam :(</a> <br />
			
				</center>
			
			</div>
</body>
</html>
