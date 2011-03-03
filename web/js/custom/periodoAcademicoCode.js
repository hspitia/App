$(document).ready(function()
{
	function makeCode() {
		var year = $("#periodo_academico_inicio_year").val();
		var calendario = $("#periodo_academico_Calendario_id option:selected").text();
		var codigo = year + '-' + calendario;
		                 
		$("#periodo_academico_codigo").attr('readonly', 'false');
		$("#periodo_academico_codigo").val(codigo);
		$("#periodo_academico_codigo").attr('readonly', 'true');
	}
	
	$("#periodo_academico_Calendario_id").change(makeCode);
	$("#periodo_academico_inicio_year").change(makeCode);
	makeCode();
});
