<?php
include("connexion.php");
if (isset($_GET['ID'])){
$reqr="SELECT * FROM auteur WHERE ID='".$_GET['ID']."'";
$resultatr=mysql_query($reqr);
$recupr=mysql_fetch_array($resultatr);
}
//REQUETE MENU DEROULANT
$reqm="SELECT * FROM auteur";
$resultatm=mysql_query($reqm);
//REQUETTE DE MODIFICATION
if (isset($_POST['bouton'])){
$reqmodif="UPDATE auteur SET prenom='".$_POST['prenom']."',nom='".$_POST['nom']."',pays='".$_POST['pay']."',datenaissance='".$_POST['datnaiss']."',datedisparu='".$_POST['datdispa']."' WHERE ID='".$_POST['ID']."'";
$resultatmodif=mysql_query($reqmodif);
header("location:auteur.php");
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
 <form method="post"  action="modifauteur.php">
 <fieldset>
 <caption> <h3> MODIFICATION </h3> </caption>
  <label> ID </label>
  <input type="hidden" name="ID" value="<?php echo $recupr['ID'];?>"/><?php echo $recupr['ID'];?> <br /><br />
   <label> PRENOM </label> 
   <input type="text" name="prenom" value="<?php echo $recupr['prenom'];?>" /> <br /><br />
   <label> NOM </label>
   <input type="text" name="nom" value="<?php echo $recupr['nom'];?> "/> <br /><br /><br />
    <label>PAYS </label><br />
   <input type="text" name="pay" value="<?php echo $recupr['pays'];?> "/> <br /><br />
	 <label> DATE NAISSANCE </label>
	  <input type="text" name="datnaiss" value="<?php echo $recupr['datenaissance'];?> "/> <br /><br />
	  <label> DATE DISPARUE </label>
	   <input type="text" name="datdispa" value="<?php echo $recupr['datedisparu'];?> "/> <br /><br />
  <input type="submit" name="bouton" value="MODIFIER" /><br /> <br />
  <input type="button" value="RETOUR" onclick="self.history.back();"/><br /><br />
  </fieldset>
  </form>
  
</div>
  <?php include("pied.php") ?>
</body>

</html>
