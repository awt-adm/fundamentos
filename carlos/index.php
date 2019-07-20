<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clase </title>
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
      <img src="img/placeholder.edit.png" alt="">
    </div>

    <div class="col-12 index-text">

      <div class="row">

        <div class="col-12 my-auto ha">

          <h1 class="col-12 text-center">TITULO DE AGENCIA</h1>
          <p class="col-12 text-center">Mea at alii fabellas, iuvaret aliquid tractatos mea at, verear scripserit ea nam. In mel gubergren reprimique, in movet quando ius. Nihil aeterno ne cum, sea erat intellegam at. An consequat urbanitas has. Id his volutpat praesent, ut zril aliquip quo.</p>

        </div>

      </div>

    </div>

  </div>

</section>


<?php include "template_parts/servicios-content.php"; ?>



<section id="index-team" class="container">

  <div class="row">
    <h1 class="index-titulo col-12 text-center">Equipo</h1>

    <!-- slider -->
    <div id="team-slider" class="col-12">
      <?php

      $nombres = array('Carlos','Patricia','Julio','Karim','Brenda','Katia','Alejandro','Olga','Leo','Santiago');
      $cargo = array('Docente', 'Asistente', 'Alumno',"Director","Subdirector","Prefecto");
      $textos = array(
        "Lorem ipsum dolor sit amet, ex tamquam patrioque expetendis eam, ei viderer dolorum constituam pro, nam aliquip electram et. Eum eu integre moderatius, ne fabulas graecis pro, dico suas duo ut.",
        "Nam te evertitur tincidunt disputando, sed cu hinc signiferumque. In sit putant suscipit erroribus, no labore platonem vis. Usu timeam fastidii intellegam ei, has illud audire consulatu te. Per ei laudem quaerendum, at vix omnis aperiri fabulas.",
        "Ut etiam dissentiunt usu. Et cum natum vivendo referrentur. Ut brute cetero pro, ad omnium latine vim, iisque iuvaret invenire id qui. Odio essent indoctum eum eu, ullum dolore ceteros ea quo. Eripuit noluisse pri.",
        "Lorem ipsum dolor sit amet, ex tamquam patrioque expetendis eam, ei viderer dolorum constituam pro, nam aliquip electram et. Eum eu integre moderatius, ne fabulas graecis pro, dico suas duo ut.",
        "Nam te evertitur tincidunt disputando, sed cu hinc signiferumque. In sit putant suscipit erroribus, no labore platonem vis. Usu timeam fastidii intellegam ei, has illud audire consulatu te. Per ei laudem quaerendum, at vix omnis aperiri fabulas.",
        "Ut etiam dissentiunt usu. Et cum natum vivendo referrentur. Ut brute cetero pro, ad omnium latine vim, iisque iuvaret invenire id qui. Odio essent indoctum eum eu, ullum dolore ceteros ea quo. Eripuit noluisse pri.",
        "Lorem ipsum dolor sit amet, ex tamquam patrioque expetendis eam, ei viderer dolorum constituam pro, nam aliquip electram et. Eum eu integre moderatius, ne fabulas graecis pro, dico suas duo ut.",
        "Nam te evertitur tincidunt disputando, sed cu hinc signiferumque. In sit putant suscipit erroribus, no labore platonem vis. Usu timeam fastidii intellegam ei, has illud audire consulatu te. Per ei laudem quaerendum, at vix omnis aperiri fabulas.",
        "Ut etiam dissentiunt usu. Et cum natum vivendo referrentur. Ut brute cetero pro, ad omnium latine vim, iisque iuvaret invenire id qui. Odio essent indoctum eum eu, ullum dolore ceteros ea quo. Eripuit noluisse pri.",
        "Nam te evertitur tincidunt disputando, sed cu hinc signiferumque. In sit putant suscipit erroribus, no labore platonem vis. Usu timeam fastidii intellegam ei, has illud audire consulatu te. Per ei laudem quaerendum, at vix omnis aperiri fabulas.",
      );

      for ($i=0; $i < count($nombres); $i++):

        ?>
        <!-- slide -->
        <div class="team-slide col-xs-12 col-md-6 col-lg-4"><!-- tarjeta -->
          <a href="#" class="row"><!-- link -->
            <!--header  -->
            <header class="header-team col-12 no-padding">

              <div class="header-team-img imgLiquid imgLiquidNoFill">

                <img src="img/placeholder.edit.png" alt="Slider">

              </div>

            </header><!-- fin header -->
            <div class="col-12"><!-- contenido -->

              <h2 class="col-12 text-center"><?php echo $nombres[$i] ?></h2>

              <h4 class="col-12 text-center">

                <?php

                // if ($nombres[$i] === $nombres[0]):
                //
                //   echo $cargo[0];
                //
                //   elseif($nombres[$i] === 'Leo'):
                //
                //     echo $cargo[1];
                //
                //   else:
                //
                //     echo $cargo[2];
                //
                //   endif;
                //   ?>


                <?php
                switch ($nombres[$i]) {
                  case 'Carlos':
                  echo $cargo[0];
                  break;
                  case 'Patricia':
                  echo $cargo[4];
                  break;
                  case 'Julio':
                  echo $cargo[3];
                  break;
                  case 'Karim':
                  echo $cargo[4];
                  break;
                  case 'Brenda':
                  echo $cargo[2];
                  break;
                  case 'Katia':
                  echo $cargo[2];
                  break;
                  case 'Alejandro':
                  echo $cargo[5];
                  break;
                  case 'Olga':
                  echo $cargo[2];
                  break;
                  case 'Leo':
                  echo $cargo[1];
                  break;
                  case 'Santiago':
                  echo $cargo[2];
                  break;
                  default:
                  echo "Valor Deafult";//no se cumple
                  break;
                }


                ?>



              </h4>

              <p class="col-12">
                <?php echo $textos[$i]; ?>
              </p>

            </div><!-- fin contenido -->
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
