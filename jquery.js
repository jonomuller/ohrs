var loc = window.location.pathname;

$('nav.navbar').find('a').each(function() {
  $(this).toggleClass('active', $(this).attr('href') == loc);
});
