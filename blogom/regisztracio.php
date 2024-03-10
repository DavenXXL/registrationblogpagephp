<head>
<style type="text/css" >

.hiba {
color:red;
font-size:20px;
}


</style>
</head>
<form method="POST" action="reg_feldolgoz.php">


Regisztráció az oldalamra!
<br />
Kívánt felhasználónév: <br />
<input type="text" name="felhasznalo"> <br />
Jelszó:<br />
<input type="password" name="jelszo1"> <br />
Jelszó még egyszer :<br />
<input type="password" name="jelszo2"> <br />
E-mail cím<br />
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
	echo "<br /><span class='hiba'>Nem adtál meg felhasználónevet</span> <br /> ";
	}
	
	if($jelszo1_hiba == 1)
	{
	echo "<br /><span class='hiba'>Nem adtál meg jelszavat</span> <br />";
	}
	
	
	if($jelszo2_hiba == 1)
	{
	echo "<br /><span class='hiba'>Nem adtad meg a második jelszavat</span> <br />";
	}
	
	if($email_hiba == 1)
	{
	echo "<br /><span class='hiba'>Nem adtál meg e-mail címet</span> <br />";
	}
	
	if($nem_egyeznek == 1)
	{
	echo "<br /><span class='hiba'>A két jelszó nem egyezik!</span> <br />";
	}
	
	
	
	


         
        ?>



<input type="submit" value="Regisztráció">




</form>