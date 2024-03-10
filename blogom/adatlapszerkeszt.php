<?php
session_start();
if(!session_is_registered(nev)){header("location:reg_index.php");}
	
	$regipass = $_GET['regipass_hiba'];
	$regipassnem = $_GET['regipassnem_hiba'];
	$ujpass = $_GET['ujpass_hiba'];
	$ujpassnem = $_GET['ujpassnem_hiba'];
	
	if($regipass == 1)
	{
	echo "<br /><span class='hiba'>Nem adtad meg a régi jelszót</span> <br /> ";
	}
	
	if($regipassnem == 1)
	{
	echo "<br /><span class='hiba'>Hibás régi jelszó</span> <br />";
	}
	if($ujpass == 1)
	{
	echo "<br /><span class='hiba'>Nem adtál meg új jelszavat</span> <br />";
	}
	if($ujpassnem == 1)
	{
	echo "<br /><span class='hiba'>Nem eggyeznek az új jelszavak</span> <br />";
	}
?>
<html>
	<head>
	</head>
		<body>
			<form method="post" action="adatlapfeldolgoz.php">
			<pre>
				<div class="form">jelszó módosítása:<br/>
				Régi jelszó:   <input type="password" name="passregi"/>
				Új jelszó 2x:  <input type="password" name="passuj"/>
				               <input type="password" name="passuj2"/>
				<input type="submit" value="Jelszó módoítása">
				<div>
			</form>
			<form method="post" action="kepfeldolgoz.php" enctype="multipart/form-data">
				<div class="form">Profilkép Beállítása vagy Módosítása:<br/>
				Kép tallózása (max 1MB):<input type="file" name="kep"><br/>
				Jelszó:                 <input type="password" name="jelszo"><br/>
				<input type="submit" value="Kép beállítása"><br/>
				</div>
			</pre>	
			</form>
		</body>
</html>