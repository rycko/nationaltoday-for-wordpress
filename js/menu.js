$(document).ready(main);

var contador = 1;

function main(){
	$('.menu_bar').click(function(){
		$('.menu-mobile ul').toggle(); 
/*
		if(contador == 1){
			$('.menu-mobile').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.menu-mobile').animate({
				left: '-100%'
			});
		}*/

	});

};