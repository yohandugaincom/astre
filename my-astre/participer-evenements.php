<?php
  $style = ".center {
    margin-top:2%;
  }";
  include($_SERVER["DOCUMENT_ROOT"]."/layouts/header.php"); ?>

    <div class="center" align="center">
      <p class="text-bold" style="font-size:30px;">Participer à un évènement Astre</p>
      <div class="evenements">
        <div class="card" style="margin-top:15px;" align="left">
          <div class="card-header">
            Samedi 28 Mars 2020 de 14h00 à 15h00
          </div>
          <div class="card-body">
            <h5 class="card-title">Titre de l'évènement</h5>
            <p class="card-text">Description de l'évènement.</p>
            <a href="/merci/?i=1" class="btn btn-dark astre-color">Participer</a>
          </div>
          <div class="card-footer text-muted">
            Cet évènement ajoutera <b>8 points</b> à votre compte myAstre.
          </div>
        </div>
        <div class="card" style="margin-top:15px;" align="left">
          <div class="card-header">
            Samedi 28 Mars 2020 de 10h00 à 16h00
          </div>
          <div class="card-body">
            <h5 class="card-title">Titre de l'évènement</h5>
            <p class="card-text">Description de l'évènement.</p>
            <a href="/merci/?i=1" class="btn btn-dark astre-color">Participer</a>
          </div>
          <div class="card-footer text-muted">
            Cet évènement ajoutera <b>19 points</b> à votre compte myAstre.
          </div>
        </div>
      </div>
    </div>

<?php include($_SERVER["DOCUMENT_ROOT"]."/layouts/footer.php"); ?>
