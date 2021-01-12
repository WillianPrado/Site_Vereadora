/*scripts.js */
$(function() {
	// Dispara quando um elemento  data-toggle="lightbox" seja clicado
	$(document).on('click', '[data-toggle="lightbox"]', function(ev){
		//Impede que o link siga em frente
		ev.preventDefault();
		//Mostra a imagem usando o lightbox
		$(this).ekkoLightbox({
			alwaysShowClose: true
		});
	});

	//campo de busca
	$("#txtBusca").on("keyup",function(){
		var value = $(this).val().toLowerCase();

		$("#tabela tr").filter(function(){
			var existe = $(this).text().toLowerCase().indexOf(value) > -1;
			$(this).toggle(existe);
		});
	});
	
});