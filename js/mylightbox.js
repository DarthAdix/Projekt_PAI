// const lightbox = document.createElement('div')
// lightbox.id = 'lightbox'
// document.body.appendChild(lightbox)

// const div_cont = document.createElement('div')
// const div_row = document.createElement('div')
// lightbox.appendChild(div_cont)
// div_cont.appendChild(div_row)

// const images = document.querySelectorAll('.bron')
// images.forEach(image => {
// 	image.addEventListener('click', e => {
// 		lightbox.classList.add('active')
// 		const div_image = document.createElement('div')
// 		const div_caption = document.createElement('div')
// 		const img = document.createElement('img')
// 		const caption = document.createElement('div')
// 		img.src = image.src
// 		caption.innerHTML = "<h2>" + image.alt + "</h2>"
// 		while (div_row.firstChild) {
// 			div_row.removeChild(div_row.firstChild)
// 		}
// 		div_row.appendChild(div_image)
// 		div_image.appendChild(img)
// 		div_row.appendChild(div_caption)
// 		div_caption.appendChild(caption)
// 	})
// })

// lightbox.addEventListener('click', e => {
// 	if (e.target !== e.currentTarget) return
// 	lightbox.classList.remove('active')
// })

var lightbox = document.getElementById('lightbox')
var lightbox_image = document.getElementById('lightbox-image')
var lightbox_caption = document.getElementById('lightbox-caption')
var span = document.getElementById("close-button")

const images = document.querySelectorAll('.bron')
images.forEach(image => {
	image.addEventListener('click', e => {
		lightbox.classList.add('active')
		const img = document.createElement('img')
		const caption = document.createElement('div')
		img.src = image.src
		caption.innerHTML = "<h2>" + image.alt + "</h2>"
		while (lightbox_image.firstChild) {
			lightbox_image.removeChild(lightbox_image.firstChild)
		}
		while (lightbox_caption.firstChild) {
			lightbox_caption.removeChild(lightbox_caption.firstChild)
		}
		lightbox_image.appendChild(span)
		lightbox_image.appendChild(img)
		lightbox_caption.appendChild(caption)
	})
})

lightbox.addEventListener('click', e => {
	if (e.target !== e.currentTarget) return
	lightbox.classList.remove('active')
})


span.addEventListener('click', e => {
	lightbox.classList.remove('active')
})