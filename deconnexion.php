<?php
session_start();
include ("connectionM.php");
session_unset();
header('Location:index.php');
?> 
 