<?php
session_start();
include("connexion.php");
if(isset($_SESSION['login']) and isset($_SESSION['pass']) and isset($_SESSION['profil']))
{
$req="SELECT ID,nom_theme,contenue FROM theme";
$resultat=mysql_query($req);
//requete de suppression
if (isset($_GET['supp'])){
$reqs="DELETE FROM theme WHERE ID='".$_GET['ID']."'";
$resultats=mysql_query($reqs);
}

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
<table border="=1">
   <h3> THEME </h3>
<tr>
  <th>ID</th>
  <th>NOM THEME</th>
  <th>CONTENU</th>  
  <th>SUPRIMER</th>
  <th>MODIFIER</th>
</tr>
<?php while($recup=mysql_fetch_array($resultat)){?>
<tr>
<td> <?php echo $recup['ID'];?> </td> 
<td> <?php echo $recup['nom_theme'];?> </td> 
<td> <?php echo $recup['contenue'];?> </td> 
<td> <a href="Theme.php?ID=<?php echo $recup['ID'];?>&amp;supp=ok">Supprimer</a></td>
<td> <a href="modifTheme.php?ID=<?php echo $recup['ID'];?>"> modifier </a></td>
</tr>
<?php } ?>
  <th> <a href="ajoutheme.php">AJOUT De THEME </a> </th>

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