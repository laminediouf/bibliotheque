<?php
include("connexion.php");
$req="SELECT * FROM livre";
$resultat=mysql_query($req);
//requete d'ajout
if(isset($_POST['envoi'])) {
$reqi="INSERT INTO livre SET nomlivre='".$_POST['nomlivre']."',auteur='".$_POST['aut']."',prix='".$_POST['prix']."',date_edition='".$_POST['datedi']."',ISBXI='".$_POST['isbxi']."',date_publication='".$_POST['datepub']."'";
$resultati=mysql_query($reqi);
header("location:Livre.php");
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
 <form method="post" enctype="multipart/form-data" action="ajoutlivre.php">
 <fieldset>
  <h1> AJOUT D'UN LIVRE </h1>
  <br /> <br />
  <label>NOM LIVRE </label><input type="text" name="nomlivre" required="true" /><br /> <br />
   <label>AUTEUR </label><input type="text" name="aut" required="true"  /><br /> <br />
   <label>PRIX </label><input type="text" name="prix" required="true"/><br /> <br />
   <label>DATE EDITION </label><input type="text" name="datedi" required="true"/><br /> <br />
   <label>ISBXI </label><input type="text" name="isbxi" required="true"/><br /> <br />
   <label>DATE PUBLICATION </label><input type="text" name="datpub" required="true"/><br /> <br />
    <input type="submit" name="envoi" value="ENVOYER" /> <br /> <br />
   <input type="reset" name="annul" value="ANNULER" /> <br /> <br />
   <input type="button" value="RETOUR" onclick="self.history.back();"/>
    </fieldset>
   </form>
   </div>
     <?php include("pied.php") ?>


</body>
</html>
