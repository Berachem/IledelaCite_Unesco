const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})




// ----- TOOLTIPS ----

$(document).ready(function(){
  $('.dropdown-menu').addClass('bg-dark');
  $("a").tooltip();
  $("span").tooltip();
  $("img").tooltip();
  $("span").tooltip();
});

// -----caroussel same height----

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

// ----- SCROLL NAV BAR EFFECTS ----

$(window).on(
  'load resize orientationchange', 
  normalizeSlideHeights);


  $(window).scroll(function() {
    if ($(document).scrollTop() > 200) {
      
      $('.navbar').addClass('bg-dark');
      $('.navbar').addClass('change-color');
      
      document.getElementsByClassName('arrows')[0].style.visibility='hidden';
    } else {
      
      $('.navbar').removeClass('bg-dark');
 
      $('.navbar').removeClass('change-color');
      document.getElementsByClassName('arrows')[0].style.visibility='visible';
    }
  });


// -----Barre de progression (en haut) ----

  $(document).on("scroll", function(){
    var pixels = $(document).scrollTop();
    var pageHeight = $(document).height() - $(window).height();
    var progress = 100 * pixels / pageHeight;
    
    $("div.progress").css("width", progress + "%");
  })


// -----GO TOP BUTTON ----

//Get the button:
mybutton = document.getElementById("goTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  mybutton.style.display = "block";
} else {
  mybutton.style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
  

}

jQuery('#Parcours2').click( function(e) {
  jQuery('#collapse1').collapse('hide');
});
jQuery('#Parcours1').click( function(e) {
  jQuery('#collapse2').collapse('hide');
});