<?php echo $form->renderFormTag(url_for('curso_programado/seleccionarPeriodoAcademico')) ?>
  <table>
  	<?php
	  	// echo $form['_csrf_token'];
	  	// echo $form[$form->getCSRFFieldName()]->render();
	  	echo $form['PeriodoAcademico_id']->renderRow(array(), 'Período Académico');
	  	echo $form->renderHiddenFields();
  	?>
    <tr>
      <td colspan="2">
        <input type="submit" />
      </td>
    </tr>
  </table>
</form>
