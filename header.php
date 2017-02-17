<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- traz o diretorio raiz -->
        <?php $home = get_template_directory_uri();?>
        <link rel="stylesheet" type="text/css" href="<?=$home;?>/style.css">
        <?php wp_head();?>
        
    </head>
  <body>