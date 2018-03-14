<?php
session_start();
include("connexion.php");
if(isset($_SESSION['login']) and isset($_SESSION['pass']) and isset($_SESSION['profil']))
{
$req="SELECT ID,nom_theme,contenue FROM theme";
$resultat=mysql_query($req);

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
<?php include("navigation2.php") ?>
<div class="corp">
<table border="=1">
   <h3> THEME </h3>
<tr>
  <th>ID</th>
  <th>NOM THEME</th>
  <th>CONTENU</th>  
</tr>
<?php while($recup=mysql_fetch_array($resultat)){?>
<tr>
<td> <?php echo $recup['ID'];?> </td> 
<td> <?php echo $recup['nom_theme'];?> </td> 
<td> <?php echo $recup['contenue'];?> </td> 
</tr>
<?php } ?>

</table>
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