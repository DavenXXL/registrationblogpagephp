<?php
session_start();
if(!session_is_registered(nev)){header("location:login.php");}
?>
<html>
	<body>
		<form method="post" action="postfeldolgoz.php">
			<pre>
			<input type="text" name="cim" value="cím">
			<textarea rows="10" cols="50" name="szoveg" >Szöveg</textarea>
			<input type="submit" value="Post" />
			</pre>
		</form>
	</body>
</html>