jQuery(window).bind(' load resize orientationChange ', function () {
   var footer = jQuery("#footer-container");
   var pos = footer.position();
   var height = jQuery(window).height();
   height = height - pos.top;
   height = height - footer.height() -1;

   function stickyFooter() {
     footer.css({
         'margin-top': height + 'px'
     });
   }

   if (height > 0) {
     stickyFooter();
   }
});
