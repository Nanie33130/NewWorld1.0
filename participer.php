<link rel="stylesheet" type="text/css" href="NewWorldphp.css">
<div class="menu">
<?php
if (isset($_GET['Proposer des produits'])) {
	$nom=$_GET['Proposer des produits']
}
if (isset($_GET['Transformer'])) {
	$nom=$_GET['Transformer']
}
if (isset($_GET['Devenir client'])) {
	$nom=$_GET['Devenir client']
}
if (isset($_GET['Distribuer'])) {
	$nom=$_GET['Distribuer']
}
echo "Vous êtes sur la page $nom";
?>
</div>