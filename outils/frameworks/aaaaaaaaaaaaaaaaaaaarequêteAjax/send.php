<?php
$nom = $_POST['nom'];
if($nom){
echo "<b>bonjour</b>  ".$nom;
}else{
	echo "Veuillez remplir le champ";
}
?>