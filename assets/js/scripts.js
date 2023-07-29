$(function() {
	
	$("a, img").attr("draggable", "false");

	$(".header__menu-btn, .header__nav-close").on("click", function(e){
		e.preventDefault();
		$("body").toggleClass("menu-opened");
	});

	$(document).on("click", function(e) {
		if ($(e.target).closest(".header__nav, .header__menu-btn").length) return;
		$("body").removeClass("menu-opened");
		e.stopPropagation();
	});

});