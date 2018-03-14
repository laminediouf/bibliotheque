<?php
include("connexion.php");
if (isset($_GET['nomlivre'])){
$reqr="SELECT * FROM livre WHERE nomlivre='".$_GET['nomlivre']."'";
$resultatr=mysql_query($reqr);
$recupr=mysql_fetch_array($resultatr);
}
if (isset($_POST['bouton'])){
$reqmodiflivre="UPDATE livre SET auteur='".$_POST['aut']."',prix='".$_POST['prix']."',date_edition='".$_POST['datedi']."' WHERE nomlivre='".$_POST['nomliv']."'";
$resultatmodiflivre=mysql_query($reqmodiflivre);
header("location:livre.php");
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
 <form method="post"  action="modiflivre.php">
 <fieldset>
 <caption> <h3> MODIFICATION </h3> </caption>
  <label> NOM LIVRE </label> 
  <input type="hidden" name="nomliv" value="<?php echo $recupr['nomlivre'];?>"/><?php echo $recupr['nomlivre'];?> <br /><br />
   <label> AUTEUR </label>
   <input type="text" name="aut" value="<?php echo $recupr['auteur'];?>" /> <br /><br />
   <label> PRIX </label><br />
   <input type="text" name="prix" value="<?php echo $recupr['prix'];?> "/> <br /><br />
  <label> DATE EDITION </label>
  <input type="text" name="datedi" value="<?php echo $recupr['date_edition'];?> "/> <br /><br />
  <input type="submit" name="bouton" value="MODIFIER" /><br /> <br />
    <input type="button" value="RETOUR" onclick="self.history.back();"/>
</fieldset>
  </form>
  </div>
   <?php include("pied.php") ?>
</body>

</html>
