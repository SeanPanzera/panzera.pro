let text = "If you're reading this, I've edited successfully.";

console.log(text);

$(function() {
	$("svg").click(function() {
		$(this).addClass("wobble");
	});
});

$(function() {
	$(".c-menu-button").click(function() {
		$(".c-nav-list-mobile").toggleClass("c-nav-list-mobile__open");
		$(this).toggleClass("c-menu-button__open");
	});
});