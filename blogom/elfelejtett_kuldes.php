<?php
	
$host = "mysql.hostinger.hu";
$user = "u389891681_write";
$pass = "fres2546";
$db  = "u389891681_write";
$email = $_POST['email'];
	
	$kapcsolat = mysql_connect("$host", "$user", "$pass") or die ("Nem sikerült csatlakozni...");
	mysql_select_db ($db, $kapcsolat) or die ("nem sikerült kiválasztani az adatbázist");
	

	
	$sql = "SELECT jelszo FROM probaphpmysql WHERE email='$email'";
	
	$eredmeny = mysql_query($sql) or die(mysql_error());
	
	while($row = mysql_fetch_array($eredmeny))
	{
	$jelszo = $row['jelszo'];
	}
	
	
	if(mysql_affected_rows()>0)
	{
	echo "Sikeresen elküldtük a megadott címre a jelszót!";
	$uzenet  = "Elfelejtett jelszó kérés : e-mail cím: $email, a hozzá tartozó jelszó pedig: $jelszo";
	mail( $email, 'Elfelejtett jelszó', $uzenet);
	}
	else
	{
	echo "Valami baj van...";
	}
	
	
	

mysql_close($kapcsolat);
   






?>