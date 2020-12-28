<?php
    session_start();
     if (isset($_SESSION['erreurLogin'])) 
       $erreurLogin=$_SESSION['erreurLogin'];
     else{
     $erreurLogin="";
     }
    session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/zey.css">     
	<title>Se connecter</title>
</head>
<body>

<div class="container col-lg-4 col-lg-offset-4 col-md-6 col-md-3" style="margin-top: 60px";>

<div class="panel panel-success ">
<div class="panel-heading">Se connecter</div>
<div class="panel-body">
	<form method="post" action="seConnecter.php" class="form" >
     <div class="alert alert-danger">
     	<?php echo $erreurLogin ?>
     </div>
     
		<div class="form-group">
		<label for="login">Login:</label>
		<input type="text" name="login" placeholder="Login" class="form-control"/>
		</div>
		<div class="form-group">
		<label for="pwd">Mot de passe:</label>
		<input type="password" name="pwd" placeholder="Mot de passe" class="form-control"/>
		</div>
		<button type="submit" class="btn btn-primary">
		 <span class="glyphicon glyphicon-log-in"></span> Se connecter</button>
         </div>
	</form>
</div>	
</div>
</div>
</body>
</html>