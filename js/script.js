$(document).ready(function () {


$(".imgtechno").click(function(){
        $(this).animate({
            left: '250px',
            opacity: '1',
            height: '250px',
            width: '250px'
        });
    });

$("#mynav").click(function(){
	$(this).hide();
})
 
 $("#mynav").click(function(){
    $(this).show();
});
});

