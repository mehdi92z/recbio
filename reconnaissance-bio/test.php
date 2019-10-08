<?php
require 'image.compare.class.php';
include 'pdo.php';
$class = new compareImages;
$fichier=$_FILES['fichier']['tmp_name'];
    $info=$database->query("SELECT * FROM image ");
    $score = 100 ;
         while ($row = $info->fetch()) {
         	$tmp= $class->compare($fichier,$row['repertoire']);

    	if ($score>$tmp) {
    		echo $tmp.'<br>';
    		$score=$tmp;
    		$nom = $row['nom'];
    	# code...
    	}

	}
	if ($score<11) {
		echo "cette personne exist dans la base de donnee sont nom est : ".$nom;
	}else{
		echo "cette personne n'exist pas";
	}

//echo $score;