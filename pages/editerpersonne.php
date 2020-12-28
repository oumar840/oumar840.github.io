<?php
require_once("securisation.php"); 
require_once("connexiondb.php");
$idp=isset($_GET['idp'])?$_GET['idp']:0;
$requete="SELECT * FROM personne where idpersonne=$idp";

$resultat=$pdo->query($requete);
$personne=$resultat->fetch();
$prenom=$personne['prenom'];
$nom=$personne['nom'];
$sexe=strtoupper($personne['sexe']);
$date_naissance=$personne['date_naissance'];
$lieu_naissance=$personne['lieu_naissance'];
$description=$personne['description'];
$photo=$personne['photo'];
$pere=$personne['pere'];
$mere=$personne['mere'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/zey.css">     
	<title>Edition d'une personne</title>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container" style="margin-top: 60px";>

<div class="panel panel-success ">
<div class="panel-heading">Modification de la personne:</div>
<div class="panel-body">
	<form method="post" action="updatepersonne.php" class="form" enctype="multipart/form-date">
		<div class="form-group">
		<label for="idpersonne">id de la personne:<?php echo $idpersonne ?></label>
		<input type="hidden" name="idpersonne"  class="form-control" 
		value="<?php echo $idpersonne?>" />
		</div>
		<div class="form-group">
		<label for="prenom">Prénom:</label>
		<input type="text" name="prenom" placeholder="Le prénom" class="form-control" 
		value="<?php echo $prenom?>"/>
		</div>
		<div class="form-group">
		<label for="nom">Nom:</label>
		<input type="text" name="nom" placeholder="Le nom" class="form-control"
		 value="<?php echo $nom?>"/>
		</div>
		<div class="form-group">
		<label for="sexe">Sexe</label>
		<div class="radio">
		<label><input type="radio" name="sexe" value="M"
			<?php if($sexe==="M") echo "checked" ?> checked/> M </label></br>
		<label><input type="radio" name="sexe" value="F"
			<?php if($sexe==="M") echo "checked" ?>/>F </label>
			</div>
	    </div>

				
		<div class="form-group">
		<label for="date_naissance">Date de naissance:</label>
		<input type="text" name="date_naissance" placeholder="La date de naissance" class="form-control" 
		value="<?php echo $date_naissance?>"/>
		</div>
		<div class="form-group">
		<label for="lieu_naissance">Lieu de naissance:</label>
		<input type="text" name="lieu_naissance" placeholder="Le lieu de naissance" class="form-control" 
		value="<?php echo $lieu_naissance?>"/>
		</div>
		<div class="form-group">
		<label for="description">Description:</label>
		<input type="text" name="description" placeholder="La description de la personne" class="form-control"
		value="<?php echo $description?>"/>
		</div>
		<div class="form-group">
		<label for="photo">Photo:</label>
		<input type="file" name="photo" />
		</div>
		<div class="form-group">
		<label for="pere">Son père:</label>
		<input type="text" name="pere" placeholder="père" class="form-control"
		value="<?php echo $pere?>"/>
		</div>
		<label for="mere">Sa mère:</label>
		<input type="text" name="mere" placeholder="mère" class="form-control"
		value="<?php echo $pere?>"/>
		</div>
         <div  class="form-group">
		<button type="submit" class="btn btn-primary">
		 <span class="glyphicon glyphicon-save"></span> Enregistrer</button>
         </div>
	</form>
</div>	
</div>
</div>
</body>
</html>