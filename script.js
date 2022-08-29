function myFunction() {
	document.getElementById("mobileMenu").classList.toggle("show");
	document.querySelector(".menu-button").classList.toggle("menu-button-cross");
 }
 window.onclick = function(event) {
	if (!event.target.matches('.menu-button')) {
		let dropdown = document.getElementById("mobileMenu");
		dropdown.classList.remove('show');
		document.querySelector(".menu-button").classList.remove("menu-button-cross");
	}
}

function myFunction2() {
	document.getElementById("lang-menu-mobile").classList.toggle("show");
 }
//  window.onclick = function(event) {
// 	if (!event.target.matches('.')) {
// 		let dropdown = document.getElementById("lang-menu-mobile");
// 		dropdown.classList.remove('show');
// 	}
// }