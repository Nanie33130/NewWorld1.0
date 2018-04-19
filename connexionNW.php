<?php
include('connectBase.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="InscrCoNW.css">
  <title>Accueil du site</title>
</head>
<body >
  <div> 
    <h2>Connexion / Déconnexion</h2>
  </div>
<?php
/*      Utilisateur connecté
 *   déconnexion en supprimant les variables de session
 */
if(isset($_SESSION['username']))
{
  unset($_SESSION['username'], $_SESSION['userid'], $_SESSION['admin']);
  echo "<div>Vous avez été déconnecté</div>";
}
else
{
  $username = '';

  // Traitement du formulaire 
  if(isset($_REQUEST['btn']))
  {
    $username = $cnx->escape_string($_POST['username']);
    $password = $_REQUEST['password'];
    // récupération du mot de passe utilisateur
    $result = $cnx->query('select password,idUser, admin from users where nomUser="'.$username.'"');
    if ($result=== false OR $result->num_rows<1) {
        $form = true;
        $message = 'Utilisateur inconnu';
    }
    else {
      $ligne = $result->fetch_array();
      
      // comparaison des mots de passe
      if (password_verify($password, $ligne['password']))
      {
        // utilisateur reconnu, pas de formulaire à afficher
        $form = false;
        // màj du username et identifiant dans la session
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['userid'] = $ligne['idUser'];
        if ($ligne['admin'] == 1)
          $_SESSION['admin'] = true;
        
        echo "<div>Vous êtes connecté.</div>";
      }
      else
      {
        // combinaison fausse, message d'avertissement et formulaire
        $form = true;
        $message = 'Identifiants non reconnus !';
      }
    }
  }
  else
  {
    $form = true;
  }
  if($form)
  {
    // affichage éventuel d'un message sil y a lieu
    if(isset($message)) {
      echo '<div>'.$message.'</div>';
    }
    // Affichage du formulaire
?>
<div>
    <form class="insco" action="connexionNW.php" method="post">
        <fieldset><legend>Identifiants</legend>
            <label for="username"><pre>Identifiant </pre></label>
            <input type="text" name="username" id="username" required autofocus><br>
            <label for="password" ><pre>Mot de passe</pre></label>
            <input type="password" name="password" id="password" required><br>
            <input type="submit" name="btn" value="Connection">
    </fieldset>
    </form>
</div>
<?php
  }
}
?>
    <div><a href="<?php echo $url_home; ?>">Retour à l'accueil</a></div>
  </body>
</html>
