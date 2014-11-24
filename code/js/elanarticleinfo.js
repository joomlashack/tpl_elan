jQuery(document).ready(function($) {
	function setArticleInfoHeight() {
		jQuery('.wrapp-article-info').each(function (i) {
			jQuery(this).css({height: jQuery(this).children('.article-info-inner').height() + 'px'});
		});
	}
	setArticleInfoHeight();

	jQuery(window).resize(function(){	
		setArticleInfoHeight();
	});
});
