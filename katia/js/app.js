$(document).ready(()=>{

  imagenes()
  indexSlider()
  flex()
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

function flex() {
  //busca div
let caja = $(".slick-slide div:nth-child(1)")
  //ponerle Clase
  caja.addClass("div-flex")
}
