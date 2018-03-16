//GENERATE SIDEBAR MENU FROM MAIN H2 ELEMENT VALUES ================================

// find all the elements with the class of menu-heading
	//specifically applied to all main h2 elements to be a part of main nav
var menuheadings = document.getElementsByClassName('sidebar-link');
// specify ul or ol into which the <li>s will be appended
var mainmenu = document.getElementById('mainmenu');
var mobilemenu = document.getElementById('mobile-menu');
var injections = document.getElementsByClassName('injection-menu');

console.log(menuheadings);

//for each items in the menuheadings array do the following:
for (var i = 0; i < menuheadings.length; i++) {
	// grab the value of h2 - stored in 'headingvalue'
		var headingvalue = menuheadings[i].innerHTML;
	// remove special characters and spaces, and replace them with an underscore
		var plainvalue = headingvalue.replace(/[^A-Z0-9]+/ig, "_"); 
	// convert all uppercase characters to lowercase
		var lowercase = plainvalue.toLowerCase();

	// create a link (<a>)
	var menuLink = document.createElement("A");
		// give said link an href of # + 'lowercase'
        menuLink.setAttribute("href", "#" + lowercase);
        // menuLink.setAttribute("href", "#scroll-nav_" + i);

        menuLink.className = "sidebar-anchor";
        // menuLink.setAttribute("id", "sidebar-anchor_" + i);

        // append the text value of 'headingvalue' into the created <a> element
        menuLink.appendChild(document.createTextNode(headingvalue));

    // create a <li> element
    var listItem = document.createElement("LI");
    	// append 'menulink' (which is an <a>) into the created <li> element
        listItem.appendChild(menuLink);

        // append 'listItem' (which is a <li>) into 'mainmenu' (which is an <ul>)
        // mainmenu.appendChild(listItem);
        // now that we have two items - used jQuery to append it to multiple containers
        $('.injection-menu').append(listItem);
}


var links = mainmenu.children;
console.log(links);

var clickFn = function() {
  var hash = links[i].firstChild.hash;
  console.log(hash);
};


$('ul#mainmenu li a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top - 150
            }, 500);
            return false;
        }
    }
});


// Make variables to hold some boundary measurements
var topRange      = 200,  // measure from the top of the viewport to X pixels down
    edgeMargin    = 500,   // margin above the top or margin from the end of the page
    contentTop = [];

$(document).ready(function(){ 

    // Set up an array of locations based on h2 positions
     $('#mainmenu').find('a').each(function(){
      contentTop.push( $( $(this).attr('href') ).offset().top );
      console.log(contentTop);
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

// FOR MOBILE MENU ===========================

$('#menu-toggle').on('click', function() {
  $('#nav-mobile').toggle(400);
  $('#menu-toggle').toggleClass('toggle-select toggle-unselect');
});

$('#mobile-menu li a').on('click', function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top - 110
            }, 500);
             $('#nav-mobile').toggle(400);
             $('#menu-toggle').removeClass('toggle-select');
            return false;
        }
    }
});






