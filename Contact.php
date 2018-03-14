<?php
include("connexion.php");
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
<?php include("navigation2.php") ?>
<div class="corp">
<form method='post' action="index.php" >
<fieldset>
<lengend><caption><h1>VEUILLEZ REMPLIR  CETTE FORMULAIRE</h1></caption></legend>
	 <h1> VOTRE NOM:</h1>
	<input type="text" name="nom"><br/>
	 <h1>ADRESSE E-mail:</h1>
	<input type="text" name="adress"></br>
	  <h1> QUESTION </h1>
   <textarea rows="8" cols="45"></textarea> <br /> <br />
	<input type="submit" value="ENVOYER" name="bouton">
	<input type="button" value="RETOUR" onclick="self.history.back();"/>

</fieldset>
</form>

</div>
<?php include("pied.php") ?>
</body>
</html>
