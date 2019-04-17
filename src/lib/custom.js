let text = "If you're reading this, I've edited successfully.";

console.log(text);

$(function() {
	$("svg").click(function() {
		$(this).addClass("wobble");
	});
});

$(function() {
	$(".c-submenu__link").hover(function() {
		$(".o-submenu").addClass("o-submenu__open");
	});
});

$(function() {
	$(".o-submenu").mouseover(function () {
		$(this).addClass("o-submenu__open");
		$(this).mouseout(function() { 
			$(this).removeClass("o-submenu__open");
		});
	});
}); 


$(function() {
	$(".c-menu-button").click(function() {
		$(".c-nav-list-mobile").toggleClass("c-nav-list-mobile__open");
		$(this).toggleClass("c-menu-button__open");
		$("body").toggleClass("modal");
	});
});