$(document).ready(()=>{

imagenes()


})

function imgagenes() {

  $(".imgLiquid.imgLiquidFill").imgLiquid();
  $(".imgLiquid.imgLiquidNoFill").imgLiquid({
    fill:false
  });

}
