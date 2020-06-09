const page = $('html, body');
const main = $('main');

// body
main.click(() => {
  if ($('.navbar-burger').hasClass('is-active')) {
    $('.navbar-burger').toggleClass('is-active');
    $('.navbar-menu').slideUp().toggleClass('is-active');
  }
});

// navbar

$('.burger').click(() => {
    $('.navbar-burger').toggleClass('is-active');

    if ($('.navbar-burger').hasClass('is-active')) {
      $('.navbar-menu').slideDown().toggleClass('is-active');
    } else {
      $('.navbar-menu').slideUp().toggleClass('is-active');
    }
  }
);

// navbar-menu

$('nav a').click(function() {
  var id = $(this).attr('href');
  console.log(id);  
  var position = $(id).offset().top;
  $('html,body').animate({
    'scrollTop':position
  }, 500);
});

// back to top
$('.top').click(() => {
  page.animate({
    'scrollTop' : 0
  }, 500);
});
