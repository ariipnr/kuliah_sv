var menu = window.document.getElementById('menu');

window.onscroll = function  () {
	if (window.pageYOffset){
		menu.classList.remove('no-sticky');
		menu.classList.add('sticky')		
	}
	else {
		menu.classList.remove('sticky');
		menu.classList.add('no-sticky')	
	}
};

	window.setTimeout("waktu()", 1000);
 
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}
