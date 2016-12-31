( function( $ ) {


  // Step-scrolling.

$(function() {
  $.scrollify({
    section : ".jetpack-portfolio",
	  //interstitialSection : "#home_1",
    //easing: "easeOutExpo",
    scrollSpeed: 500,
    offset : 0,
	before:function(i) {
      var active = $(".active");

      active.addClass("remove");
	  
        $("[data-slide=" + i + "]").addClass("active");
        active.removeClass("remove active");
    },

  });
});
} )( jQuery );