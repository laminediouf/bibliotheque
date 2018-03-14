<?php
include("connexion.php");
if(isset($_GET['ID'])){
$req="SELECT ID,dateemprunt,delais,daterendu,typeemprunt,nombrerendu,nomlivre,nomLecteur FROM emprunt WHERE(ID='".$_GET['ID']."')";
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
<table border="=1">
<caption><h3> LISTE DES EMPTRUNTS </h3></caption>
<tr>
  <th>ID</th>
  <td> <?php echo $recup['ID'];?> </td>
</tr>
<tr>
  <th>DATE EMPRUNT</th>
  <td> <?php echo $recup['dateemprunt'];?> </td>
</tr>
<tr>
  <th>DELAIS</th>
  <td> <?php echo $recup['delais'];?> </td>
</tr>
<tr>
  <th>DATE RENDU</th>
  <td> <?php echo $recup['daterendu'];?> </td>
</tr>
<tr>
  <th>TYPE EMPRUNT</th>
  <td> <?php echo $recup['typeemprunt'];?> </td>
</tr>
<tr>
  <th>NOMBRE RENDU</th>
  <td> <?php echo $recup['nombrerendu'];?> </td>
</tr>
<tr>
  <th>NOM LIVRE</th>
  <td> <?php echo $recup['nomlivre'];?> </td>
</tr>
<tr>
  <th>NOM LECTEUR</th>
  <td> <?php echo $recup['nomLecteur'];?> </td>
</tr>
</table>
<input type="button" value="RETOUR" onclick="self.history.back();"/>
</div>
<?php include("pied.php") ?>
</body>
</html>