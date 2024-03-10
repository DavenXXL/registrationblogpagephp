<?php

session_start();

$felh = $_SESSION['felh'];
$linkbol = $_GET['check'];
$url = $_SESSION['kod'];


$host = "mysql.hostinger.hu";
$user = "u389891681_write";
$pass = "fres2546";
$db  = "u389891681_write";

	$kapcsolat = mysql_connect("$host", "$user", "$pass") or die ("Nem sikerült csatlakozni...");
	mysql_select_db ($db, $kapcsolat) or die ("nem sikerült kiválasztani az adatbázist");
	

	
	
	
	
	
	
	//összehasonlítás:
	
	if ($linkbol == $url){
	
	
		$sql = "UPDATE probaphpmysql SET aktivacio='Igen' WHERE felhnev='$felh'";
		$eredmeny = mysql_query($sql) or die ('HIBAAAA');
		

   
   
		
		if (mysql_affected_rows()>0)
		{
		echo "Sikeres aktiválás!";
		
		}
	
	
	
	
	
	
	}
	else
	{
	echo "Sajnos nem sikerült a fiókodat aktiválni!";
	}
	
	

	
	
	
	

?>