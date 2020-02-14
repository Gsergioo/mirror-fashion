var contador = 0
$("#mostrar").click(function(){
	contador = contador + 1
	if(contador % 2 == 0){
		$(".novidades").removeClass("painel-aberto")
	}
	else{
		$(".novidades").addClass("painel-aberto")
	}
})

var contador2 = 0
$("#m2").click(function(){
	contador2 = contador2 + 1
	if(contador2 % 2 == 0){
		$(".mais-vendidos").removeClass("painel-aberto")
	}
	else{
		$(".mais-vendidos").addClass("painel-aberto")
	}
})