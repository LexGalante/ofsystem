$(document).ready(function(){
	//Adiciona linha da tabela contato cliente
	$('#btn-novo-contato').on('click', function(){
		inserirLinhaTabelaContato();
	});
});
/**
 * INSERE LINHA NA TABELA DE CONTATOS
 * @param num_linha
 */
function inserirLinhaTabelaContato()
{
	var tabela_contatos = $('#tabela-contatos-cliente').find('tbody');
	var tabela_contatos_size = tabela_contatos.find('tr').length;
	var num_linha = tabela_contatos_size+1;
	var linha;
	linha += '<tr>';
	linha += '	<td>';
	linha += '		<div class="form-group">';
	linha += '			<select class="form-control" id="contato['+ num_linha +'][tipo]" name="contato['+ num_linha +'][tipo]" required>';
	linha += '				<option value="C">CEL</option>';
	linha += '				<option value="T">TEL</option>';
	linha += '				<option value="E">E-MAIL</option>';
	linha += '				<option value="S">SITE</option>';
	linha += '			</select>';
	linha += '		</div>';
	linha += '	</td>';
	linha += '	<td>';
	linha += '		<div class="form-group">';
	linha += '			<input type="text" class="form-control phone_with_ddd" data-mask="(00) 000000-0000" id="contato['+ num_linha +'][contato]" name="contato['+ num_linha +'][contato]" placeholder="Informe o Contato" required>';
	linha += '		</div>';
	linha += '	</td>';
	linha += '	<td align="center">';
	linha += '		<button type="button" onclick="removerLinha(this)" class="btn btn-sm btn-danger btn-block"><i class="fa fa-times"></i></button>';
	linha += '	</td>';
	linha += '</tr>';
	tabela_contatos.append(linha);
}
/**
 * REMOVE LINHA NA TABELA DE CONTATOS
 * @param element
 */
function removerLinha(element)
{
	var tr = $(element).closest('tr');		
    tr.fadeOut(400, function() {
    	tr.remove();
    });		
    return false;
}
