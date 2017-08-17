jQuery(document).ready(function() {
    //slider content of post at main page
    jQuery("#home-blog-btn-details").click(function() {
        jQuery(this).parents(".home-blog-info").css("height", "auto");
        jQuery(this).prev(".cnt-child").slideToggle();
    });
    //menu when scroll website
    jQuery(window).scroll(function() {
        var height = jQuery(window).scrollTop();
//alert(jQuery( window ).width());
        if (jQuery( window ).width() > 1024) {
            if(height > 0) {
                // do something
                jQuery("a.navbar-brand img").animate ({
                    height: "60px",
                    width: "120px"
                }, 70, function() {
                // Animation complete.
                });
                jQuery(".navbar .navbar-nav > li > a").animate ({
                    paddingTop: "20px",
                    paddingBottom: "20px"
                }, 70, function() {
                // Animation complete.
                });
                jQuery(".navbar").animate ({
                    minHeight: "20px"
                }, 70, function() {
                // Animation complete.
                });
            }

            if (height == 0) {
                // do something
                jQuery("a.navbar-brand img").animate ({
                    height: "100px",
                    width: "200px"
                }, 70, function() {
                // Animation complete.
                });
                jQuery(".navbar .navbar-nav > li > a").animate ({
                    paddingTop: "40px",
                    paddingBottom: "40px"
                }, 70, function() {
                // Animation complete.
                });
                jQuery(".navbar").animate ({
                    minHeight: "100px"
                }, 70, function() {
                // Animation complete.
                });
            }
        }
    });
});