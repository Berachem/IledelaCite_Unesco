const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})

$(document).on('scroll', function (e) {
  if ($(window).width() > 992) {
 $('.navbar').css('bg-dark', ($(document).scrollTop() / 500));
}
})
