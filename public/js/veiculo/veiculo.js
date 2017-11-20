$(document).ready(function(){
	/*
	 * TYPEAHEAD - CLIENTES
	 */
	var cliente = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
		remote: {
			url: '/ajax/cliente/%QUERY',
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
						$('#typeahead').typeahead('val', data.nome + ' ' + data.sobrenome);
						codCliente(context.suggestions[0], false);
					}
				},
				notFound: function(){
					return '<div class="card"><div class="card-block"><strong class="text-danger">Resultado não encontrado.</strong></div></div>';
				}, 
				suggestion: function(data){
					return '<div class="card w-400"><div class="card-block"><p><strong class="text-primary"><i class="fa fa-caret-right"></i>&nbsp;' + data.nome + ' ' + data.sobrenome +'</p></hr></div></div>';
				}
			}
		}
	).bind("typeahead:selected", function(obj, data, name) {
		$('#typeahead').typeahead('val', data.nome + ' ' + data.sobrenome);
		codCliente(data, false);
	}).bind("typeahead:close", function(obj, data, name) {
        if($('#typeahead').typeahead('val') == ''){
        	codCliente(null, true)
        }
	});
});
/**
 * 
 * @param JSON cliente
 * @param BOOL remove
 * @returns
 */
function codCliente(cliente, remove)
{
	if(remove){
		$('#cliente_id').val('');
	}
	else{
		$('#cliente_id').val(cliente.id);
	}
}