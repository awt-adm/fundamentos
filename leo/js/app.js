$(document).ready(()=>{

  imgLiquid()
  indexSlider()
})

function imgLiquid(){

  //*alert("Hola Mundo")*//
  $(".imgLiquid.imgLiquidFill").imgLiquid();
  $(".imgLiquid.imgLiquidNoFill").imgLiquid({
    fill:false
  });

}

function indexSlider() {
  //*alert("ooskfokoe")*//
  $("#team-slider").slick()
}
