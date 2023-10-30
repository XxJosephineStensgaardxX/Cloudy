$('.slider__inner').slick({
	infinite: true,
	centerMode: true,
	variableWidth: true,
	autoplay: true,
	autoplaySpeed: 10000,
	arrows: false,
	pagination: false,
	responsive: [
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			},
		},
	],
})
