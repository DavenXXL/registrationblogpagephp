<?php
session_start();
if(!session_is_registered(nev)){header("location:reg_index.php");}
	
	$regipass = $_GET['regipass_hiba'];
	$regipassnem = $_GET['regipassnem_hiba'];
	$ujpass = $_GET['ujpass_hiba'];
	$ujpassnem = $_GET['ujpassnem_hiba'];
	
	if($regipass == 1)
	{
	echo "<br /><span class='hiba'>Nem adtad meg a r�gi jelsz�t</span> <br /> ";
	}
	
	if($regipassnem == 1)
	{
	echo "<br /><span class='hiba'>Hib�s r�gi jelsz�</span> <br />";
	}
	if($ujpass == 1)
	{
	echo "<br /><span class='hiba'>Nem adt�l meg �j jelszavat</span> <br />";
	}
	if($ujpassnem == 1)
	{
	echo "<br /><span class='hiba'>Nem eggyeznek az �j jelszavak</span> <br />";
	}
?>
<html>
	<head>
	</head>
		<body>
			<form method="post" action="adatlapfeldolgoz.php">
			<pre>
				<div class="form">jelsz� m�dos�t�sa:<br/>
				R�gi jelsz�:   <input type="password" name="passregi"/>
				�j jelsz� 2x:  <input type="password" name="passuj"/>
				               <input type="password" name="passuj2"/>
				<input type="submit" value="Jelsz� m�do�t�sa">
				<div>
			</form>
			<form method="post" action="kepfeldolgoz.php" enctype="multipart/form-data">
				<div class="form">Profilk�p Be�ll�t�sa vagy M�dos�t�sa:<br/>
				K�p tall�z�sa (max 1MB):<input type="file" name="kep"><br/>
				Jelsz�:                 <input type="password" name="jelszo"><br/>
				<input type="submit" value="K�p be�ll�t�sa"><br/>
				</div>
			</pre>	
			</form>
		</body>
</html>