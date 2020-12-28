<?php 
require_once("connexiondb.php");
$prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
$nom=isset($_POST['nom'])?$_POST['nom']:"";
$sexe=isset($_POST['sexe'])?$_POST['sexe']:"M";
$date_naissance=isset($_POST['date_naissance'])?$_POST['date_naissance']:"";
$lieu_naissance=isset($_POST['lieu_naissance'])?$_POST['lieu_naissance']:"";
$description=isset($_POST['description'])?$_POST['description']:"";
$photo=isset($_POST['photo'])?$_POST['photo']:"";
$pere=isset($_POST['pere'])?$_POST['pere']:"";
$mere=isset($_POST['mere'])?$_POST['mere']:"";

$nomPhoto=isset($_FILES['photo']['name'])?$_FILES['photo']['name']:"";
$imageTemp=$_FILES['photo']['tmp_name'];
move_uploaded_file($imageTemp,"../images/".$nomPhoto);

$requete="INSERT INTO personne(prenom,nom,sexe,date_naissance,lieu_naissance,description,photo,pere,mere) values(?,?,?,?,?,?,?,?,?)";
$params=array($prenom,$nom,$sexe,$date_naissance,$lieu_naissance,$description,$photo,$pere,$mere);
$resultat=$pdo->prepare($requete);
$resultat->execute($params);

header('location:personnes.php');
?>