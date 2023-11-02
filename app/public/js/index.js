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
			dots: true,
			customPaging: () => "<div class='slider__dot'></div>",
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

const closeBurger = () => {
	burgerList.classList.remove('active')
	document.body.style.overflow = null
}

const moveHeaderList = () => {
	if (window.innerWidth < 768) {
		burgerWrapper.parentElement.appendChild(burgerList)
	} else {
		burgerWrapper.appendChild(burgerList)
	}
}

moveHeaderList()

window.addEventListener('resize', () => {
	moveHeaderList()
})

const move = ''

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

const changeImageProductPage = (input, color) => {
	//console.log(input);
	const title = document.querySelector('.product-name-header')
	console.log(title)

	const titleArray = title.innerText.split(' ')
	//why dont we use id's here?
	titleArray[titleArray.length - 1] = color
	title.innerHTML = titleArray.join(' ')

	document.querySelector('.chosenPicture').src = input.value

	const carousel_images = document.querySelectorAll('.othersock-item')

	carousel_images.forEach(img => {
		console.log(img.attributes.src.value, input.value)
		if (img.attributes.src.value === input.value) {
			img.parentElement.style.display = 'none'
		} else {
			img.parentElement.style.display = null
		}
	})

	// Remove the "active" class from all colors
	// const colors = document.querySelectorAll(removeClass)
	// colors.forEach(function (label) {
	// label.classList.remove('active__choose-style')
	// })

	// Add the "active" class to the clicked color
	// clickedColor.classList.add('active__choose-style')
}
