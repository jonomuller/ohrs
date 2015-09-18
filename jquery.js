// makes current page in navbar active
$(function() {
  $('.navbar-nav li a').each(function() {
    var path = window.location.pathname;

    if (path == "/") {
      $(".navbar-nav #first-link").addClass('active');
    }
    if ("/" + $(this).attr('href')  ===  path) {
      $(this).parent().addClass('active');
    } else {
      // $(this).parent().removeClass('active');
    }
  });
});


$('#subscribe-form').ajaxChimp({
  url: 'http://ohrs.us11.list-manage.com/subscribe/post?u=0325897a8494aa5e44f729b85&amp;id=79376b972a'
});

// makes a:hover navbar link active
/*
$(".navbar-nav li a").hover (
  function () {
    $(this).parent().addClass("active");
  },
  function () {
    $(this).parent().removeClass("active");
  }
);
*/

// navbar resizer
// $(window).resize(function () {
//     navResizer();
// });
//
// // On load, initially, make sure to set the size.
// navResizer();
//
// function navResizer() {
//     var $li_w = 0;
//     var $ul_w = $(".navbar-nav").innerWidth();
//
//     $( ".navbar-nav li" ).each(function( index ) {
//         $li_w += $(this).innerWidth();
//     });
//
//     var li_margin = Math.floor(($ul_w-$li_w)/9) + 0.2;
//     $(".navbar-nav li").not("#first-link").css("margin-left",li_margin);
//     $("p.note").text( "Widths: ul.nav: " + $ul_w + " all li: " + $li_w + " Left margin: " + li_margin);
// }

// sticky sidebar
$(function(){ // document ready

  if (!!$('#sidebar').offset()) { // make sure ".sticky" element exists

    var stickyTop = $('#sidebar').offset().top; // returns number

    $(window).scroll(function(){ // scroll event

      var windowTop = $(window).scrollTop(); // returns number

      if (stickyTop < windowTop + 50 ){
        $('#sidebar').css({ position: 'fixed', top: 50 });
      }
      else {
        $('#sidebar').css('position','static');
      }

    });

  }

});
/*
// Smooth scrolling
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 100
        }, 300);
        return false;
      }
    }
});

*/



// Cache selectors
var lastId,
    topMenu = $("#sidebar"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({
      scrollTop: offsetTop + 250
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }
});

// $(function() {
//   $('[href=#' + location.pathname.split("/")[1] + '"]').addClass('active');
// });


/*
//testing
var loc = window.location.pathname;

$('nav.navbar').find('a').each(function() {
  $(this).toggleClass('active', $(this).attr('href') == loc);
});
*/
