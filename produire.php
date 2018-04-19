<!DOCTYPE html>
<html>
<head>
	<title>NewWorld Company prod</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="fournitureprod1.css">
</head>
<body>
<div class="header">
	<a class="deconnexion" href="deconnexion.php">
		Deconnexion
	</a>
</div>
<div class="bandeau">
	<a class="NW">NW</a>
		<ul id="menu-demo2" >
			<li>
				<a href="acheter.php" >Acheter</a>
				<ul >
					<li><a href="acheter.php" name="Acheter1">Acheter1</a></li>
					<li><a href="acheter.php" name="Acheter1">Acheter2</a></li>
					<li><a href="acheter.php" name="Acheter3">Acheter3</a></li>
				</ul>
			</li>
			<li>
				<a href="produire.php" >Produire</a>
				<ul >
					<li><a href="produire.php" name="Produire1">Produire1</a></li>
					<li><a href="produire.php" name="Produire2">Produire2</a></li>
					<li><a href="produire.php" name="Produire3">Produire3</a></li>
				</ul>
			</li>
			<li>
				<a href="distribuer.php" >Distribuer</a>
				<ul >
					<li><a href="distribuer.php" name="Distribuer1">Distribuer1</a></li>
					<li><a href="distribuer.php" name="Distribuer2">Distribuer2</a></li>
					<li><a href="distribuer.php" name="Distribuer3">Distribuer3</a></li>
				</ul>
			</li>

		</ul>
		<form class="formsearch">
			<input class="recherche" type="search" name="Recherche" placeholder="Recherche..." size="20" maxlength="20"/>	
			<input class="loupe" type="submit" value=""/>
		</form>
</div>
	<?php 
		echo '
		<div>
		<select name="liste" class="listeder">
			<option value="Rien">Rien</option>
			<optgroup label="Fruit">
				<option value="Abricot">Abricot</option>
				<option value="Kiwi">Kiwi</option>
				<option value="Pomme">Pomme</option>
			</optgroup>
			<optgroup label="Legumes/Racines">
				<option value="Carotte">Carotte</option>
				<option value="Courgette">Courgette</option>
				<option value="Pomme de terre">Pomme de terre</option>
			</optgroup>
		</select> 
		</div>';
	?>
</body>
</html>

