<?php
include("connexion.php");
$req="SELECT * FROM auteur";
$resultat=mysql_query($req);
//requete d'ajout
if(isset($_POST['envoi'])) {
$reqi="INSERT INTO auteur SET ID='".$_POST['ID']."',prenom='".$_POST['prenom']."',nom='".$_POST['nom']."',pays='".$_POST['pay']."',datenaissance='".$_POST['datnaiss']."',datedisparu='".$_POST['datdispa']."'";
$resultati=mysql_query($reqi);
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
 <form method="post" enctype="multipart/form-data" action="ajoutauteur.php">
 <fieldset>
        <h1> AJOUT D'UN AUTEUR </h1>
		<br /> <br />
  <label>ID </label><br /> <br />
  <input type="text" name="ID" required="true" /><br /> <br />
   <label>PRENOM </label>
   <input type="text" name="prenom" required="true"  /><br /> <br />
   <label>NOM </label>
   <input type="text" name="nom" required="true"/><br /> <br />
   <label>PAYS </label>
   <input type="text" name="pay" required="true"/><br /> <br />
   <label>DATE DE NAISSANCE </label>
   <input type="text" name="datnaiss" required="true"/><br /> <br />
   <label>DATE DISPARUE </label>
   <input type="text" name="datdisp" required="true"/><br /> <br />
    <input type="submit" name="envoi" value="ENVOYER" /> <br /> <br />
   <input type="reset" name="annul" value="ANNULER" /> <br /> <br />
   <input type="button" value="RETOUR" onclick="self.history.back();"/>

    </fieldset>
   </form>
</div>
<?php include("pied.php") ?>

</body>
</html>
