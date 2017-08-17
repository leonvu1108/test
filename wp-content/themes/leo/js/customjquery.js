jQuery(document).ready(function() {
	jQuery("#home-blog-btn-details").click(function() {
		jQuery(this).parents(".home-blog-info").css("height", "auto");
		jQuery(this).prev(".cnt-child").slideToggle();
	});
});