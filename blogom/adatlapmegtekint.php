<?php
session_start();
if(!session_is_registered(nev)){header("location:blog.php");}
else{	
	$nev = $_POST['szerzo'];
	$host = "mysql.hostinger.hu";
	$user = "u389891681_write";
	$pass = "fres2546";
	$db  = "u389891681_write";
	


	
	$kapcsolat = mysql_connect("$host", "$user", "$pass")or die ("Hiba");
	mysql_select_db($db, $kapcsolat) or die ("sikeretelen kapcsolÃ³dÃ¡s");
	$adat=mysql_query("SELECT probaphpmysql.kepeleres,probaphpmysql.aktivacio,probaphpmysql.email,probaphpmysql.felhnev FROM probaphpmysql WHERE felhnev='$nev'");
	$adatom=mysql_fetch_assoc($adat);
	print("<img src='".$adatom["kepeleres"]."' />"."<br/>");
	print("Felhasználóneve: ".$adatom["felhnev"]."<br/>");
	print("Email címe: ".$adatom["email"]."<br/>"); 
	print("Aktivációja: ".$adatom["aktivacio"]."<br/>");
	 



}
?>
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