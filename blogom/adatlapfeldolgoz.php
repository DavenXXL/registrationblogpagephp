<?php
session_start(); 
	
	$passregi1 = $_POST['passregi'];
	$passregi2 = $_POST['passregi2'];
	$ujjelszo1 = $_POST['passuj'];
	$ujjelszo2 = $_POST['passuj2'];
	
	$host = "mysql.hostinger.hu";
	$user = "u389891681_write";
	$pass = "fres2546";
	$db  = "u389891681_write";
	$email = $_POST['email'];
	$username = $_SESSION["username"];



	
	$kapcsolat = mysql_connect("$host", "$user", "$pass")or die ("Hiba");
	mysql_select_db($db, $kapcsolat) or die ("sikeretelen kapcsolÃ³dÃ¡s");
	$adat=mysql_query("SELECT jelszo,felhnev  FROM probaphpmysql WHERE felhnev='$username' ");
	$adatom=mysql_fetch_assoc($adat);
	$jelszo = $adatom["jelszo"];
	if(empty($passregi1))
	{
	header("Location:adatlapszerkeszt.php?regipass_hiba=1");
	}
	if($passregi1 != $jelszo)
	{
	header("Location:adatlapszerkeszt.php?regipassnem_hiba=1");
	}
	if(empty($ujjelszo1))
	{
	header("Location:adatlapszerkeszt.php?ujpass_hiba=1");
	}
	if($ujjelszo1 != $ujjelszo2)
	{
	header("Location:adatlapszerkeszt.php?ujpassnem_hiba=1");
	}
	
	$sql = "UPDATE probaphpmysql SET jelszo='$ujjelszo1' WHERE felhnev='$username' ";
	$eredmeny = mysql_query($sql) or die ("Lekérdezési hiba... De ne aggódj a módosítasaid érvényesek!");
	
	print("Sikeres módosítás!");
	
?>