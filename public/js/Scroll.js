function $(selector){
	return document.querySelector(selector);
}
function $$(selector){
	return document.querySelectorAll(selector);
}
function scrollTopPos(){
	var supportPageOffset = window.pageXOffset !== undefined,
		isCSS1Compat = ((document.compatMode || "") === "CSS1Compat"),
		y = supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;
	return y;
}
var distance = 50,
	timeout = 30;
function navScroll(curPos, sectionTop){
	if (Math.abs(curPos - sectionTop) <= distance) {
		curPos = sectionTop;
	} else {
		var dir = (curPos > sectionTop) ? -distance : distance;
		curPos += dir;
		setTimeout(function(){
			navScroll(curPos, sectionTop)
		}, timeout);
	}
	window.scrollTo(0, curPos);
}
function navClick(e){
	e.preventDefault();
	var curPos = scrollTopPos(),
		href = this.getAttribute("href"),
		sectionTop = $(href).offsetTop;
	navScroll(curPos, sectionTop);
}
var navItems = $$('.navigation-menu a');
for(var i = 0; i < navItems.length; i++){
	navItems[i].addEventListener("click", navClick);
}

//  active
var menuElements = $$('.navigation-menu a');
for (var i in menuElements) {
  menuElements[i].onclick = makeActive
}
function makeActive(e) {
  var menuElements = $$('.navigation-menu a');
  for (var k in menuElements) {
    menuElements[k].classList.remove('active')
}
  this.classList.add('active')
}
