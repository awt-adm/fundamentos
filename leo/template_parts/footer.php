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
          <div class="col-12 ha my-auto"> <!--altura & margin en y automatico para centrado vertical-->
            <ul class="row social">

              <?php
              $redes = array("github","twitter","facebook","linkedin");
              $links = array(
                "https://github.com",
                "https://twitter.com",
                "https://facebook.com",
                "https://linkedin.com"
              );
              /*arreglo absoulto para links en orden*/

              /*echo var_dump ($redes) te devuelve los valores del array como tal no procesados*/
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
  </div>
</footer>

<!--Button to top-->

<div class="container-fluid">
  <a id="back-to-top" href="#header" role="button"> <i class="fa fa-chevron-up" aria-hidden="true"></i></a>
</div>
