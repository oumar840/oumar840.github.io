<?php
require_once("securisation.php"); 
require_once("connexiondb.php");
$idUser=isset($_GET['idUser'])?$_GET['idUser']:0;

$requeteUser="SELECT * FROM utilisateurs where idUser=$idUser";
$resultatUser=$pdo->query($requeteUser);
$user=$resultatUser->fetch();

$login=$user['login'];
$email=$user['email'];
$role=strtoupper($user['role']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/zey.css">     
	<title>Edition d'un utilisateur </title>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container" style="margin-top: 60px";>

<div class="panel panel-success ">
<div class="panel-heading">Modification d'un utilisateur:</div>
<div class="panel-body">
	<form method="post" action="updateUser.php" class="form">
		<div class="form-group">
		<label for="idUser">id de l'utilisateur:<?php echo $idUser ?></label>
		<input type="hidden" name="idUser"  class="form-control" 
		value="<?php echo $idUser?>" />
		</div>
		<div class="form-group">
		<label for="login">Login:</label>
		<input type="text" name="login" placeholder="Votre Login " class="form-control"
		 value="<?php echo $login?>"/>
		</div>
		<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" placeholder="Votre Email " class="form-control"
		 value="<?php echo $email?>"/>
	    </div>
	    <div class="form-group">
		<select name="role" class="form-control">
			     <option value="ADMIN"<?php if($role=="ADMIN") echo "selected" ?>> Administrateur</option>
			     <option value="VISITEUR"<?php if($role=="VISITEUR") echo "selected" ?>>Visiteur</option>
		</select>
	    </div>		
		<button type="submit" class="btn btn-primary">
		 <span class="glyphicon glyphicon-save"></span>
		  Enregistrer
		</button>
		&nbsp;&nbsp;
    <a href="modifierpwd.php?idUser=<?php echo $idUser?>">Changer le mot de passe</a>
	</form>
</div>	
</div>
</div>
</body>
</html>