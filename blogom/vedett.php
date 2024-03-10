<?php
session_start();
if(session_is_registered(nev)){header("location:homepage.php");}
else{header("location:reg_index.php");}
?>


