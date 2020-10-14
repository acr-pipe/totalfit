$(function(){
	$("#data-table-ajustess").dataTable({
        bFilter: false,
        bScrollInfinite: true,
        bSort: false,
        bLengthChange: false,
        order: [],
        bPaginate: false,
        info: false
    });

});

$(document).on('mouseover', '.itemajuste', function() {
	$(this).removeClass('bg-dark text-white');
	$(this).addClass('bggreen text-dark');
});

$(document).on('mouseleave', '.itemajuste', function() {
	$(this).addClass('bg-dark text-white');
	$(this).removeClass('bggreen text-dark');
});

function validar (varreglo,vmodulo) {

	var salida = {}

		/*VALIDACION FRONT END*/

	switch(vmodulo['modulo']) {
		case 'ajustes':
			if (vmodulo['tip'] == '') {
				err = validarajustes();
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

function validarajustes() {


	return false;
}

function endDetail(vid,vacc,modulo){

    return false;
}

function cargar(vmodulo,vid) {


	switch(vmodulo['modulo']) {
		case 'ajustes':
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
