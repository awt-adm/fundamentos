<ul class="row social">


  <?php
  $redes = array("twitter", "facebook", "github");
  $colores = array("color-twitter", "color-facebook", "color-github");
  $links = array("https:twitter.com","https:facebook.com","https:github.com");
  for ($i=0; $i < count($redes); $i++):
    ?>

    <li class="col-3 <?php echo $colores[$i] ?>">
      <a href="<?php echo $links[$i]; ?>" target="_blank">
        <i class="fa fa-<?php echo $redes[$i]?>">
        <?php echo $redes[$i] ?></i>
      </a>
      </li>

    <?php endfor; ?>


  </ul>
