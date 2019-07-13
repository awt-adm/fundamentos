$(document).ready(()=>{
  imagenes()
  indexSlider()
  flex()
})

function imagenes() {

  $(".imgLiquid.imgLiquidFill").imgLiquid()
  $(".imgLiquid.imgLiquidNoFill").imgLiquid({fill:false})
}

function indexSlider() {
  $("#team-slider").slick()
}

function flex() {
  let div = $(".slick-slide div:nth-child(1)")
  return div.addClass("div-flex")
}
