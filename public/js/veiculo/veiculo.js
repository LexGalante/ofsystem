$(document).ready(function(){
	/*
	 * TYPEAHEAD - CLIENTES
	 */
	var cliente = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
		remote: {
			url: 'ajax/cliente?q=%QUERY',
		    wildcard: '%QUERY'
		}
	});
	
	$("#typeahead").typeahead({
			hint: true,
			highlight: true,
			minLength: 1
		},
		{
			name: 'cliente',
			source: cliente,
			templates:{
				header: function(context){
					if (context.suggestions.length == 1) {
						insereCliente(context.suggestions[0]);
					}
				},
				notFound: function(){
					return '<div class="card"><div class="card-block"><strong class="text-danger">Resultado não encontrado.</strong></div></div>';
				}, 
				suggestion: function(data){
					return '<div class="card w-75"><div class="card-block"><p><strong = class"text-primary">'+ data.id +'</strong>' + data.nome + '</p></div></div>';
				}
			}
		}
	).bind("typeahead:selected", function(obj, data, name) {
        insereCliente(data, true);
	});
});