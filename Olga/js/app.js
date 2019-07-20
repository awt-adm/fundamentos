$(document).ready(()=>{


  imagenes()

  indexSlider()

  flex()

})
//(     //ready con JS
//function($){
//alert(vanilla JS)
//})
//()

function imagenes() {

  $(".imgLiquid.imgLiquidFill").imgLiquid();
  $(".imgLiquid.imgLiquidNoFill").imgLiquid({
    fill:false
  });

}

function indexSlider() {

  $("#team-slider").slick()

}

function flex(){

  let caja = $(".slick-slide div:nth-child(1)")
  caja.addClass("div-flex")
}
  //float num= 0.001 solo se usa con numero decimales
  //let como variable declaras
  //busca div
  //ponerle clase
  //$("·team-slider").addclass("div-flex")
