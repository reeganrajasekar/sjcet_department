document.addEventListener("DOMContentLoaded", function(){
    var header = document.getElementById("header").offsetHeight;
    window.addEventListener('scroll', function() {
      if (window.scrollY > header) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
        if(document.getElementById('sjcet_sub_menu')){
          document.getElementById('sjcet_sub_menu').style.top=(navbar_height+20) + 'px';
        }
        
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
        document.body.style.paddingTop = '0';
      } 
    });
});
if(document.getElementById('event')){
  document.getElementById('news').style.height=(document.getElementById('event').offsetHeight) + 'px';
  document.getElementById('holder').style.height=(document.getElementById('event').offsetHeight-100) + 'px';
}
jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({travelocity: 0.06}, settings);		
    return this.each(function(){
        var $strip = jQuery(this);
        $strip.addClass("newsticker")
        var stripHeight = 1;
        $strip.find("li").each(function(i){
            stripHeight += jQuery(this, i).outerHeight(true);
        });
        var $mask = $strip.wrap("<div class='mask'></div>");
        var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
        var containerHeight = $strip.parent().parent().height();	
        $strip.height(stripHeight);			
        var totalTravel = stripHeight;
        var defTiming = totalTravel/settings.travelocity;	
        function scrollnews(spazio, tempo){
        $strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
        }
        scrollnews(totalTravel, defTiming);				
        $strip.hover(function(){
            jQuery(this).stop();
        },
        function(){
            var offset = jQuery(this).offset();
            var residualSpace = offset.top + stripHeight;
            var residualTime = residualSpace/settings.travelocity;
            scrollnews(residualSpace, residualTime);
        });			
    });	
};

$(function(){
    $("ul#ticker01").liScroll();
});