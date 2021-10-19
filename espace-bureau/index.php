<?php
  $style = ".center {
    margin-top:2%;
  }";
  include($_SERVER["DOCUMENT_ROOT"]."/layouts/header.php"); ?>

    <div class="center" align="center">
      <p class="text-bold" style="font-size:40px;">Espace Bureau</p>
      <div id="menu">
        <a href="information-membres.php"><div class="card menu-card">
          <img src="/img/member.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Informations membres</p>
          </div>
        </div></a>
        <a href="nouveau-badge.php"><div class="card menu-card">
          <img src="/img/pin.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Demandes de badges</p>
          </div>
        </div></a>
        <a href="informations-adherents.php"><div class="card menu-card">
          <img src="/img/info.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Diffuser une information</p>
          </div>
        </div></a>
        <br/>
        <a href="faire-un-don.php"><div class="card menu-card">
          <img src="/img/stats.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Changer les chiffres</p>
          </div>
        </div></a>
        <div class="card menu-card">
          <img src="/img/maintenance.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Activer la maintenance</p>
          </div>
        </div>
        <div class="card menu-card">
          <img src="/img/shop.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Honorer des commandes</p>
          </div>
        </div>
        <br/>
        <a href="participer-evenements.php"><div class="card menu-card">
          <img src="/img/event.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Ajouter un évènement</p>
          </div>
        </div></a>
        <div class="card menu-card">
          <img src="/img/email.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Ouvrir la messagerie</p>
          </div>
        </div>
        <a href="obtenir-points.php"><div class="card menu-card">
          <img src="/img/star.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Vérifier les bonus</p>
          </div>
        </div></a>
      </div>
    </div>

<?php include($_SERVER["DOCUMENT_ROOT"]."/layouts/footer.php"); ?>
