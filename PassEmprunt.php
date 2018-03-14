<?php
include("connexion.php");
$req="SELECT * FROM emprunt";
$resultat=mysql_query($req);
//requete d'ajout
if(isset($_POST['envoi'])) {
$reqi="INSERT INTO emprunt SET ID='".$_POST['ID']."',nomlecteur='".$_POST['nomlecteur']."',nomlivre='".$_POST['nomlivre']."',delais='".$_POST['delais']."',dateemprunt='".$_POST['dateemprunt']."',typeemprunt='".$_POST['typeemprunt']."'";
$resultati=mysql_query($reqi);
header("location:empruntUtili.php");
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
 <form method="post" enctype="multipart/form-data" action="PassEmprunt.php">
 <fieldset>
        <h1> AJOUT D'UN AUTEUR </h1>
		<br /> <br />
  <label>ID </label><br /> <br />
  <input type="text" name="ID" required="true" /><br /> <br />
   <label> TYPE D'EMPRUNT </label>
   <input type="text" name="typeemprunt" required="true"/><br /> <br />
   <label>PRENOM NOM  </label>
   <input type="text" name="nomlecteur" required="true"  /><br /> <br />
   <label>NOM DU LIVRE  </label>
   <input type="text" name="nomlivre" required="true"/><br /> <br />
   <label> DELAIS </label>
   <input type="text" name="delais" required="true"/><br /> <br />
    <label> DATE EMPRUNT </label>
   <input type="text" name="dateemprunt" required="true"/><br /> <br />
   
   <input type="submit" name="envoi" value="ENVOYER" /> <br /> <br />
   <input type="reset" name="annul" value="ANNULER" /> <br /> <br />
   <input type="button" value="RETOUR" onclick="self.history.back();"/>

    </fieldset>
   </form>
</div>
<?php include("pied.php") ?>

</body>
</html>
