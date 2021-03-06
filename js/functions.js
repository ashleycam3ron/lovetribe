//analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102149635-1', 'auto');
  ga('send', 'pageview');

//fancybox
jQuery(".fancybox, .gallery a").fancybox({
	padding: 0,
	helpers:  {
        title : {
            type : 'inside'
        }
    }
});

//remove empty p tags
jQuery('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
});

//bootstrap for mobile
if(window.matchMedia("(min-width: 768px)").matches){
	jQuery(function() {
		jQuery('.navbar .dropdown').hover(function() {
			jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
			}, function() {
			jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
			});

		jQuery('.navbar .dropdown > a').click(function(){
			location.href = this.href;
		});
		jQuery('a.dropdown-toggle').removeAttr('data-toggle');
	});
}

//equal height columns
equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;

jQuery(container).each(function() {

   $el = jQuery(this);
   jQuery($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

jQuery(window).load(function() {
  equalheight('.equal .col');
});

jQuery(window).resize(function(){
  equalheight('.equal .col');
});