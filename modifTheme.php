<?php
include("connexion.php");
if (isset($_GET['ID'])){
$reqr="SELECT * FROM theme WHERE ID='".$_GET['ID']."'";
$resultatr=mysql_query($reqr);
$recupr=mysql_fetch_array($resultatr);
}
if (isset($_POST['bouton'])){
$reqmodiftheme="UPDATE theme SET ID='".$_POST['ID']."',nom_theme='".$_POST['nomthem']."',
contenue='".$_POST['contenu']."' WHERE ID='".$_POST['ID']."'";
$resultatmodiftheme=mysql_query($reqmodiftheme);
header("location:Theme.php");
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
 <form method="post"  action="modifTheme.php">
 <fieldset>
 <caption> <h3> MODIFICATION </h3> </caption>
  <label> ID </label>
  <input type="hidden" name="ID" value="<?php echo $recupr['ID'];?>"/><?php echo $recupr['ID'];?> <br /><br />
   <label> NOM THEME </label> 
   <input type="text" name="nomthem" value="<?php echo $recupr['nom_theme'];?>" /> <br /><br />
   <label> CONTENUE </label> 
   <input type="text" name="contenu" value="<?php echo $recupr['contenue'];?> "/> <br /><br />
  <input type="submit" name="bouton" value="MODIFIER" /><br/> <br/>
    <input type="button" value="RETOUR" onclick="self.history.back();"/>
   </fieldset>
  </form>
  </div>
   <?php include("pied.php") ?>
</body>

</html>
