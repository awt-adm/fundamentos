<footer class="container-fluid">

  <div class="card text-center col-12 ">
    <div class="card-footer">
      Footer
    </div>

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
                ?>``
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
  </div>
</footer>

<div class="container-fluid">
<a id="back-to-top" href="#header" class="fas fa-arrow-up" role="button"><i class="fas fa-chevron-up"></i></a>
</div>
