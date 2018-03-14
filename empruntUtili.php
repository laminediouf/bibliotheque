<?php
include("connexion.php");
$req="SELECT * FROM emprunt";
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
   <h3> LISTE DES EMPRUNTS </h3>
<tr>
  <th>ID</th>
  <th>NOM LECTEUR</th>
  <th>DELAIS</th> 
  <th>DATE RENDU</th>
  <th>TYPE EMPRUNT</th>
  <th>NOMBRE RENDU</th>
  <th>NOM LIVRE</th>
  <th>DATE EMPRUNT</th>
</tr>
<?php while($recup=mysql_fetch_array($resultat)){?>
<tr>
<td> <?php echo $recup['ID'];?> </td> 
<td> <?php echo $recup['nomLecteur'];?> </td> 
<td> <?php echo $recup['delais'];?> </td> 
<td> <?php echo $recup['daterendu'];?> </td> 
<td> <?php echo $recup['typeemprunt'];?> </td> 
<td> <?php echo $recup['nombrerendu'];?> </td> 
<td> <?php echo $recup['nomLivre'];?> </td> 
<td> <?php echo $recup['dateemprunt'];?> </td> 
</tr>
<?php } ?>
<div class="passEm"><a href="PassEmprunt.php" > PASSER UN EMPRUNT </a> </div></table>
</div>
<?php include("pied.php") ?>


</body>
</html>
