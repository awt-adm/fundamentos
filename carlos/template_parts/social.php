<ul class="row social">
  <?php
  $redes = array("github","twitter","facebook","linkedin","instagram");
  $links = array(
    "https://github.com",
    "https://twitter.com",
    "https://facebook.com",
    "https://linkedin.com",
    "https://instagram.com"
  );
  // echo var_dump($redes);
  for ($i = 0; $i < count($redes); $i++):
    ?>
    <!--  -->
    <li class="col-2">
      <a href="<?php echo $links[$i]; ?>" target="_blank">
        <i class="fa fa-<?php echo $redes[$i] ?>"></i>
      </a>
    </li>
    <!--  -->
  <?php endfor; ?>
</ul>
