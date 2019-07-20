// Ready con jQuery
$(document).ready(()=>{

  imagenes()
  indexSlider()
  flex()

})
// Ready con puro JS
// (
//   function($) {
//
//     alert("Vanilla JS")
//
//   }
// )()

//
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

  // buscar div - listo
  let caja = $(".slick-slide div:nth-child(1)")
  // ponerle clase
  caja.addClass("div-flex")

}
