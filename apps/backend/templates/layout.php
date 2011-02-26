<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('admin.css') ?>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  
  <div id="menu">
        <ul>
          <li>
            <?php echo link_to('Instituciones', 'institucion') ?>
          </li>
          <li>
            <?php echo link_to('Municipios', 'municipio') ?>
          </li>
        </ul>
   </div>

  
  <body>
    <?php echo $sf_content ?>
  </body>
</html>
