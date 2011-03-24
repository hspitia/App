$(document).ready(function() {

    $("li.list_actions_select a").click(function() {
        // $(this).slideUp();
        table_row = $(this).parent().parent().parent().parent();
        cursoId = $(table_row).find('input').attr('value');
        alert(table_row.attr('class') + '\n id:' + cursoId);
        
        container = jQuery("#" + containerName);
        
        // $.ajax({
		// 	url: url,
		// 	type: 'POST',
		// 	dataType: 'json',
		// 	data: "curso_id=" + cursoId,
		// 	timeout: 4000,
		// 	beforeSend: function(){
		// 	},
		// 	complete: function(){
		// 	},
		// 	error: function(xhr, textStatus, errorThrown){
		// 		msg = "Error " + errorThrown;
		// 		alert(msg);
		// 	},
		// 	success: function(data){
		// 		// container.html(data);
				
		// 	}
		// });
        
    });
   
});
