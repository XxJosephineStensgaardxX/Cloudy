window.addEventListener('DOMContentLoaded', () => {
	const slider = document.querySelector('.slider__inner')

	if (slider)
		$(slider).slick({
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
})

let burger = document.getElementById('hamburger-bttn')

let burgerList = document.querySelector('.header__list')
let burgerWrapper = document.querySelector('.header__inner')

burger.addEventListener('click', function () {
	burgerList.classList.toggle('active')

	if (burgerList.classList.contains('active')) {
		document.body.style.overflow = 'hidden'
	} else {
		document.body.style.overflow = null
	}
})

const moveHeaderList = () => {
	if (window.window > 1024) {
		burgerWrapper.parentElement.appendChild(burgerList)
	} else {
		burgerWrapper.appendChild(burgerList)
	}
}

moveHeaderList()

window.addEventListener('resize', () => {
	moveHeaderList()
})

const changeImage = (imgId, newSrc, removeClass, clickedColor) => {
	document.getElementById(imgId).src = newSrc

	// Remove the "active" class from all colors
	const colors = document.querySelectorAll(removeClass)
	colors.forEach(function (label) {
		label.classList.remove('active__choose-style')
	})

	// Add the "active" class to the clicked color
	clickedColor.classList.add('active__choose-style')
}
