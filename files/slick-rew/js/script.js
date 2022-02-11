$(document).ready(function(){
	$('.sliderrew').slick({
		arrows:true,
    dots:false,
		slidesToShow:3,
		autoplay:false,
		speed:1000,
		autoplaySpeed:800,
		responsive:[
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 2
        }
      },
			{
				breakpoint: 992,
				settings: {
					slidesToShow:2
				}
			},
			{
				breakpoint: 577,
				settings: {
					slidesToShow:1
				}
			}
		]
	});
});

