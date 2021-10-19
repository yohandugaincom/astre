<?php
  $style = ".center {
    margin-top:2%;
  }";
  include($_SERVER["DOCUMENT_ROOT"]."/layouts/header.php"); ?>

    <div class="center" align="center">
      <img src="/img/icons/myAstre.png" width="150px"><br/>
      <p class="text-bold" style="font-size:30px;">Obtenir des points myAstre</p>
      <div class="evenements">
        <div class="card" style="margin-top:15px;" align="left">
          <div class="card-body">
            <h5 class="card-title">Bonus quotidien</h5>
            <p class="card-text">Récupérer ce bonus en vous connectant chaque jour à votre compte myAstre.</p>
            <a href="/merci/?i=1" class="btn btn-success">Récupérer ce bonus</a>
          </div>
          <div class="card-footer text-muted">
            Ce bonus ajoutera <b>1 point</b> à votre compte myAstre.
          </div>
        </div>
        <div class="card" style="margin-top:15px;" align="left">
          <div class="card-body">
            <h5 class="card-title">Récupérer votre premier badge physique</h5>
            <p class="card-text">Récupérer ce bonus en commandant votre premier badge myAstre.</p>
            <a href="/my-astre/mon-badge.php" class="btn btn-dark">Obtenir ce bonus</a>
          </div>
          <div class="card-footer text-muted">
            Ce bonus ajoutera <b>10 points</b> à votre compte myAstre.
          </div>
        </div>
        <div class="card" style="margin-top:15px;" align="left">
          <div class="card-body">
            <h5 class="card-title">Modifier temporairement ma photo de profil</h5>
            <p class="card-text">Récupérer ce bonus en utilisant le décor de Astre sur votre photo de profil Facebook.</p>
            <a href="/my-astre/mon-badge.php" class="btn btn-dark">Obtenir ce bonus</a>
            <a href="/merci/?i=4" class="btn btn-dark astre-color">Vérifier ce bonus</a>
          </div>
          <div class="card-footer text-muted">
            Ce bonus ajoutera <b>15 points</b> à votre compte myAstre.
          </div>
        </div>
        <div class="card" style="margin-top:15px;" align="left">
          <div class="card-body">
            <h5 class="card-title">Un début à tout</h5>
            <p class="card-text">Récupérer ce bonus en participant à au moins 1 évènement Astre.</p>
            <a href="/my-astre/participer-evenements.php" class="btn btn-dark">Obtenir ce bonus</a>
          </div>
          <div class="card-footer text-muted">
            Ce bonus ajoutera <b>10 points</b> à votre compte myAstre.
          </div>
        </div>
        <div class="card" style="margin-top:15px;" align="left">
          <div class="card-body">
            <h5 class="card-title">À fond pour Astre !</h5>
            <p class="card-text">Récupérer ce bonus en participant à au moins 5 évènement Astre.</p>
            <a href="/my-astre/participer-evenements.php" class="btn btn-dark">Obtenir ce bonus</a>
          </div>
          <div class="card-footer text-muted">
            Ce bonus ajoutera <b>25 points</b> à votre compte myAstre.
          </div>
        </div>
        <div class="card" style="margin-top:15px;" align="left">
          <div class="card-body">
            <h5 class="card-title">Mille mercis...</h5>
            <p class="card-text">Récupérer ce bonus en effectuant votre premier don à Astre.</p>
            <a href="/my-astre/faire-un-don.php" class="btn btn-dark">Obtenir ce bonus</a>
          </div>
          <div class="card-footer text-muted">
            Ce bonus ajoutera <b>15 points</b> à votre compte myAstre.
          </div>
        </div>
        <div class="card" style="margin-top:15px;" align="left">
          <div class="card-body">
            <h5 class="card-title">Astrement stylé ;)</h5>
            <p class="card-text">Récupérer ce bonus en effectuant votre premier achat depuis la Boutique Astre.</p>
            <a href="/my-astre/boutique-astre.php" class="btn btn-dark">Obtenir ce bonus</a>
          </div>
          <div class="card-footer text-muted">
            Ce bonus ajoutera <b>30 points</b> à votre compte myAstre.
          </div>
        </div>
      </div>
    </div>

<?php include($_SERVER["DOCUMENT_ROOT"]."/layouts/footer.php"); ?>
