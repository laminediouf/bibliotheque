<?php
include("connexion.php");
$reqi="SELECT * FROM user ";
$resultati=mysql_query($reqi);

// VERIFICATION
if (isset($_POST["bouton"]) && isset($_POST["profil"])) {

   include("connexion.php");
   // on teste si une entrée de la base contient ce couple login / pass/profil
   $login=$_POST['login'];
   $pass=$_POST['pass'];
   $profil=$_POST['profil'];
   if ($login&&$pass&&$profil) {

	$sql = "SELECT * FROM user WHERE login='$login' and passeword='$pass' and profil='administrateur' ";
	echo"voici votre requete".$sql;
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	
	
    $sql1 = "SELECT * FROM user WHERE login='$login' and passeword='$pass' and profil='utilisateur' ";
	echo"voici votre requete".$sql1;
	$req1 = mysql_query($sql1) or die('Erreur SQL !<br />'.$sql1.'<br />'.mysql_error());


	// si on obtient une réponse, alors l'utilisateur est un membre
if(mysql_num_rows($req)==1)
     {
		session_start();
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['profil'] = $_POST['profil'];
		$_SESSION['pass'] = $_POST['pass'];
		header('Location: menu.php');
		exit();
	}
	// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
	elseif (mysql_num_rows($req) == 0) {
		$erreur = 'Compte non reconnu.';
	}
	// sinon, alors la, il y a un gros problème :)
	else {
		$erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	}
		// si on obtient une réponse, alors l'utilisateur est un membre
if(mysql_num_rows($req1)==1)
     {
		session_start();
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['profil'] = $_POST['profil'];
		$_SESSION['pass'] = $_POST['pass'];
		header('Location: menutilisa.php');
		exit();
	}
	// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
	elseif (mysql_num_rows($req1) == 0) {
		$erreur = 'Compte non reconnu.';
	}
	// sinon, alors la, il y a un gros problème :)
	else {
		$erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
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

<div class="image"> <img src="vision.jpg" alt="vision"  style="width:1000px;height:280px;max-width:200%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"> </div>
<div class="auth">
<form method='post' action="index.php" >
<fieldset>
<lengend><h1>AUTHENTIFICATION</h1></legend>
	 <h1> login:</h1>
	<input type="text" name="login"><br/>
	 <h1>password:</h1>
	<input type="password" name="pass"></br>
    <h1> Profil:</h1>
	<select name="profil">
                 <?php while($recup=mysql_fetch_array($resultati)){ ?>
				 <option value="<?php echo $recup['profil']; ?>"><?php echo $recup['profil']; ?>
				 </option>
				 <?php } ?>
				 </select>
				 <br/><br/><br/>
	<input type="submit" value="Se connecter" name="bouton">
                <br/><br/><br/>
				 <br/><br/><br/>
				 
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</fieldset>
</form>

</div>

</body>
</html>
