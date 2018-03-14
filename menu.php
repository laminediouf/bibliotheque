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
<h1> BIENVENUE AU BIBLIOTHEQUE DE L'AVENIR DE LA JEUNESSE </h1> 
<div class="image"> <img src="LIRE.jpg" alt="vision"  style="width:1000px;height:1000px;max-width:200%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"> </div>
<p> Avec l'avenement de la nouvelle technologie le monde est informatise </p>
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