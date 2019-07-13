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

  $('.team-slider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    fade: true,
    arrows: false,
    infinite: true,
    cssEase: 'linear',
    centermode: true

  });
}

$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});
