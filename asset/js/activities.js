$(function() {
	$("#activities-carousel").flexslider({
		animation: "slide", 
		controlNav: false, 
		animationLoop: false, 
		slideshow: false, 
		itemWidth: 240, 
		itemMargin: 5, 
		asNavFor: "#activities-slider", 
      });

      $("#activities-slider").flexslider({ 
      	animation: "fade", // mode: slide, fade; 
      	controlNav: false, 
      	animationLoop: true, 
      	slideshow: true, 
      	sync: "#activities-carousel", 
      });
});