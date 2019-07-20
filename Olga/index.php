<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clase 4</title>
  <!-- estilos -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/app.css">
  <!-- fin estilos -->
</head>
<?php
include "template_parts/header.php";
?>

<!-- Heroscreen -->
<section id="index" class="container-fluid no-padding">

  <div class="col-12 no-padding">

    <div class="col-12 no-padding index-img imgLiquid imgLiquidFill">
      <img src="img/Captura de pantalla 2019-07-20 a la(s) 10.23.46 a.m..png" alt="">
    </div>

    <div class="col-12 index-text">

      <div class="row">

        <div class="col-12 my-auto ha">

          <h1 class="col-12 text-center">TITULO DE AGENCIA</h1>
          <p class="col-12 text-center">Mea at alii fabellas, iuvaret aliquid
            tractatos mea at, verear scripserit ea nam. In mel gubergren reprimique,
            in movet quando ius. Nihil aeterno ne cum, sea erat intellegam at. An
            consequat urbanitas has. Id his volutpat praesent, ut zril aliquip quo.</p>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- Servicios -->
<section id="index-servicios" class="container">

  <div class="row">

    <h1 class="index-titulo col-12 text-center">Servicios</h1>

    <!-- servicio -->
    <div class="index-servicio col-4 no-padding">


      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/Captura de pantalla 2019-07-20 a la(s) 10.24.57 a.m..png" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto index-text">
            <h3 class="col-12 text-center">Servicio Dummie</h3>
          </div>

        </div>

      </div>

    </div>
    <!-- fin servicio -->
    <!-- servicio -->
    <div class="index-servicio col-4 no-padding">


      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/Captura de pantalla 2019-07-20 a la(s) 10.24.44 a.m..png" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto index-text">
            <h3 class="col-12 text-center">Servicio Dummie</h3>
          </div>

        </div>

      </div>

    </div>
    <!-- fin servicio -->
    <!-- servicio -->
    <div class="index-servicio col-4 no-padding">


      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/Captura de pantalla 2019-07-20 a la(s) 10.24.26 a.m..png" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto index-text">
            <h3 class="col-12 text-center">Servicio Dummie</h3>
          </div>

        </div>

      </div>

    </div>
    <!-- fin servicio -->
    <!-- servicio -->
    <div class="index-servicio col-4 no-padding">


      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/Captura de pantalla 2019-07-20 a la(s) 10.25.10 a.m..png" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto index-text">
            <h3 class="col-12 text-center">Servicio Dummie</h3>
          </div>

        </div>

      </div>

    </div>
    <!-- fin servicio -->
    <!-- servicio -->
    <div class="index-servicio col-4 no-padding">


      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/Captura de pantalla 2019-07-20 a la(s) 10.25.26 a.m..png" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto index-text">
            <h3 class="col-12 text-center">Servicio Dummie</h3>
          </div>

        </div>

      </div>

    </div>
    <!-- fin servicio -->
    <!-- servicio -->
    <div class="index-servicio col-4 no-padding">


      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/Captura de pantalla 2019-07-20 a la(s) 10.53.34 a.m..png" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto index-text">
            <h3 class="col-12 text-center">Servicio Dummie</h3>
          </div>

        </div>

      </div>

    </div>
    <!-- fin servicio -->
  </div>

</section>


<section id="index-team" class="container">

  <div class="row">
    <h1 class="index-titulo col-12 text-center">Equipo</h1>

    <!-- slider -->
    <div id="team-slider" class="col-12">
  <<?php
  $nombre = array('carlos','patricia','julio','karim','brenda','katia','alejandro','olga','leo');
  $cargo = array('Docente','Alumno');

  for($i=0; $i <9; $i++):
     ?>
      <!-- slide -->
      <div class="team-slide col-xs-12 col-md-6 col-lg-4"><!-- tarjeta -->
        <a href="#" class="row"><!-- link -->
          <!--header  -->
          <header class="header-team col-12 no-padding">

            <div class="col-12 imgLiquid imgLiquidNoFill">


              <img src="img/slider.png" alt="Slider">


            </div>

          </header>

          <!-- fin header -->

          <!-- contenido -->
          <div class="col-12">

            <h2 class="col-12 text-center"> <?php echo $nombres[$i];?></h2>
            <h4 class="col-12 text-center">Alumna</h4>
             <?php if ($nombres[$i] === $nombres[0]):
                  echo $cargo[0];
             else:
               echo $cargo[1];

             endif;  ?>

           </h4>

            <p class="col-12">Lorem ipsum dolor sit amet, doming doctus vix an.
              Est in graeco nemore, id odio scribentur nam. Cum in lucilius delicata praesent,
              eros debitis eu mea. Habeo persecuti ...</p>

          </div>
          <!-- fin contenido -->



        </a>
        <?php //include "template_parts/social.php"; ?>
      </div>
      <!-- fin slide -->
<?php endfor; ?>

    </div>
    <!-- fin slider -->


  </div><!-- row -->
</section>

<?php
include "template_parts/footer.php";
?>
