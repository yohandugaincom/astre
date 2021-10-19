<?php
  $style = ".center {
    margin-top:2%;
  }";
  include($_SERVER["DOCUMENT_ROOT"]."/layouts/header.php"); ?>

    <div class="center" align="center">
      <img src="/img/info-adherents.png" style="vertical-align:middle;" height="40px" />
      <span class="text-light" style="font-size:40px; vertical-align:middle;">Informations à nos adhérents</span><br/><br/>
      <p class="text" style="font-size:20px;">Suivez régulièrement les dernières évolutions de notre association.</p>
      <br/>
      <div class="evenements" align="left">
        <div class="card" style="margin-top:10px;">
          <h5 class="card-header">Le 28/03/2020 à 15h17</h5>
          <div class="card-body">
            <h5 class="card-title">Information #1</h5>
            <p class="card-text">L'information en question...</p>
          </div>
        </div>
        <div class="card" style="margin-top:10px;">
          <h5 class="card-header">Le 28/03/2020 à 10h17</h5>
          <div class="card-body">
            <h5 class="card-title">Information #2</h5>
            <p class="card-text">L'information en question...</p>
          </div>
        </div>
      </div>
    </div>

<?php include($_SERVER["DOCUMENT_ROOT"]."/layouts/footer.php"); ?>
