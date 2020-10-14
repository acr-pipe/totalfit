$(function(){
	$("#data-table-ejercicioss").dataTable({
        bFilter: false,
        bScrollInfinite: true,
        bSort: false,
        bLengthChange: false,
        order: [],
        bPaginate: false,
        info: false
    });

});

$(document).on('click', '#txtlesion', function() {
	$("#buscalesion").focus();
	$("#buscalesion").click();
});

$(document).on('focus', '#txtlesion', function() {
	$("#modal-lesion").modal('show');
});

function validar (varreglo,vmodulo) {

	var salida = {}

		/*VALIDACION FRONT END*/

	switch(vmodulo['modulo']) {
		case 'ejercicios':
			if (vmodulo['tip'] == '') {
				err = validarejercicios();
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

function validarejercicios() {


	return false;
}

function endDetail(vid,vacc,modulo){

    return false;
}

function cargar(vmodulo,vid) {


	switch(vmodulo['modulo']) {
		case 'ejercicios':
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
