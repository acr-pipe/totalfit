$(function(){
	$("#data-table-agendas").dataTable({
        bFilter: false,
        bScrollInfinite: true,
        bSort: false,
        bLengthChange: false,
        order: [],
        bPaginate: false,
        info: false
    });

		$("#todo").click();

});

$(document).on('click', '.tyclass', function() {
	var id = $(this).attr('id');
	$(".tyclass").removeClass('active');
	$("#"+id).addClass('active');
	switch (id) {
			case 'todo':
			$(".ts-item").removeClass('d-none');
			break;
			case id:
				$(".ts-item").addClass('d-none');
				$("[data-type=" + id + "]").removeClass('d-none');
			break;
	}
});

$(document).on('mouseover', '.ts-item', function() {
	$(this).children('h6').removeClass('txtgreen');
	$(this).children('h6').addClass('text-dark');
});

$(document).on('mouseleave', '.ts-item', function() {
	$(this).children('h6').removeClass('text-dark');
	$(this).children('h6').addClass('txtgreen');
});

function validar (varreglo,vmodulo) {

	var salida = {}

		/*VALIDACION FRONT END*/

	switch(vmodulo['modulo']) {
		case 'agenda':
			if (vmodulo['tip'] == '') {
				err = validaragenda();
				if ( err ) {
					return err;
				}
			}

			break;
		default:
			return 'Módulo no Existente';
			break;
	}

	salida = odin(varreglo,"f"+vmodulo['modulo']+"s");
	return salida;

}

function validaragenda() {


	return false;
}

function endDetail(vid,vacc,modulo){

    return false;
}

function cargar(vmodulo,vid) {


	switch(vmodulo['modulo']) {
		case 'agenda':
			vmodulo['sel'] = '';
			vmodulo['tbl'] = 3;
			vmodulo['where'] ='';
			break;
		default:
			return 'Módulo no Existente';
			break;
	}

	return vmodulo;
}

function cargarSintax(){
	var arr = {}

	arr['sel'] = '';
	arr['tbl'] = 4;
	arr['where'] = '';

	return arr;
}
