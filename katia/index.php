<?php include "template_parts/header.php" ?>

<!--heroscreen-->

<section id="index" class="container-fluid no-padding">
  <div class="col-12 no-padding">

    <div class="col-12 no-padding index-img imgLiquid imgLiquidFill">
      <img src="img/bannerprincipal.jpg" alt="">
    </div>

    <div class="col-12 index-text">
      <div class="row">
        <div class="col-12 my-auto ha">

          <h1 class="col-12 my-auto text-center">TITULO AGENCIA</h1>
          <p class="col-12">Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un gran océano de lenguas. Un riachuelo llamado Pons fluye por su pueblo y los abastece con las normas necesarias. Hablamos de un país paraisomático en el que a uno le caen pedazos de frases asadas en la boca. Ni siquiera los todopoderosos signos de puntuación dominan a los textos simulados; una vida, se puede decir, poco ortográfica. Pero un buen día, una pequeña línea de texto simulado, llamada Lorem Ipsum, decidió aventurarse y salir al vasto mundo de la gramática.</p>
        </div>

      </div>

    </div>
  </div>
</section>

<section id="index-servicios" class="container">
  <div class="row">
    <h1 class="index-titulo col-12 text-center">SERVICIOS</h1>

    <!--servicios-->
    <div class="index-servicio col-4 no-padding">

      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/imagenkate5.jpg" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto">

            <h3 class="col-12 text-center">Servicio Dummie</h3>
          </div>
        </div>
      </div>
    </div>
    <!--fin servicio-->
    <!--servicios-->
    <div class="index-servicio col-4 no-padding">

      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/imagenkate5.jpg" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto">

            <h3 class="col-12 text center">Servicio Dummie</h3>
          </div>
        </div>
      </div>
    </div>
    <!--fin servicio-->
    <!--servicios-->
    <div class="index-servicio col-4 no-padding">

      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/imagenkate5.jpg" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto">

            <h3 class="col-12 text center">Servicio Dummie</h3>
          </div>
        </div>
      </div>
    </div>
    <!--fin servicio-->
    <!--servicios-->
    <div class="index-servicio col-4 no-padding">

      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/imagenkate5.jpg" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto">

            <h3 class="col-12 text center">Servicio Dummie</h3>
          </div>
        </div>
      </div>
    </div>
    <!--fin servicio-->

    <!--servicios-->
    <div class="index-servicio col-4 no-padding">

      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/imagenkate5.jpg" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto">

            <h3 class="col-12 text center">Servicio Dummie</h3>
          </div>
        </div>
      </div>
    </div>
    <!--fin servicio-->

    <!--servicios-->
    <div class="index-servicio col-4 no-padding">

      <div class="servicio-img col-12">
        <div class="col-12 no-padding imgLiquid imgLiquidFill">
          <img src="img/imagenkate5.jpg" alt="Servicio">
        </div>
      </div>

      <div class="col-12">

        <div class="row">

          <div class="col-12 ha my-auto">

            <h3 class="col-12 text center">Servicio Dummie</h3>
          </div>
        </div>
      </div>
    </div>
    <!--fin servicio-->
  </div>
</section>

<!--team slider-->

<section id="index-team" class="container">

  <div class="row">
    <h1 class="index-titulo col-12 text-center">EQUIPO</h1>

    <!--slider-->
    <div id="team-slider" class="col-12">

      <?php

      $nombres = array('Carlos','Patricia','Julio','Karim','Brenda','Katia','Alejandro','Olga','Leo');
      $cargo = array ('Docente','alumnos');

        for ($i=0; $i < 9; $i++):
?>

      <!--slide-->
      <div class="team-slide col-xs-12 col-md-6 col-lg-4"><!--tarjeta-->
        <a href="#" class="row"><!--link de miembro del equipo-->


          <header class="header-team col-12 no-padding">

            <div class="header-team-img imgLiquid imgLiquidNoFill">

              <img src="img/fotokatia.jpg" alt="slider">

            </div>

          </header>

          <!-- fin del header-->
          <!--contenido-->
          <div class="col-12">
            <h2 class="col-12 text-center"><?php echo $nombres[$i]; ?></h2>
            <h4 class="col-12 text-center">
<?php

if ($nombres[$i] === $nombres[0]):
  echo $cargo[0];

else:

echo $cargo[1];

endif;
?>
            </h4>
            <p class="col-12">Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un gran océano de lenguas. Un riachuelo llamado Pons fluye por su pueblo y los abastece con las normas necesarias. Hablamos de un país paraisomático en el que a uno le caen pedazos de frases asadas en la boca. Ni siquiera los todopoderosos signos de puntuación dominan a los textos simulados; una vida, se puede decir, poco ortográfica.</p>
          </div>
        </a>
        <!--fin de contenido-->
        <!-- slide-->
        <?php //include "template_parts/social.php"; ?>
      </div>

      <!--fin del slide-->
<?php endfor; ?>
    </div>
    <!--fin de slider-->

  </div>

</section>

<?php include "template_parts/footer.php"; ?>
