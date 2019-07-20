<section id="index-team" class="container">
  <div class="row">
    <h1 class="index-titulo col-12 text-center">Equipo</h1>

    <!--slider-->
    <div id="team-slider" class="col-12">

      <?php
      $nombres = array('Carlos','Patricia','Julio','Karim','Brenda','Katia','Alejandro','Olga','Leo');
      $cargo = array('Docente','Alumno');
      for ($i=0; $i < count($nombres) ; $i++):
        ?>
        <!--slide-->
        <div class="team-slide col-12 col-sx-12 col-md-6 col-lg-4">

          <!--header de la tarjeta-->
          <header class="header-team col-12 no-padding">

            <a href="#" class="row"><!--link al miembro-->
              <div class="header-team-img imgLiquid imgLiquidNoFill">
                <img src="img/fotoplaceholder.jpg" alt="slider">
              </div>
            </a>
          </header>
          <!--fin del header de la tarjeta-->
          <!--contenido-->
          <div class="col-12">
            <h2 class="col-12 text-center"><?php echo $nombres[$i] ?></h2>
            <h4 class="col-12 text-center">
              <?php if ($nombres[$i] === $nombres[0]):
                echo $cargo[0];

              else:
                echo $cargo[1];

              endif; ?>
            </h4>
            <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
          </div>
          <!--fin de contenido-->
          <?php //include "template_parts/social.php" ?>
        </div>
        <!--fin slide-->
      <?php endfor; ?>

    </div>
    <!--fin slider-->
  </div>
</section>
