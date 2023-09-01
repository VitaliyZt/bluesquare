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


	const swiper_35 = new Swiper('.s35__items-box', {
		slidesPerView: "auto",
		loop: true,
		lazy: true,
      pagination: {
        el: ".s35__items-pagination",
        clickable: true,
      },
		breakpoints: {
			//  >= 
			576: {
				slidesPerView: 2,
			 },
			767: {
				slidesPerView: 2.3,
			 },
			992: {
			  slidesPerView: 2.896,
			},
		 },
	 });

	 $(".s56-item__title").on("click", function() {
		let head = $(this),
		  item = head.parent(),
		  activeCls = "_active",
		  bodyCls = ".s56-item__text",
		  itemActive = item.siblings("." + activeCls),
		  body = item.find(bodyCls),
		  itemActiveBody = itemActive.find(bodyCls);
		if (!item.hasClass(activeCls) && !body.is(":visible")) {
		  itemActiveBody.slideUp();
		  itemActive.removeClass(activeCls);
		  body.slideDown();
		  item.addClass(activeCls);
		} else {
		  body.css("display", "block").slideUp();
		  item.removeClass(activeCls);
		}
	 });

	 function nheaderHeight(){
		let header = $(".nheader__box");
		if($(window).scrollTop() > 0){
			header.addClass("_scrolled");
	  } else {
		header.removeClass("_scrolled");
	  }
	 }
	 $(window).on("load scroll", function(){
		nheaderHeight();
  	});


	$(".nheader__menu-btn").on("click", function(e){
		e.preventDefault();
		$("body").toggleClass("menu-open");
	});

	$(document).click(function(event) {
		if ($(event.target).closest(".nheader__nav, .nheader__menu-btn").length) return;
		$("body").removeClass("menu-open");
		event.stopPropagation();
	});


});