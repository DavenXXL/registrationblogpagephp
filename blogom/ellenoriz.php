<?php
session_start();

$host = "mysql.hostinger.hu";
$user = "u389891681_write";
$pass = "fres2546";
$db  = "u389891681_write";

$felhnev = $_POST['felhnev'];
$jelszo = $_POST['jelszo'];



mysql_connect ("$host", "$user", "$pass") or die("Nem sikerÃ¼lt a csatlakozÃ¡s");
mysql_select_db("$db") or die("valami baj van");


   $connection = mysql_connect("$host", "$user", "$pass") or die(mysql_error());
   mysql_select_db("$db",$connection) or die(mysql_error());



$sql = "SELECT * FROM probaphpmysql WHERE felhnev='$felhnev' and jelszo='$jelszo' and aktivacio='Igen'";
$eredmeny = mysql_query($sql);

$szamol = mysql_num_rows($eredmeny);

if ($szamol == 1)
{
session_register("nev");
print("<script>top.location.href='http://writelibrary.tk'</script>");
$_SESSION["username"] = $felhnev;
}
else
{
echo "Rossz felhasználónév vagy jelszó, vagy a fiókod nincs aktiválva";

}














?>