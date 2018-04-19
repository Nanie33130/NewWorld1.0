<link rel="stylesheet" type="text/css" href="NewWorldphp.css">
<div class="menu">
<?php
if (isset($_GET['Acheter'])) {
	$nom=$_GET['Acheter']
}
if (isset($_GET['Acheter1'])) {
	$nom=$_GET['Acheter1']
}
if (isset($_GET['Acheter2'])) {
	$nom=$_GET['Acheter2']
}
if (isset($_GET['Acheter3'])) {
	$nom=$_GET['Acheter3']
}
echo "Vous êtes sur la page $nom";
?>
</div>