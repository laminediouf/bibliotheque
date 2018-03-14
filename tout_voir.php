<?php
session_start();
include("connexion.php");
if(isset($_SESSION['login']) and isset($_SESSION['pass']) and isset($_SESSION['profil']))
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" href="mame.css" />
</head>

<body>
<?php include("entete.php") ?>
<?php include("navigation.php") ?>
<div class="corp">
<div class="lect"><a href="lecteur.php">LECTEUR </a> </div>
<div class="liv"><a href="livre.php">LIVRE </a> </div>
<div class="aut"><a href="auteur.php">AUTEUR </a> </div>
<div class="empr"><a href="emprunt.php">EMPRUNT </a> </div>
<div class="them"><a href="theme.php">THEME </a> </div>

</div>
<?php include("pied.php") ?>
</body>
</html>
<?php
}
else
{
 header('Location:index.php');
}
?>