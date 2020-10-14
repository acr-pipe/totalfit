$(function(){
	$("#data-table-usuarioss").dataTable({
        bFilter: false,
        bScrollInfinite: true,
        bSort: false,
        bLengthChange: false,
        order: [],
        bPaginate: false,
        info: false
    });

		$("#tabexp").click();
});

$(document).on('click', '#lesionusuario', function() {
	var status = $(this).prop('checked');
	console.log('status', status);
	if (status == false) {
		$(".sectlesion").prop('disabled', true);
	} else {
		$(".sectlesion").prop('disabled', false);
	}
});

$(document).on('click', '#txtlesion', function() {
	$("#buscalesion").focus();
	$("#buscalesion").click();
});

$(document).on('focus', '#txtlesion', function() {
	$("#modal-lesion").modal('show');
});

$(document).on('click', '.tabs', function() {
	var tab = $(this).attr('id');
	var section = $("#"+tab).attr('section');
	$(".tabs").removeClass('bggreen');
	$(".tabs").addClass('bg-secondary text-white');
	$(".sectionusr").addClass('d-none');
	switch (tab) {
		case 'tabexp':
			console.log(tab, section);
			$("#"+tab).removeClass('bg-secondary text-white');
			$("#"+tab).addClass('bggreen dark-text');
			$("#"+section).removeClass('d-none');
		break;
		case 'tabrut':
			console.log(tab, section);
			$("#"+tab).removeClass('bg-secondary text-white');
			$("#"+tab).addClass('bggreen dark-text');
			$("#"+section).removeClass('d-none');
		break;
		case 'tabpre':
			console.log(tab, section);
			$("#"+tab).removeClass('bg-secondary text-white');
			$("#"+tab).addClass('bggreen dark-text');
			$("#"+section).removeClass('d-none');
		break;
	}
});

$(document).on('click', '.rutinas', function() {
	var rid = $(this).attr('id').substr(1);
	$(".rutinas").removeClass('active');
	$("#r"+rid).addClass('active');
});

$(document).on('click', '.rday', function() {
	var did = $(this).attr('id').substr(1);
	$(".rday").removeClass('bgpurple text-white');
	$(".rday").addClass('textpurple');

	$("#d"+did).removeClass('textpurple');
	$("#d"+did).addClass('bgpurple text-white');
});

$(document).on('click', '#btn-sigrut', function() {
	$("#tabrut").click();
	$("#d1").click();
});

$(document).on('click', '#btn-sigpre', function() {
	$("#tabpre").click();
});

$(document).on('click', '#newlinerutina', function() {
	var lines = $(".nlrut").length;
	console.log('lines', lines);
	$("#tabrnewutina").append('<tr class="nlrut" id="l'+lines+'">'+
		'<th scope="row"> <input type="text" class="form-control"> </th>'+
		'<td><input type="text" class="form-control"></td>'+
		'<td><input type="text" class="form-control"></td>'+
		'<td><input type="text" class="form-control"></td>'+
		'<td><input type="text" class="form-control"></td>'+
		'<td><button class="btn btn-light dellinerut" type="button" id="d'+lines+'"> <span class="txtpurple mt-1" data-feather="trash"></span> </button></td>'+
	'</tr>');
	feather.replace();
});

$(document).on('click', '.dellinerut', function() {
	var id = $(this).attr('id').substr(1);
	$("#l"+id).remove();
});

function validar (varreglo,vmodulo) {

	var salida = {}

		/*VALIDACION FRONT END*/

	switch(vmodulo['modulo']) {
		case 'usuarios':
			if (vmodulo['tip'] == '') {
				err = validarusuarios();
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

function validarusuarios() {


	return false;
}

function endDetail(vid,vacc,modulo){

    return false;
}

function cargar(vmodulo,vid) {


	switch(vmodulo['modulo']) {
		case 'usuarios':
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
