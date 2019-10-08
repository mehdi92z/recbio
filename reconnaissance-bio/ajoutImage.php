<?php
include 'pdo.php';
if (isset($_POST['ajouter'])) {
	$nom=$_POST['nom'];
	$repertoire_tmp=$_FILES['image']['tmp_name'];
	$repertoire="iris/".$_FILES['image']['name'];
	move_uploaded_file($repertoire_tmp,$repertoire);
	$repertoire = realpath($repertoire);
	$repertoire=addslashes($repertoire);
	$insert=$database->query("INSERT INTO `image`(`repertoire`, `nom`) VALUES ('$repertoire','$nom')");
	echo "vous avez bien ajouter";
	# code...
}