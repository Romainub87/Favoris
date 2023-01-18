<?php 
$fichier = fopen('Page_ajout.php', 'r+'); 
ftruncate($fichier, 0);
fclose($fichier);
header("Location:index.php");
?>