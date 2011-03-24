$(document).ready(function()
{
	$('#lista_cursos_loader').hide();
	$('#lista_instituciones_loader').hide();
});

function loadPage(page, containerName, url) {
	container = jQuery("#" + containerName);
	loaderElement = '#' + containerName + '_loader'
	// alert("url: " + url);
	$.ajax({
			url: url+"?page="+page,
			type: 'POST',
			dataType: 'html',
			timeout: 4000,
			beforeSend: function(){
				$(loaderElement).show();
			},
			complete: function(){
				$(loaderElement).hide();
			},
			error: function(xhr, textStatus, errorThrown){
				msg = "Error " + errorThrown;
				alert(msg);
			},
			success: function(data){
				container.html(data);
			}
	});
	
	/* Forma alternativa resumida (Jobeet) 
	 *
	$(loaderElement).show();
	container.load(url+"?page="+page, 
		{},
		function(){
			$(loaderElement).hide();
		});
	*/
}

