<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('admin.css') ?>
    <?php use_stylesheet('smoothness/jquery-ui-1.8.10.custom.css') ?>
    <?php include_stylesheets() ?>
    <?php use_javascript('jquery-1.5.1.min.js') ?>
    <?php use_javascript('jquery-ui-1.8.10.custom.min.js') ?>
    <?php use_javascript('jquery.ui.datepicker-es.js') ?>
    <?php use_javascript('custom/periodoAcademicoCode.js') ?>
    <?php include_javascripts() ?>
  </head>
  
  <body>
  	<div id="menu">
        <ul>
          <li>
            <?php echo link_to('Instituciones', 'institucion') ?>
          </li>
          <li>
            <?php echo link_to('Municipios', 'municipio') ?>
          </li>
          <li>
            <?php echo link_to('Estudiantes', 'estudiante') ?>
          </li>
          <li>
            <?php echo link_to('Servicios', 'servicio') ?>
          </li>
          <li>
            <?php echo link_to('Cursos', 'curso') ?>
          </li>
          <li>
            <?php echo link_to('Cursos Programados', 'curso_programado/index') ?>
          </li>
          <li>
            <?php echo link_to('Períodos Académicos', 'periodo_academico') ?>
          </li>
        </ul>
	</div>
    <?php echo $sf_content ?>
  </body>
</html>
