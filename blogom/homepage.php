<?php
session_start();
if(!session_is_registered(nev)){header("location:reg_index.php");}
else{
	
	$host = "mysql.hostinger.hu";
	$user = "u389891681_write";
	$pass = "fres2546";
	$db  = "u389891681_write";
	$username = $_SESSION["username"];
	
	$kapcsolat = mysql_connect("$host", "$user", "$pass")or die ("Hiba");
	mysql_select_db($db, $kapcsolat) or die ("sikeretelen kapcsol�d�s");
	$adat=mysql_query("SELECT felhnev,email,kepeleres  FROM probaphpmysql WHERE felhnev='$username' ");
	$adatom=mysql_fetch_assoc($adat);
print("<img src='".$adatom["kepeleres"]."'/>"."<br>");	
print("Felhaszn�l�n�v: ".$adatom["felhnev"]."<br>");
print("Email c�m: ".$adatom["email"]."<br>");
mysql_close($kapcsolat);
}	
?>
<html>
<body>
<script language="javascript">
function click(e) {
if (document.all) {
if (event.button == 2 || event.button == 3) { oncontextmenu = "return false"; } }
if (document.layers) {
if (e.which == 3) { oncontextmenu = "return false"; } } }
if (document.layers) { document.captureEvents(Event.MOUSEDOWN); }
document.onmousedown = click;
document.oncontextmenu = new Function("return false;");
</script>
<a href="blog.php" target="blog">Bel�p�s/Friss�t�s</a><br/>
<a href="adatlapszerkeszt.php" target="blog">Adatlap szerkeszt�se</a><br/>
</body>
</html>