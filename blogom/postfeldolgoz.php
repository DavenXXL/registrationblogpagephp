<?php
session_start();
$host = "mysql.hostinger.hu";
$user = "u389891681_write";
$pass = "fres2546";
$db  = "u389891681_write";

$cim = $_POST['cim'];
$text = $_POST['szoveg'];
$username = $_SESSION["username"];



	
$kapcsolat = mysql_connect("$host", "$user", "$pass")or die ("Hiba");
mysql_select_db($db, $kapcsolat) or die ("sikeretelen kapcsol�d�s");
if(empty($cim))
{
		print ("Nincs c�m");
}
if(empty($text))
{
		print ("Nincs sz�veg");
}
	$sql = "INSERT INTO postok (cim,post) VALUES ('$cim','$text')";
	$eredmeny = mysql_query($sql) or die ("Lek�rdez�si hiba... De ne agg�dj a postod �rv�nyes");
	$adat=mysql_query("SELECT felhnev  FROM probaphpmysql WHERE felhnev='$username' ");
	$adatom=mysql_fetch_assoc($adat);	
	
	
	
	
	$fp = fopen("blogfel.php", "a+"); // a+ hozz�f�z�s
	fwrite($fp, "<div class='postdiv'>"."<div align='right'><form method='post' action='adatlapmegtekint.php'>"."<input class='nev' type='text' readonly name='szerzo' value='".$adatom["felhnev"]."'/>"."<input type='submit' class='gomb' value='adatlap'/>"."</form></div><center><h3>".$cim."</h3>"."<h4>"."</h4>"."<br/>".$text."</h4></center></div><br/>");
	fclose($fp);

?>