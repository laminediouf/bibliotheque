<?php
session_start();
include("connexion.php");
if(isset($_SESSION['login']) and isset($_SESSION['pass']) and isset($_SESSION['profil']))
{
$req="SELECT nomlivre FROM livre";
$resultat=mysql_query($req);
//requete de suppression
if (isset($_GET['supp'])){
$reqs="DELETE FROM livre WHERE nomlivre='".$_GET['nomlivre']."'";
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
     <h3> REPERTOIRE DE LIVRE </h3>
<tr>
  <th>NOM DES LIVRES</th>
  <th>VOIR LIVRE</th> 
  <th>SUPRIMER</th>
  <th>MODIFIER</th>
 </th>
</tr>
<?php while($recup=mysql_fetch_array($resultat)){?>
<tr>
<td> <?php echo $recup['nomlivre'];?> </td> 
<td> <a href="fichelivre.php?nomlivre=<?php echo $recup['nomlivre'];?>">Voir</a></td>
<td> <a href="livre.php?nomlivre=<?php echo $recup['nomlivre'];?>&amp;supp=ok">Supprimer</a></td>
<td> <a href="modiflivre.php?nomlivre=<?php echo $recup['nomlivre'];?>"> modifier </a></td>
</tr>
<?php } ?>
  <th><a href="ajoutlivre.php">Ajout d'un livre </a>

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