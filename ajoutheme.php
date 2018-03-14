<?php
include("connexion.php");
$req="SELECT * FROM theme";
$resultat=mysql_query($req);
//requete d'ajout
if(isset($_POST['envoi'])) {
$reqi="INSERT INTO theme SET ID='".$_POST['ID']."',nom_theme='".$_POST['nomthem']."',contenue='".$_POST['contenu']."'";
$resultati=mysql_query($reqi);
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
 <form method="post" enctype="multipart/form-data" action="ajoutheme.php">
 <fieldset>
  <h1> AJOUT D'UN THEME </h1>
  <br /> <br />
  <label>ID </label><input type="text" name="ID" required="true" /><br /> <br />
   <label> NOM THEME </label><input type="text" name="nomthem" required="true"  /><br /> <br />
   <label>CONTENU </label><input type="text" name="contenu" required="true"/><br /> <br />
    <input type="submit" name="envoi" value="ENVOYER" /> <br /> <br />
   <input type="reset" name="annul" value="ANNULER" /> <br /> <br />
   <input type="button" value="RETOUR" onclick="self.history.back();"/>
    </fieldset>
   </form>
   </div>
     <?php include("pied.php") ?>


</body>
</html>
