function product_page() {
//jQuery("#target").val(jQuery("#target option:first").val());
//jQuery(".wpcf7-select").prop("selectedIndex", -1);
//jQuery(".wpcf7-select").val(jQuery(".wpcf7-select option:eq(1)").val());


}


jQuery(document).ready(function(){
	
	jQuery("a.responsive-menu-item-link").click(function(){
    jQuery(".responsive-menu-submenu").toggle(500);
});
//console.log("okok");
/*  var nav = jQuery('#header');
 
 var scroll = jQuery(window).scrollTop();

    if (scroll >= 20) {
        jQuery(".header").addClass("downclassname");
    } else {
        jQuery(".header").removeClass("downclassname");
    }          
 */
			
/* var lastScrollTop = 0;
jQuery(window).scroll(function(event){
   var st = jQuery(this).scrollTop();
   if (st > lastScrollTop){
       // downscroll code
       jQuery('body').addClass('classname');
   } else {
      // upscroll code
       jQuery('body').removeClass('classname');
   }
   lastScrollTop = st;
});	 */		

if(jQuery(".wpcf7-select").length > 0) {
product_page();
}



});