<head>
<style type="text/css" >

.hiba {
color:red;
font-size:20px;
}


</style>
</head>
<form method="POST" action="reg_feldolgoz.php">


Regisztr�ci� az oldalamra!
<br />
K�v�nt felhaszn�l�n�v: <br />
<input type="text" name="felhasznalo"> <br />
Jelsz�:<br />
<input type="password" name="jelszo1"> <br />
Jelsz� m�g egyszer :<br />
<input type="password" name="jelszo2"> <br />
E-mail c�m<br />
<input type="text" name="email">


<?php


	$felh_hiba = "";
	$jelszo1_hiba = "";
	$jelszo2_hiba = "";
	$email_hiba = "";
	$nem_egyeznek = "";
	
	$felh_hiba = $_GET['felh_hiba'];
	$jelszo1_hiba = $_GET['jelszo1_hiba'];
	$jelszo2_hiba = $_GET['jelszo2_hiba'];
	$email_hiba = $_GET['email_hiba'];
	$nem_egyeznek = $_GET['nem_egyeznek'];
	
	if($felh_hiba == 1)
	{
	echo "<br /><span class='hiba'>Nem adt�l meg felhaszn�l�nevet</span> <br /> ";
	}
	
	if($jelszo1_hiba == 1)
	{
	echo "<br /><span class='hiba'>Nem adt�l meg jelszavat</span> <br />";
	}
	
	
	if($jelszo2_hiba == 1)
	{
	echo "<br /><span class='hiba'>Nem adtad meg a m�sodik jelszavat</span> <br />";
	}
	
	if($email_hiba == 1)
	{
	echo "<br /><span class='hiba'>Nem adt�l meg e-mail c�met</span> <br />";
	}
	
	if($nem_egyeznek == 1)
	{
	echo "<br /><span class='hiba'>A k�t jelsz� nem egyezik!</span> <br />";
	}
	
	
	
	


         
        ?>



<input type="submit" value="Regisztr�ci�">




</form>