$(".Navigation-link").before("<div class='button'></div>");
$(".Navigation-link:last").before("<div class='last-button'></div>");
$(".Navigation-listItem:last .button").remove();


$("#searchform").appendTo("#nav_menu-2");
$("#search-3").remove();


$('.Navigation-link').mouseenter(function() {
  $(this).animate({
    left: "54px"
  }, 200);
});


$('.Navigation-link').mouseleave(function() {
  $(this).animate({
    left: "44px"
  }, 200);
});


$("#gform_page_1_1").wrap("<div class='u-gridCol4'></div>");
$("#gform_page_1_2").wrap("<div class='u-gridCol4'></div>");


$("header").css({
  'height': ($("#container").height() + 190 + 'px')
});



$('ul#menu-mobile').each(function() {
  var list = $(this),
    select = $(document.createElement('select')).insertBefore($(this).hide());

  $('>li a', this).each(function() {
    var target = $(this).attr('target'),
      option = $(document.createElement('option'))
      .appendTo(select)
      .val(this.href)
      .html($(this).html())
      .click(function() {
        if (target === '_blank') {
          window.open($(this).val());
        } else {
          window.location.href = $(this).val();
        }
      });
  });
  list.remove();

  $("#mobile-menu .instagram").remove();
  // $("#mobile-menu option").prepend("").text('test');


});
