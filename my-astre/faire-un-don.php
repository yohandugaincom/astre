<?php
  $style = ".center {
    margin-top:2%;
  }";
  include($_SERVER["DOCUMENT_ROOT"]."/layouts/header.php"); ?>

    <div class="center" align="center">
      <img src="/img/don-invert.png" style="filter:invert(1);" height="200px" />
      <p class="text-light" style="font-size:40px;">Mille mercis ne suffiront pas...</p>
      <p class="text" style="font-size:20px;">C'est grâce à votre générosité que nous pouvons si bien nous développer,<br/>et ainsi améliorer le quotidien de ceux qui en ont le plus besoin.</p>
      <br/>
      <a href="/merci/?i=2"><button type="button" class="btn btn-lg btn-success astre-color">Faire un don à Astre</button></a>
    </div>

<?php include($_SERVER["DOCUMENT_ROOT"]."/layouts/footer.php"); ?>
