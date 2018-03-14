<?php
include("connexion.php");
if(isset($_GET['nomlivre'])){
$req="SELECT nomlivre,auteur,prix,date_edition FROM livre WHERE(nomlivre='".$_GET['nomlivre']."')";
$resultat=mysql_query($req);
$recup=mysql_fetch_array($resultat);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" href="mame.css" />
<link rel="stylesheet" href="mame2.css" />
</head>

<body>
<?php include("entete.php") ?>
<?php include("navigation.php") ?>
<div class="corp">
<div class="fiche1">
<table border="=1">
<caption><h3> FICHE D'ENREGISTREMENT </h3></caption>
<tr>
  <th>NOM LIVRE</th>
  <td> <?php echo $recup['nomlivre'];?> </td>
</tr>
<tr>
  <th>AUTEUR</th>
  <td> <?php echo $recup['auteur'];?> </td>
</tr>
<tr>
  <th>PRIX</th>
  <td> <?php echo $recup['prix'];?> </td>
</tr>
<tr>
  <th>DATE EDITION</th>
  <td> <?php echo $recup['date_edition'];?> </td>
</tr>
</table>

<input type="button" value="RETOUR" onclick="self.history.back();"/>
</div>
</div>
<?php include("pied.php") ?>
</body>
</html>