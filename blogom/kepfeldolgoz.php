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
	mysql_select_db($db, $kapcsolat) or die ("sikeretelen kapcsolÃ„â€šÄ¹â€šdÃ„â€šÃ‹â€¡s");
function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;

	}



   $c=generateRandomString();
	
	

	
	
$types = array("jpg", "jpeg", "gif", "png");    // engedélyezett kiterjesztések
$maxsize = 1048576;                             // maximális méret (1 MB)
$target = "kepek";                       // végleges hely
// feltöltés ellenõrzése
$adat=mysql_query("SELECT jelszo,felhnev  FROM probaphpmysql WHERE felhnev='$username'");
$adatom=mysql_fetch_assoc($adat);
if ($_FILES["kep"]["name"] == "" and $jelszo != $adatom["jelszo"]){
    print "Nem töltöttél fel képet és/vagy hibás a jelszó!";
}
else{
    $upload = true;
    $name = $_FILES["kep"]["name"];
    // kiterjesztés ellenõrzése
    $ext = strtolower(array_pop(explode(".", $name)));
    if (!in_array($ext, $types)){
        print "Csak kép tölthetõ fel!";
        $upload = false;
    }
    // méret ellenõrzése
    if ($_FILES["kep"]["size"] > $maxsize){
        print "Túl nagy a fájl mérete!";
        $upload = false;
    }
	if($upload =true){
	$maxwidth = 200;
	$maxheight = 150;
	$data = getimagesize($_FILES["kep"]["tmp_name"]);
    // fájl elérési útja
	$filename = $_FILES["kep"]["tmp_name"];
	// eredeti kép méretei
	$data = getimagesize($filename);
	// új kép méretei
	$w = 220; $h = 170;
	// egy 220x170 pixeles üres kép létrehozása
	$newimage = imagecreatetruecolor($w, $h);
	// eredeti kép beolvasása
	$oldimage = imagecreatefromjpeg($filename);
	// eredeti kép rámásolása az újra, átméretezve
	imagecopyresampled($newimage, $oldimage, 0, 0, 0, 0, $w, $h, $data[0], $data[1]);
	// kép mentése
	$kepnev ="$target"."/"."$c"."."."$ext";
	imagejpeg($newimage,"$target"."/"."$c"."."."$ext", 100);
	$sql2 = "UPDATE probaphpmysql SET kepeleres='$kepnev' WHERE jelszo='$jelszo' ";
	$eredmeny = mysql_query($sql2) or die ("Lekérdezési hiba... De ne aggódj a módosítasaid érvényesek!");
	print("Sikeres módosítás!");
}
}  