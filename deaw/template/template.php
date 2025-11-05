<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
     <!-- Título dinámico de la página y del sitio -->
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
      <!-- Enlace al CSS principal -->
    <link href="<?php site_path(); ?>/template/style.css" rel="stylesheet" type="text/css" /> 
    
</head>
<body>
<div class="wrap">

    <header>
        <!-- Nombre del sitio -->
        <h1><?php site_name(); ?></h1>
        <!-- Menú de navegación dinámico -->
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>

    <article>
         <!-- Título de la página -->
        <h2><?php page_title(); ?></h2>
         <!-- Contenido dinámico de la página -->
        <?php page_content(); ?>
    </article>

    <footer>
          <!-- Pie de página con año actual y versión del sitio -->
        <small><?php echo date('Y'); ?> <?php echo "DAW2V-0613" ?>.<br><?php site_version(); ?></small>
    </footer>

</div>
</body>
</html>
