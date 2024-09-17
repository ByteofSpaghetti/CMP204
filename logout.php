<?php
session_start(); //session start

session_destroy();//destroys session

header("Location: index.php");//redirects to index.php
exit();//exit
?>