$(document).ready(function () {

	// le  carrousel
   setInterval(function(){
      $("#carrousel ul").animate({marginLeft:-350},800,function(){
        $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 5000);

   //animation réseaux socio
   $( "#button3" ).click(function() {
  		$( "#rezo" ).animate({
    		opacity: 0.25,
    		left: "+=50",
    		height: "toggle"
 		 }, 5000, function() {
  		});
	});

   // animation exemples des sites
	$( "#button2" ).click(function() {
		$( "#demo" ).animate({
		    width: [ "toggle", "swing" ],
		    height: [ "toggle", "swing" ],
		    opacity: "toggle"
		  }, 5000, "linear", function() {
		   
		});
	});

// animation cv
$( "#button1" ).click(function() {
  		$( "#cv" ).animate({
    		opacity: 0.25,
    		left: "+=50",
    		height: "toggle"
 		 }, 5000, function() {
  		});
	});

//changer la coulore des buttons
    $("button").mouseenter(function(){
        $(this).toggleClass("background");
    });

});