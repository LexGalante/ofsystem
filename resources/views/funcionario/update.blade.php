@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('funcionario.index') }}"><i class="fa fa-table"></i> Funcionários</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-edit"></i> Alterar</li>
</ol>
<div class="card mb-3">
	<!-- FORM -->
	<form method="post" action="{{ route('funcionario.update', ['id' => $funcionario->id]) }}">
		{{ csrf_field() }}
    	<div class="card-header">
    		<i class="fa fa-edit"></i> Alterar Funcionário
    	</div>
    	<div class="card-body">
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
                    	<select required="required" class="form-control" id="cargo_id" name="cargo_id">
                    		<option>CARGO</option>
                    		@foreach ($cargos as $cargo)
                    			@if($funcionario->cargo_id == $cargo->id)
                    				<option selected="selected" value="{{ $cargo->id }}">{{ $cargo->cargo }}</option>
                    			@else
                    				<option value="{{ $cargo->id }}">{{ $cargo->cargo }}</option>
                    			@endif	
                    		@endforeach	
                    	</select>
                	</div>
				</div>				
				<div class="col-md-3">
    				<div class="form-group">
    					@if($funcionario->nome)
                        	<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $funcionario->nome }}">
                        @else
                        	<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ old('nome') }}">
                        @endif	
                	</div>
				</div>
				<div class="col-md-5">
    				<div class="form-group">
    					@if($funcionario->sobrenome)
                        	<input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" value="{{ $funcionario->sobrenome }}">
                        @else
                        	<input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" value="{{ old('sobrenome') }}">
                        @endif
                	</div>
				</div>
				<div class="col-md-2"> 
					<div class="text-center">
            			<div class="btn-group" data-toggle="buttons">
            				@if($funcionario->situacao == OfSystem\Enum\Situacao::ATIVO)
                              	<label class="btn btn-success active">
                                	<input type="radio" name="situacao" id="ativo" value="A" autocomplete="off" checked> Ativo
                              	</label>
                              	<label class="btn btn-danger">
                                	<input type="radio" name="situacao" id="inativo" value="I" autocomplete="off"> Inativo
                            	</label>
                            @else
                            	<label class="btn btn-success active">
                                	<input type="radio" name="situacao" id="ativo" value="A" autocomplete="off" checked> Ativo
                              	</label>
                              	<label class="btn btn-danger">
                                	<input type="radio" name="situacao" id="inativo" value="I" autocomplete="off"> Inativo
                            	</label>
                            @endif		
                        </div>	
            		</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
    				<div class="form-group">
    					<div class="input-group">
    						@if(OfSystem\Util\Cast::dateMaskFrontend($funcionario->nascimento))
                            	<input class="form-control datepicker date" type="text" id="nascimento" name="nascimento" value="{{ OfSystem\Util\Cast::dateMaskFrontend($funcionario->nascimento) }}">
                            @else
                            	<input class="form-control datepicker date" type="text" id="nascimento" name="nascimento" value="{{ old('nascimento') }}">
                            @endif                    		
                    		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    	</div>	
                    	<small class="form-text text-muted"><i class="fa fa-calendar"></i> Nascimento</small>
                	</div>	
    			</div>
    			<div class="col-md-1">
        			<div class="form-group">
                    	<select class="form-control" id="genero" name="genero">
                    		<option value="O">Genêro</option>
                          	<option value="M">Masculino</option>
                        	<option value="F">Feminino</option>
                    	</select>
                    	<small class="form-text text-muted"><i class="fa fa-transgender"></i> Sexo</small>
                	</div>
                </div>		
            	<div class="col-md-2">
    				<div class="form-group">
    					@if($funcionario->cpf )
                        	<input class="form-control cpf" data-mask="000.000.000-00" data-mask-selectonfocus="true" value="" id="cpf" name="cpf" value="{{ $funcionario->cpf }}">
                        @else
                        	<input class="form-control cpf" data-mask="000.000.000-00" data-mask-selectonfocus="true" value="" id="cpf" name="cpf" value="{{ old('cpf') }}">
                        @endif
    					<small class="form-text text-muted"><i class="fa fa-address-card"></i> CPF</small>
    				</div>
    			</div>
    			<div class="col-md-1">
    				<div class="form-group">
    					@if($funcionario->filhos)
                        	<input class="form-control small-int" value="0" id="filhos" name="filhos" value="{{ $funcionario->filhos }}">
                        @else
                        	<input class="form-control small-int" value="0" id="filhos" name="filhos" value="{{ old('filhos') }}">
                        @endif
    					<small class="form-text text-muted"><i class="fa fa-asterisk"></i> Filhos</small>
    				</div>
    			</div>
    			<div class="col-md-2">
    				<div class="form-group">
    					@if($funcionario->salario)
                        	<input class="form-control money" id="salario" name="salario" value="{{ $funcionario->salario }}">
                        @else
                        	<input class="form-control money" id="salario" name="salario" value="{{ old('salario') }}">
                        @endif
    					<small class="form-text text-muted"><i class="fa fa-money"></i> Salário</small>
    				</div>
    			</div>
    			<div class="col-md-2">
    				<div class="form-group">
    					<div class="input-group">
    						@if(OfSystem\Util\Cast::dateMaskFrontend($funcionario->admissao))
                            	<input class="form-control datepicker date" type="text" id="admissao" name="admissao" value="{{ OfSystem\Util\Cast::dateMaskFrontend($funcionario->admissao) }}">
                            @else
                            	<input class="form-control datepicker date" type="text" id="admissao" name="admissao" value="{{ old('admissao') }}">
                            @endif 
                    		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    	</div>	
                   		<small class="form-text text-muted"><i class="fa fa-calendar"></i> Admissão</small>
                	</div>	
    			</div>
    			<div class="col-md-2">
    				<div class="form-group">
    					<div class="input-group">
    						@if(OfSystem\Util\Cast::dateMaskFrontend($funcionario->demissao))
                            	<input class="form-control datepicker date" type="text" id="demissao" name="demissao" value="{{ OfSystem\Util\Cast::dateMaskFrontend($funcionario->demissao) }}">
                            @else
                            	<input class="form-control datepicker date" type="text" id="demissao" name="demissao" value="{{ old('demissao') }}">
                            @endif
                    		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    	</div>	
                   		<small class="form-text text-muted"><i class="fa fa-calendar"></i> Demissão</small>
                	</div>	
    			</div>
			</div>
			<div class="row">
        		<div class="col-md-3">
                	<div class="input-group">
                		@if($funcionario->cep)
                        	<input class="form-control cep" id="cep" name="cep" value="{{ $funcionario->cep }}">
                        @else
                        	<input class="form-control cep" id="cep" name="cep" placeholder="CEP" value="{{ old('cep') }}">
                        @endif
                  		<span class="input-group-btn">
                			<button class="btn btn-info" type="button"><i class="fa fa-search"></i> Buscar CEP</button>
                  		</span>
                	</div>
              	</div>
              	<div class="col-md-7">
            		<div class="form-group">
            			@if($funcionario->logradouro)
                        	<input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro" value="{{ $funcionario->logradouro }}">
                        @else
                        	<input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro" value="{{ old('logradouro') }}">
                        @endif
                	</div>	
            	</div>	
            	<div class="col-md-2">
            		<div class="form-group">
            			@if($funcionario->numero)
                        	<input type="text" class="form-control" id="numero" name="numero" placeholder="Nº" value="{{ $funcionario->numero }}">
                        @else
                        	<input type="text" class="form-control" id="numero" name="numero" placeholder="Nº" value="{{ old('numero') }}">
                        @endif
                	</div>	
            	</div>	
        	</div>
        	<div class="row">
    			<div class="col-md-5">
            		<div class="form-group">
            			@if($funcionario->bairro )
                        	<input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="{{ $funcionario->bairro }}">
                        @else
                        	<input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="{{ old('bairro') }}">
                        @endif
                	</div>	
            	</div>
            	<div class="col-md-5">
            		<div class="form-group">
            			@if($funcionario->cidade)
                        	<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="{{ $funcionario->cidade }}">
                        @else
                        	<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="{{ old('cidade') }}">
                        @endif
                	</div>	
            	</div>	
            	<div class="col-md-2">
            		<div class="form-group">
                    	<select class="form-control" id="uf" name="uf">
                          	<option value="AC">AC</option>
                          	<option value="AL">AL</option>
                            <option value="AM">AM</option>
                            <option value="AP">AP</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                    	</select>
                	</div>
            	</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12">
    				<table class="table table-bordered" id="tabela-contatos" width="100%" cellspacing="0">
    					<thead>
                        	<tr class="bg-info">
                        		<th colspan="3">
                        			<button type="button" id="btn-novo-contato" class="btn btn-success btn-sm" data-toggle="tooltip" title="Clique aqui para adicionar um novo contato com cliente"><i class="fa fa-plus"></i> Novo Contato</button>
                        		</th>
                        	</tr>            
                            <tr class="bg-info">
                                <th width="20%" class="text-center text-white">Tipo</th>
                                <th width="65%" class="text-center text-white">Contato</th>
                                <th width="5%" class="text-center text-white">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($funcionario->contatos as $key => $contato)
                        		<tr>
                                	<td>
                                		<div class="form-group">
                                			<select class="form-control" id="contato[{{ ($key + 1) }}][tipo]" name="contato[{{ ($key + 1) }}][tipo]" required>
                                				<option value="C">CELULAR</option>
                                				<option value="T">TELEFONE FIXO</option>
                                				<option value="E">E-MAIL</option>
                                				<option value="S">WEB SITE</option>
                                			</select>
                                		</div>
                                	</td>
                                	<td>
                                		<div class="form-group">
                                			<input type="text" value="{{ $contato->contato }}" class="form-control" id="contato[{{ ($key + 1) }}][contato]" name="contato[{{ ($key + 1) }}][contato]" placeholder="Informe o Contato" required>
                                		</div>
                                	</td>
                                	<td align="center">
                                		<button type="button" onclick="removerLinha(this)" class="btn btn-sm btn-danger btn-block"><i class="fa fa-times"></i></button>
                                	</td>
                                </tr>
                        	@endforeach
                        </tbody>
    				</table>
    			</div>	    		
    		</div>
        </div>
    	<div class="card-footer">
    		<button type="submit" id="btn-submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Salvar</button>
    	</div>
	</form>
	<!-- /FORM -->
	<!-- JS do form -->
	<script src="{{ asset('js/funcionario/funcionario.js') }}"></script>
</div>	
@endsection