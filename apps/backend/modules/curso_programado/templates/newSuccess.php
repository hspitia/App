<?php 
/* use_stylesheets_for_form($form) */
?>
<?php 
/*use_javascripts_for_form($form) */ 
?>

<?php 
	echo javascript_include_tag('custom/loadPage');
	
?>

<?php echo $form->renderFormTag('curso_programado/new') ?>
  <table>
    <?php echo $form ?>
    <tr>
      <td colspan="2">
        <input type="submit" />
      </td>
    </tr>
    <tr>
    		<td>Curso:</td>
    		<td id="curso_seleccionado">No definido</td>
    </tr>
  </table>
</form>

<div id="lista_cursos">
   <?php 
   include_partial('curso_programado/lista_cursos', 
   	   array(
   	   	   'pager' 		=> $cursosPager, 
   	   	   'container' 	=> 'lista_cursos',
   	   	   'url'			=> url_for('curso_programado/getListaCursos'),
   	   	   )) ?>
</div>

<div id="lista_instituciones">
   <?php 
   include_partial('curso_programado/lista_instituciones', 
   	   array(
   	   	   'pager' 		=> $institucionesPager,
   	   	   'container' 	=> 'lista_instituciones',
   	   	   'url' 		=> url_for('curso_programado/getListaInstituciones'),
   	   	   )) 
   ?>
</div>
  
<script type="text/javascript">
	// as we have the <div id="data"> we'll completely reload it's contents
	// var listaCursosContainer = jQuery("#lista_cursos");
	// $('#loading').hide();
	// $('div.loading').hide();
	// note that you'll need a routing for the offers index to point to module: offers, action: index..
	// var url = "<?php echo url_for("curso_programado/getListaCursos"); ?>";
	
	// function loadPage(page, containerName, url) {
	// 	container = jQuery("#" + containerName);
	// 	// alert("url: " + url);
	// 	$.ajax({
	// 		url: url+"?page="+page,
	// 		type: 'POST',
	// 		dataType: 'html',
	// 		timeout: 4000,
	// 		beforeSend: function(){
	// 		  // $('#loading').show();
	// 		},
	// 		complete: function(){
	// 		  // $('#loading').hide();
	// 		},
	// 		error: function(xhr, textStatus, errorThrown){
	// 		   msg = "Error " + errorThrown;
	// 		   alert(msg);
	// 		},
	// 		success: function(data){
	// 			container.html(data);
	// 		}
	// 	});
		
	// 	// container.load(url+"?page="+page);
	// }
	
	
	
</script>
  

