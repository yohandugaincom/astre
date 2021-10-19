<?php
  $style = ".center {
    margin-top:2%;
  }";
  include($_SERVER["DOCUMENT_ROOT"]."/layouts/header.php"); ?>

    <div class="center" align="center">
      <p class="text-bold" style="font-size:40px;"><?php if (date("H")>=4 && date("H")<=17) {
        echo "Bonjour";
      } else {
        echo "Bonsoir";
      } ?> Yohan,</p>
      <div id="menu">
        <a href="ma-carte.php"><div class="card menu-card">
          <img src="myastre-carte.php" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Ma carte myAstre</p>
          </div>
        </div></a>
        <a href="nouveau-badge.php"><div class="card menu-card menu-alert animated pulse">
          <img src="/img/badges/B1.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Mon badge myAstre</p>
          </div>
        </div></a>
        <a href="informations-adherents.php"><div class="card menu-card">
          <img src="/img/info.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Informations aux adhérents</p>
          </div>
        </div></a>
        <br/>
        <a href="faire-un-don.php"><div class="card menu-card">
          <img src="/img/don.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Faire un don</p>
          </div>
        </div></a>
        <a href="participer-evenements.php"><div class="card menu-card">
          <img src="/img/event.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Participer à un évènement</p>
          </div>
        </div></a>
        <a href="obtenir-points.php"><div class="card menu-card">
          <img src="/img/star.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Obtenir des points myAstre</p>
          </div>
        </div></a>
        <br/>
        <div class="card menu-card none">
          <img src="/img/stats.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Développement de Astre</p>
          </div>
        </div>
        <div class="card menu-card none">
          <img src="/img/partner.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Demander un partenariat</p>
          </div>
        </div>
        <div class="card menu-card none">
          <img src="/img/shop.png" width="100px">
          <div class="card-body text" style="color:black;">
            <p class="card-text">Boutique Astre</p>
          </div>
        </div>
      </div>
    </div>

<?php include($_SERVER["DOCUMENT_ROOT"]."/layouts/footer.php"); ?>
