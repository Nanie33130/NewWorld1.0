<link rel="stylesheet" type="text/css" href="NewWorldphp.css">
<div class="menu">
<?php
if (isset($_GET['Les secrets des producteurs'])) {
	$nom=$_GET['Les secrets des producteurs']
}
if (isset($_GET['Le savoir faire des artisants'])) {
	$nom=$_GET['Le savoir faire des artisants']
}
if (isset($_GET['Les recettes de grand-mère'])) {
	$nom=$_GET['Les recettes de grand-mère']
}
if (isset($_GET['La conservation des aliments'])) {
	$nom=$_GET['La conservation des aliments']
}
echo "Vous êtes sur la page $nom";
?>
</div>


