<?php
session_start(); 
	
	$felhasznalo = $_POST['felhasznalo'];
	$jelszo1 = $_POST['jelszo1'];
	$jelszo2 = $_POST['jelszo2'];
	$email = $_POST['email'];
	
	$host = "mysql.hostinger.hu";
	$user = "u389891681_write";
	$pass = "fres2546";
	$db  = "u389891681_write";
	$email = $_POST['email'];
	


	
	$kapcsolat = mysql_connect("$host", "$user", "$pass")or die ("Hiba");
	mysql_select_db($db, $kapcsolat) or die ("sikeretelen kapcsol�d�s");
	
	if(empty($felhasznalo))
	{
	header("Location:regisztracio.php?felh_hiba=1");
	}
	
	if(empty($jelszo1))
	{
	header("Location:regisztracio.php?jelszo1_hiba=1");
	}
	
	if(empty($jelszo2))
	{
	header("Location:regisztracio.php?jelszo2_hiba=1");
	}
	
	if(empty($email))
	{
	header("Location:regisztracio.php?email_hiba=1");
	}
	
	
	if($jelszo1 != $jelszo2)
	{
	header("Location:regisztracio.php?nem_egyeznek=1");
	}
	
	
	$sql = "INSERT INTO probaphpmysql (felhnev, jelszo, email, aktivacio) VALUES ('$felhasznalo', '$jelszo1', '$email', 'Nem')";
	
	$eredmeny = mysql_query($sql) or die ("Lek�rdez�si hiba... De ne agg�dj a regisztr�ci�d �rv�nyes de m�g nem aktiv�lt...");
	
	
	//v�letlen karaktert�mb gener�l�sa php-vel
	
   function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;


   }


   $c=generateRandomString();
	
	
	
	$_SESSION['kod'] = $c;
	$_SESSION['felh']=$felhasznalo;
	
	

	
	
	print "Sikeresen regisztr�lt�l az oldalunkra! <br /> Az e-mail c�medre k�ld�k az aktiv�l� linket: $email";
	$headers = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/plain; charset=iso-8859-2";
	$headers[] = "Ha v�laszolni akrasz (ne tedd)akk ide: <support@writelibrary.hu>";

	mail($email, Regisztr�ci�,"Felhaszn�l�n�v: $felhasznalo , a jelszavad pedig: $jelszo1 , az aktiv�l� link pedig: http://writelibrary.tk/aktivalo_link.php?check=$c", implode("\r\n", $headers));

	

mysql_close($kapcsolat);


?>