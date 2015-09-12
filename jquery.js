var loc = window.location.pathname;

$('nav.navbar').find('a').each(function() {
  $(this).toggleClass('test', $(this).attr('href') == loc);
});
