<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Karl ZAWISLA Accueil</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <!--Menu-->
  <?php include("inc_menu.php"); ?>  
  <!--Bio avec icônes-->
  <div class="container">
    <div class="section">
      <div class="row">
      <h1 class="header center teal-text text-lighten-2">Karl Zawisla</h1>
        <div class="row center">
          <h5 class="header col s12 light">Etudiant en développement</h5>
          <h6 class="header col s12 light">A l'occasion de l'épreuve orale de BTS,
          j'ai créé ce site web afin d'y rassembler mes projets, mes compte rendus
          de stage ainsi que mon cv, etc.</h6>
        </div>
        <div class="row center">
          <a href="cv.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Voir mon cv</a>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">library_music</i></h2>
            <h5 class="center">Créations musicales</h5>
            <p class="light">Batteur et guitariste, j'utilise depuis peu le logiciel de MAO FL Studio 12 pour concevoir ou remixer mes propres compositions.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">code</i></h2>
            <h5 class="center">Développement</h5>
            <p class="light">Durant mes deux années de BTS, j'ai appris à utiliser des langages orientés objets tels que C# et des langages orientés web comme PHP.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Versioning</h5>
            <p class="light">J'utilise depuis peu le service web de gestion de développement de logiciels GitHub.
            Il regroupe mes projets scolaires comme mes projets personnels.</p>
            <p><a href="https://github.com/oiseauChaussette">Visiter mon GitHub.</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("inc_footer.php"); ?>
  </body>
</html>
