<!DOCTYPE html>
<html>
<head>
	<title>NewWorld Company</title>
	<link rel="stylesheet" type="text/css" href="NewWorld.css">	
	<link rel="stylesheet" type="text/css" href="InscrCoNW.css">
	<link rel="stylesheet" type="text/css" href="overlay.css">

	<meta charset="utf-8">
	
   <!--<style type="text/css">
    
   /*.aff_div {
            display:block;
            }
    .cache_div {
            display :none;
            }*/
    </style>
	<script type="text/javascript">
function deroul_div(id_div) {
     if(document.getElementById(id_div).className=='aff_div')
       {document.getElementById(id_div).className='cache_div'}
      else 
       {document.getElementById(id_div).className='aff_div'}
    }
</script>-->
</head>
<body>
<?php 
//include 'head.php';
?>

<div class="header">
    <a class="connexion" href="connexionNW.php" >
      Connexion | 
    </a>
    <a class="inscription" href="#overlay">Inscription</a>
  </div>


 <div>
<!--  <div class="forminscr"></div>
 -->    <div> 
      <h2>Inscription</h2>
    </div>
  <?php
  //On verifie que le formulaire a ete envoye
  if(isset($_POST['username'], $_POST['password'], $_POST['passverif'], $_POST['email']) and $_POST['username']!='') {
    
    // Vérification de l'identité des pwd
    if($_POST['password']==$_POST['passverif']) {
      // vérification de la longueur du mot de passe
      if(strlen($_POST['password'])>=6) {
          // echappement des variables pour pouvoir les mettre dans une requette SQL
          $username = $cnx->escape_string($_POST['username']);
          $password = $cnx->escape_string($_POST['password']);
          $password = password_hash($password, PASSWORD_DEFAULT);
          $email = $cnx->escape_string($_POST['email']);
          
          // vérification de l'absence d'utilisateur inscrit sous ce pseudo
          $result = $cnx->query('select idUser from usersNewWorld where nomUser="'.$username.'"');
          if ($result === false OR $result->num_rows < 1) {

              // enregistrement des informations
              if($cnx->query('insert into usersNewWorld( nomUser, password, email, signup_date) values ( "'.$username.'", "'.$password.'", "'.$email.'", "'.time().'")'))
              {
                $form = false;
                echo '<div>Vous avez été inscrit. Vous pouvez vous connecter.<br></div>';
              }
              else {
                $form = true;
                $message = "Une erreur est survenue lors de l'inscription.";
              }
          }
          else {
            $form = true;
            $message = 'Identifiant déjà assigné.';
          }
      }
      else {
        $form = true;
        $message = 'Le mot de passe que vous avez entré contient moins de 6 caractères.';
      }
    }
    else {
      $form = true;
      $message = 'Les mots de passe que vous avez entré ne sont pas identiques.';
    }
  }
  else {
    $form = true;
  }
  if($form) {
    //On affiche un message sil y a lieu
    if(isset($message))
    {
        echo '<div class="insco">'.$message.'</div>';
    }
    //On affiche le formulaire
  ?>
  <div id="overlay">
      <form id="popup" class="insco" action="" method="post">
          <fieldset class="fieldset" >
              <div><legend id="systembar">Données d'inscription</legend></div>
              <div id="contenu">
              <label for="username"><pre>Identifiant        </pre></label>
              <input type="text" name="username"><br>
              <label for="password" ><pre>Mot de passe       </pre></label>
              <input type="password" name="password"  placeholder="6 caractères min."><br>
              <label for="passverif"><pre>Mot de passe      </pre></label>
              <input type="password" name="passverif" placeholder="vérification"><br>
              <label for="email"><pre>Email          </pre></label>
              <input type="email"  name="email"><br><br>
              <input type="submit" value="Envoyer">
              <a class="retourbttn" href="#noWhere">
              <input type="button" name="Retour" value="Retour">
              </a>
              </div>
      </fieldset>
      </form>
  </div>

</div>
<?php
}
?>


  <div class="bandeau">

    <a class="NW" href="index.php">NW</a>
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


	<div class="bckgrnd">
		<div class="texte">
		<br><br><p>Les meilleurs produits de saison.</p>
		<p>Du producteur à l'artisan et au consommateur.</p>
		<p>Ni usine, ni camion, ni grande surface.</p><br>
		<p>La terre et l'homme à nouveau respectés.</p><br><br>
		<p>New World</p>
		</div>
		<div>
			<img class="jardinier" src="jardinier.jpg">
			<img class="boucher" src="boucher.jpg">
		</div>
	</div>

	<div class="footer" >
		<div class="footer1">
		<h1>Participer</h1>
		
		<ul >
			<li><a href="participer.php" name="Proposer des produits">Proposer des produits</a></li>
			<li><a href="participer.php" name="Transformer">Transformer</a></li>
			<li><a href="participer.php" name="Devenir client">Devenir client</a></li>
			<li><a href="participer.php" name="Distribuer">Distribuer</a></li>
		</ul>
		</div>
		<div class="footer2">
		<h1>Comprendre</h1>
		
		<ul>
			<li><a href="comprendre.php" name="Savoir faire local">Savoir faire local</a></li>
			<li><a href="comprendre.php" name="Réduire les transports">Réduire les transports</a></li>
			<li><a href="comprendre.php" name="Produits frais">Produits frais</a></li>
			<li><a href="comprendre.php" name="Qualité">Qualité</a></li>
		</ul>
		</div>
		<div class="footer3">
		<h1>Communiquer</h1>
		<ul>
			<li><a href="communiquer.php">Les secrets des producteurs</a></li>
			<li><a href="communiquer.php">Le savoir faire des artisants</a></li>
			<li><a href="communiquer.php">Les recettes de grand-mère</a></li>
			<li><a href="communiquer.php">La conservation des aliments</a></li>
		</ul>
		</div>
	</div>
	
</body>
</html>