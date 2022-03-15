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

$(document).ready(function(){
  $("a").tooltip();
  $("span").tooltip();
  $("img").tooltip();
  $("span").tooltip();
});

function normalizeSlideHeights() {
  $('.carousel').each(function(){
    var items = $('.carousel-item', this);
    // reset the height
    items.css('min-height', 0);
    // set the height
    var maxHeight = Math.max.apply(null, 
        items.map(function(){
            return $(this).outerHeight()}).get() );
    items.css('min-height', maxHeight + 'px');
  })
}

$(window).on(
  'load resize orientationchange', 
  normalizeSlideHeights);
