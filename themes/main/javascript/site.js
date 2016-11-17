
/*=========================
 *	Banner Colouring
 *========================*/

$(document).ready(function () {
	var back = ["#4d5f73","#28773c","#c4696e","#DCAD46","#8a5c9b"];
	var rand = back[Math.floor(Math.random() * back.length)];
	$('#banner').css('background-color',rand);
})


$(document).scroll(function(){

	var st=($(document).scrollTop()/4);
	var opac=1-($(document).scrollTop()/600);
	
	$('#banner .banner-inner').css({
		"margin-top":st,
		"margin-bottom":-st,
		"opacity":opac
	});

});


/*=========================
 *	Mobile Nav
 *========================*/

$('#nav_btn').click(function(){
	var nav = $('#nav');
	if($('body').hasClass('nav')){
		$('body').removeClass('nav');
	}else{
		$('body').addClass('nav');
	}
});

$(document).click(function(event) { 
    if($('body').hasClass("nav")) {
	    if(!$(event.target).closest('#header').length && !$(event.target).is('#header')) {
			$('body').removeClass('nav');
        }
    }        
})