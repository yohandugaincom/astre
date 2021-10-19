<html>
  <head>
    <title>A•S•T•R•E vous remercie !</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700|Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="icon" type="image/png" href="/img/icons/icone.png" />
    <meta http-equiv="refresh" content="4;url=/my-astre/mon-compte.php" />
    <link href="/css/default.css" type="text/css" rel="stylesheet">
  </head>

  <body>
    <div align="center" style="margin-top:10%;">
      <img class="animated fadeInRight" src="/img/icons/large.png" width="350px" />
      <p class="text-light animated fadeInRight" style="font-size:35px"><?php
        if (isset($_GET['i'])) {
          $motif = $_GET['i'];
          if ($motif=="1") {
            echo 'Votre participation a bien été enregistrée.<br/>Nous vous en remercions.';
          }
          if ($motif=="2") {
            echo 'vous remercie pour votre don.';
          }
          if ($motif=="3") {
            echo 'Votre badge a bien été commandé.<br/>Nous vous en remercions.';
          }
          if ($motif=="4") {
            echo 'Nous vérifierons la validité de votre bonus.<br/>Nous vous en remercions.';
          }
        } else {
          echo 'vous remercie pour votre contribution.';
        }
       ?></p>
    </div>
    <div align="center" style="bottom:0px;">
      <p class="text">Redirection automatique, veuillez patienter.</p>
    </div>
  </body>
</html>
