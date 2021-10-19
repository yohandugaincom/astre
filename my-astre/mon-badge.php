<?php
  $style = ".center {
    margin-top:2%;
  }
  #pf .medal{
    width: 250px;
    height: 250px;
    left:40%;
    position: absolute;
    background-color: #fff;
    background-image: url('/img/badges/B1.png');
    background-size: 100%;
    border-radius: 50%;
    z-index: 2;
    margin: 15px;
  }
  #pf .medal img{
    width: 100%;
  }
  #pf .cercle{
    left:40%;
    width: 280px;
    height: 280px;
    background-color: #000;
    position: absolute;
    border-radius: 50%;
    z-index: 2;
  }
  #pf .cercle.cercle1{
    background-color: #121116;
    z-index: 0;
  }
  #pf .cercle.cercle2{
    background-color: #f5bc31;
  }";
  include($_SERVER["DOCUMENT_ROOT"]."/layouts/header.php"); ?>

    <div class="center" align="center">
      <p class="text-bold" style="font-size:50px;">Niveau 1</p>
      <div id="pf">
        <div class="cercle cercle1"></div>
        <div class="cercle cercle2"></div>
        <div class="medal"></div>
      </div>
      <div style="margin-top:300px;">
        <p class="text-bold" style="font-size:25px;">12 points</p><br/>
        <p class="text-light" style="font-size:30px;">Prochain badge dans 8 points.</p>
        <div class="progress" style="width:30%;">
          <div class="progress-bar progress-bar-striped bg-success astre-color" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <br/><br/>
        <button type="button" class="btn btn-success astre-color" disabled>Vous avez déjà commandé ce badge.</button>
      </div>
    </div>

<?php include($_SERVER["DOCUMENT_ROOT"]."/layouts/footer.php"); ?>
