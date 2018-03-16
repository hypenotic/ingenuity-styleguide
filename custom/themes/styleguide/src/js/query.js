 var topRange      = 200,  // measure from the top of the viewport to X pixels down
     edgeMargin    = 500,   // margin above the top or margin from the end of the page
     animationTime = 500, // time in milliseconds
     contentTop = [];

$(document).ready(function(){ 
 
 // adjust side menu
 $(window).scroll(function(){
  var winTop = $(window).scrollTop(),
      bodyHt = $(document).height(),
      vpHt = $(window).height() + edgeMargin;  // viewport height + margin
  $.each( contentTop, function(i,loc){
   if ( ( loc > winTop - edgeMargin && ( loc < winTop + topRange || ( winTop + vpHt ) >= bodyHt ) ) ){
    $('#mainmenu li')
     .removeClass('selected')
     .eq(i).addClass('selected');
   }
  })
 })
  
})
