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
    animation-name: medal-flip;
    animation-fill-mode: forwards;
    animation-duration: 1s;
    animation-delay: 0.9s;
    transform: rotateY(90deg);
  }

  #pf .medal img{
    width: 100%;
  }

  #pf .cercle{
    left:40%;
    width: 280px;
    height: 280px;
    transform: scale(0);
    background-color: #000;
    position: absolute;
    border-radius: 50%;
    animation-name: incress-cercle;
    z-index: 2;
    animation-fill-mode: forwards;
    animation-duration: 1s;
  }

  #pf .cercle.cercle1{
    background-color: #121116;
    z-index: 0;
  }

  #pf .cercle.cercle2{
    background-color: #f5bc31;
    animation-duration: 0.8s;
    animation-delay: 0.4s;
  }

  @keyframes incress-cercle {
    0% {transform: scale(0);}
    60%{transform: scale(0.6);}
    80%{transform: scale(1.4);}
    100% {transform: scale(1);}
  }

  @keyframes medal-flip {
    0% {transform: rotateY(90deg);}
    60%{transform: rotateY(190deg);}
    100% {transform: rotateY(0deg);}
  }";
  include($_SERVER["DOCUMENT_ROOT"]."/layouts/header.php"); ?>

    <div class="center" align="center">
      <p class="text-bold" style="font-size:50px;">Niveau 1</p>
      <div id="pf">
        <div class="cercle cercle1"></div>
        <div class="cercle cercle2"></div>
        <div class="medal"></div>
      </div>
      <br/>
      <div style="margin-top:300px;">
        <p class="text-light" style="font-size:30px;">Vous avez débloqué un nouveau badge.</p>
        <br/>
        <a href="obtenir-badge.php"><button type="button" class="btn btn-success astre-color">Je veux ce badge</button></a>
        <a href="mon-badge.php"><button type="button" class="btn btn-light">Plus tard</button></a>
      </div>
    </div>

<?php include($_SERVER["DOCUMENT_ROOT"]."/layouts/footer.php"); ?>
