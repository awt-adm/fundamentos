<footer class="container-fluid">

  <div class="row">

    <div class="col-12 col-md-6 text-left">
      <div class="row">

        <div class="col-12 ha my-auto">
          Copyright 2019
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 text-right">

      <div class="row">
        <div class="col-12 ha my-auto">
          <ul class="row social">
            <?php
            $redes = array("github","twitter","facebook","linkedin");
            $links = array(
              "https://github.com",
              "https://twitter.com",
              "https://facebook.com",
              "https://linkedin.com"
            );
            for ($i = 0; $i < count($redes); $i++):
              ?>
              <!--  -->
              <li class="col-2">
                <?php echo count($redes) ?>
                <a href="<?php echo $links[$i]; ?>" target="_blank">
                  <i class="fa fa-<?php echo $redes[$i] ?>"></i>
                </a>
              </li>
              <!--  -->
            <?php endfor; ?>
          </ul>
        </div>
      </div>
    </div>

  </div>

</footer>

<!-- scripts -->
<script src="js/jquery.js"></script><!-- jquery siempre al principio de las dependencias -->
<script src="js/slick.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/imgLiquid.js"></script>
<script src="js/app.js"></script>
<!-- fin scripts -->
</body>
</html>
