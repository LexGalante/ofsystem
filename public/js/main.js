$(document).ready(function(){
	/**
	 * INICIO - CONFIGURAÇÕES DE PLUGINS
	 */
	//Alerts
	$(".alert").alert();
	//Tooltip
	$('[data-toggle="tooltip"]').tooltip();
	//Popover
	$('[data-toggle="popover"]').popover();
	//Mask
	$('.date').mask('00/00/0000');
	$('.time').mask('00:00:00');
	$('.date_time').mask('00/00/0000 00:00:00');
	$('.date_year').mask('0000');
	$('.cep').mask('00000-000', {
		placeholder: "_____-___",
		selectOnFocus: true,
		removeMaskOnSubmit: true
	});
	$('.renavam').mask('00000000000');
	$('.phone').mask('0000-0000', {
		placeholder: "____-____",
		selectOnFocus: true
	});
	$('.phone_with_ddd').mask('(00) 0000-0000',{
		placeholder: "(__) _____-____",
		selectOnFocus: true,
		removeMaskOnSubmit: true
	});
	$('.phone_us').mask('(000) 000-0000');
	$('.mixed').mask('AAA 000-S0S');
	$('.cpf').mask('000.000.000-00', {
		reverse: true,
		placeholder: "___.___.___-__",
		selectOnFocus: true,
		removeMaskOnSubmit: true
	});
	$('.cnpj').mask('00.000.000/0000-00', {
		reverse: true,
		placeholder: "__.___.___/___-__",
		selectOnFocus: true
	});
	$('.placa').mask('aaa-9999', {
		placeholder: "___-____",
	});
	$('.money').mask('000.000.000.000.000,00', {
		reverse: true
	});
	$('.money2').mask("#.##0,00", {
		reverse: true
	});
	$('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
		translation: {
			'Z': {
				pattern: /[0-9]/, optional: true
			}
	    }
	});
	$('.ip_address').mask('099.099.099.099');
	$('.percent').mask('##0,00%', {reverse: true});
	$('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
	$('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
	$('.fallback').mask("00r00r0000", {
	  translation: {
	    'r': {
	    	pattern: /[\/]/,
	    	fallback: '/'
	    },
	   	placeholder: "__/__/____"
	  }
	});
	$('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
	//JCONFIRM & TOASTR
    $(function(){
    	jconfirm.defaults = {
	        title: 'Olá',
	        content: 'Deseja confirmar a operação?',
	        contentLoaded: function(){},
	        icon: '',
	        confirmButton: '<i class="fa fa-check"></i>',
	        cancelButton: '<i class="fa fa-ban"></i>',
	        confirmButtonClass: 'btn-success',
	        cancelButtonClass: 'btn-danger pull-right',
	        theme: 'white',
	        animation: 'scale',
	        animationSpeed: 400,
	        animationBounce: 1.5,
	        keyboardEnabled: false,
	        container: 'body',
	        containerFluid: false,
	        confirm: function () {},
	        cancel: function () {},
	        backgroundDismiss: true,
	        autoClose: false,
	        closeIcon: null,
	        columnClass: 'col-md-6 col-md-offset-3',
	        onOpen: function(){},
	        onClose: function(){},
	        onAction: function(){}
	    };
    	
    	toastr.options = {
			closeButton: false,
			debug: false,
			newestOnTop: false,
			progressBar: false,
			positionClass: "toast-top-right",
			preventDuplicates: true,
			onclick: null,
			showDuration: 300,
			hideDuration: 1000,
			timeOut: 3500,
			extendedTimeOut: "1000",
			showEasing: "swing",
			hideEasing: "linear",
			showMethod: "fadeIn",
			hideMethod: "fadeOut"
		}
    });
	/**
	 * FIM - CONFIGURAÇÕES DE PLUGINS
	 */
});