<link rel="stylesheet" type="text/css" href="NewWorldphp.css">
<div class="menu">
<?php
if (isset($_GET['Savoir faire local'])) {
	$nom=$_GET['Savoir faire local']
}
if (isset($_GET['Réduire les transports'])) {
	$nom=$_GET['Réduire les transports']
}
if (isset($_GET['Produits frais'])) {
	$nom=$_GET['Produits frais']
}
if (isset($_GET['Qualité'])) {
	$nom=$_GET['Qualité']
}
echo "Vous êtes sur la page $nom";
?>
</div>

