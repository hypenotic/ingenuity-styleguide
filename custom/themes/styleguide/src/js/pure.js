 var topRange      = 200,  // measure from the top of the viewport to X pixels down
     edgeMargin    = 20,   // margin above the top or margin from the end of the page
     animationTime = 1200, // time in milliseconds
     contentTop = [];

$(document).ready(function(){ 


 // Set up content an array of locations
var mainmenu = document.getElementById('mainmenu');

var links = mainmenu.children;
console.log(links);


var anchors = links.children;
console.log(anchors);

 // Animate menu scroll to content
 // add event listener to listen for when a sidebar link is clicked
 // when this link is clicked
 // scroll to the top of a div with the corresponding anchor
 links.addEventListener.('click', function () {
  console.log('hey!');
 })



  $('#mainmenu').find('a').click(function(){
   var sel = this,
       newTop = Math.min( contentTop[ $('#mainmenu a').index( $(this) ) ], $(document).height() - $(window).height() ); // get content top or top position if at the document bottom
   $('html,body').stop().animate({ 'scrollTop' : newTop + 200 }, animationTime, function(){
    window.location.hash = $(sel).attr( 'href' );
   }); // the '- 50' leaves a bit of room above the section you scroll to
   return false;
 })

 
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