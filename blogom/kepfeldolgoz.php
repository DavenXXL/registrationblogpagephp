<?php
session_start(); 
	
	$host = "mysql.hostinger.hu";
	$user = "u389891681_write";
	$pass = "fres2546";
	$db  = "u389891681_write";
	$email = $_POST['email'];
	$jelszo = $_POST['jelszo'];
	$username = $_COOKIE["username"];
	
	$kapcsolat = mysql_connect("$host", "$user", "$pass")or die ("Hiba");
	mysql_select_db($db, $kapcsolat) or die ("sikeretelen kapcsolÄ‚Ĺ‚dÄ‚Ë‡s");
function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;

	}



   $c=generateRandomString();
	
	

	
	
$types = array("jpg", "jpeg", "gif", "png");    // enged�lyezett kiterjeszt�sek
$maxsize = 1048576;                             // maxim�lis m�ret (1 MB)
$target = "kepek";                       // v�gleges hely
// felt�lt�s ellen�rz�se
$adat=mysql_query("SELECT jelszo,felhnev  FROM probaphpmysql WHERE felhnev='$username'");
$adatom=mysql_fetch_assoc($adat);
if ($_FILES["kep"]["name"] == "" and $jelszo != $adatom["jelszo"]){
    print "Nem t�lt�tt�l fel k�pet �s/vagy hib�s a jelsz�!";
}
else{
    $upload = true;
    $name = $_FILES["kep"]["name"];
    // kiterjeszt�s ellen�rz�se
    $ext = strtolower(array_pop(explode(".", $name)));
    if (!in_array($ext, $types)){
        print "Csak k�p t�lthet� fel!";
        $upload = false;
    }
    // m�ret ellen�rz�se
    if ($_FILES["kep"]["size"] > $maxsize){
        print "T�l nagy a f�jl m�rete!";
        $upload = false;
    }
	if($upload =true){
	$maxwidth = 200;
	$maxheight = 150;
	$data = getimagesize($_FILES["kep"]["tmp_name"]);
    // f�jl el�r�si �tja
	$filename = $_FILES["kep"]["tmp_name"];
	// eredeti k�p m�retei
	$data = getimagesize($filename);
	// �j k�p m�retei
	$w = 220; $h = 170;
	// egy 220x170 pixeles �res k�p l�trehoz�sa
	$newimage = imagecreatetruecolor($w, $h);
	// eredeti k�p beolvas�sa
	$oldimage = imagecreatefromjpeg($filename);
	// eredeti k�p r�m�sol�sa az �jra, �tm�retezve
	imagecopyresampled($newimage, $oldimage, 0, 0, 0, 0, $w, $h, $data[0], $data[1]);
	// k�p ment�se
	$kepnev ="$target"."/"."$c"."."."$ext";
	imagejpeg($newimage,"$target"."/"."$c"."."."$ext", 100);
	$sql2 = "UPDATE probaphpmysql SET kepeleres='$kepnev' WHERE jelszo='$jelszo' ";
	$eredmeny = mysql_query($sql2) or die ("Lek�rdez�si hiba... De ne agg�dj a m�dos�tasaid �rv�nyesek!");
	print("Sikeres m�dos�t�s!");
}
}  