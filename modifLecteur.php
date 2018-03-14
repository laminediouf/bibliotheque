<?php
include("connexion.php");
if (isset($_GET['ID'])){
$reqr="SELECT * FROM lecteur WHERE ID='".$_GET['ID']."'";
$resultatr=mysql_query($reqr);
$recupr=mysql_fetch_array($resultatr);
}
if (isset($_POST['bouton'])){
$reqmodiflecteur="UPDATE lecteur SET ID='".$_POST['ID']."',prenom='".$_POST['prenom']."',nom='".$_POST['nom']."',fonction='".$_POST['fonct']."',pays='".$_POST['pay']."',niveauetude='".$_POST['nivetud']."',adresse='".$_POST['adres']."',ville='".$_POST['vil']."' WHERE ID='".$_POST['ID']."'";
$resultatmodiflecteur=mysql_query($reqmodiflecteur);
header("location:lecteur.php");
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
 <form method="post"  action="modiflecteur.php">
 <fieldset>
 <caption> <h3> MODIFICATION </h3> </caption>
  <label> ID </label> 
  <input type="hidden" name="ID" value="<?php echo $recupr['ID'];?>"/><?php echo $recupr['ID'];?> <br />
   <label> PRENOM </label>
    <input type="text" name="prenom" value="<?php echo $recupr['prenom'];?>" /> <br /><br />
   <label> NOM </label>
    <input type="text" name="nom" value="<?php echo $recupr['nom'];?> "/> <br /><br />
  <label> FONCTION </label><br />
  <input type="text" name="fonct" value="<?php echo $recupr['fonction'];?> "/> <br /><br />
   <label> PAYS </label><br />
   <input type="text" name="pay" value="<?php echo $recupr['pays'];?> "/> <br /><br />
     <label> NIVEAU ETUDE </label><br />
	 <input type="text" name="nivetud" value="<?php echo $recupr['niveauetude'];?> "/> <br /><br />
	   <label> ADRESSE </label><br />
	   <input type="text" name="adres" value="<?php echo $recupr['adresse'];?> "/> <br /><br />
	     <label> VILLE </label>
		 <input type="text" name="vil" value="<?php echo $recupr['ville'];?> "/> <br /><br />
  <input type="submit" name="bouton" value="MODIFIER" /><br /> <br />
    <input type="button" value="RETOUR" onclick="self.history.back();"/>
</fieldset>
  </form>
  </div>
   <?php include("pied.php") ?>
</body>

</html>
