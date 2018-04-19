<link rel="stylesheet" type="text/css" href="NewWorldphp.css">
<div class="menu">
<?php
if (isset($_GET['Distribuer'])) {
	$nom=$_GET['Distribuer']
}
if (isset($_GET['Distribuer1'])) {
	$nom=$_GET['Distribuer1']
}
if (isset($_GET['Distribuer2'])) {
	$nom=$_GET['Distribuer2']
}
if (isset($_GET['Distribuer3'])) {
	$nom=$_GET['Distribuer3']
}
echo "Vous êtes sur la page $nom";
?>
</div>