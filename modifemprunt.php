<?php
include("connexion.php");
if (isset($_GET['ID'])){
$reqr="SELECT * FROM emprunt WHERE ID='".$_GET['ID']."'";
$resultatr=mysql_query($reqr);
$recupr=mysql_fetch_array($resultatr);
}
if (isset($_POST['bouton'])){
$reqmodifemprunt="UPDATE emprunt SET ID='".$_POST['ID']."',dateemprunt='".$_POST['datempr']."',delais='".$_POST['delai']."',daterendu='".$_POST['datrend']."',typeeprunt='".$_POST['typempr']."',nombrerendu='".$_POST['nbrendu']."',nomLivre='".$_POST['nomliv']."',nomLecteur='".$_POST['nomlec']."' WHERE ID='".$_POST['ID']."'";
$resultatmodifemprunt=mysql_query($reqmodifemprunt);
header("location:emprunt.php");
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
 <form method="post"  action="modifemprunt.php">
 <fieldset>
 <caption> <h3> MODIFICATION </h3> </caption>
  <label> ID </label> 
  <input type="hidden" name="ID" value="<?php echo $recupr['ID'];?>"/><?php echo $recupr['ID'];?> <br /><br />
   <label> DATE EMPRUNT </label> 
   <input type="text" name="datempr" value="<?php echo $recupr['dateemprunt'];?>" /> <br /><br />
   <label> DELAIS </label> 
   <input type="text" name="delai" value="<?php echo $recupr['delais'];?> "/> <br /><br />
   <label> DATE RENDU </label> 
   <input type="text" name="datrend" value="<?php echo $recupr['daterendu'];?> "/> <br /><br />
   <label> TYPE EMPRUNT </label>
    <input type="text" name="typempr" value="<?php echo $recupr['typeemprunt'];?> "/> <br /><br />
   <label> NOMBRE RENDU </label>
   <input type="text" name="nbrendu" value="<?php echo $recupr['nombrerendu'];?> "/> <br /><br />
   <label> NOM LIVRE </label> 
   <input type="text" name="nomliv" value="<?php echo $recupr['nomLivre'];?> "/> <br /><br />
   <label> NOM LECTEUR </label> 
   <input type="text" name="nomlec" value="<?php echo $recupr['nomLecteur'];?> "/> <br /><br />
  <input type="submit" name="bouton" value="MODIFIER" /><br /> <br />
    <input type="button" value="RETOUR" onclick="self.history.back();"/>
</fieldset>
  </form>
  </div>
   <?php include("pied.php") ?>
</body>

</html>
