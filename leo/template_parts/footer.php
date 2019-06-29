<footer class="container-fluid">
  <div class="card text-center col-12 ">
    <div class="card-footer">
      Footer
    </div>
    <div class="card mb-3">
      <img class="card-img-top" src="img/footer.svg" alt="footer">
      <div class="card-body">
        <h5 class="card-title">Copyright® 2019</h5>
        <p class="card-text">Redes Sociales</p>

        <div class="row">
          <div class="col-12 ha my-auto">
            <ul class="row social">

              <?php
              $redes = array("github","twitter","facebook","linkedin");
              $links = array(
                'https://twitter.com'
                'https://github.com'
                'https://facebook.com'
            );

              for ($i = 0; $i < count($redes); $i++):
                ?>

                <li class="col-2">
                  <a href="<?php echo $links[$i]; ?>" target="_blank">
                    <i class"fa fa- <?php echo $redes [$i] ?>"></i>
                  </a>
            
                </li>

                <?php
                end for;
                ?>

              </ul>

            </div>

          </div>
        </div>
      </div>
      <button type="button">
        <a href="index.php" class="fas fa-arrow-alt-circle-up btn btn-dark"></a>
      </button>
    </div>
  </footer>
