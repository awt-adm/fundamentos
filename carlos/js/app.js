$(document).ready(()=>{

  imagenes()
 indexSlider()

})

function imagenes() {

  $(".imgLiquid.imgLiquidFill").imgLiquid();
  $(".imgLiquid.imgLiquidNoFill").imgLiquid({
    fill:false
  });

}

function indexSlider() {

  $("#team-slider").slick()

}
