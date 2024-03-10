<?php
session_start();
session_unset();
if(!session_is_registered(nev)){header("location:index2.php");}
?>