<?php
include("connexion.php");
$req="SELECT * FROM emprunt";
$resultat=mysql_query($req);
//AJOUT
if(isset($_POST['envoi'])) {
$reqi="INSERT INTO emprunt SET ID='".$_POST['ID']."',dateemprunt='".$_POST['datempr']."',delais='".$_POST['delai']."',daterendu='".$_POST['datrend']."',typeeprunt='".$_POST['typempr']."',nombrerendu='".$_POST['nbrendu']."',nomLivre='".$_POST['nomliv']."',nomLecteur='".$_POST['nomlec']."'";
$resultati=mysql_query($reqi);
header("location:Emprunt.php");
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
 <form method="post" enctype="multipart/form-data" action="ajoutemprunt.php">
 <fieldset>
  <h1> AJOUT D'EMPRUNT </h1>
  <br /> <br />
  <label>ID </label><input type="text" name="ID" required="true" /><br /> <br />
   <label> DATE EMPRUNT </label> <input type="text" name="datempr" required="true" /><br /> <br />
   <label> DELAIS </label> <input type="text" name="delai" required="true" /><br /> <br />
   <label> DATE RENDU </label> <input type="text" name="datrend" required="true" /><br /> <br />
   <label> TYPE EMPRUNT </label> <input type="text" name="typempr" required="true" /><br /> <br />
   <label> NOMBRE RENDU </label> <input type="text" name="nbrendu" required="true" /><br /> <br />
   <label> NOM LIVRE </label> <input type="text" name="nomliv" required="true" /><br /> <br />
   <label> NOM LECTEUR </label> <input type="text" name="nomlec" required="true" /><br /> <br />
    <input type="submit" name="envoi" value="ENVOYER" /> <br /> <br />
   <input type="reset" name="annul" value="ANNULER" /> <br /> <br />
   <input type="button" value="RETOUR" onclick="self.history.back();"/>
    </fieldset>
   </form>
   </div>
     <?php include("pied.php") ?>


</body>
</html>
