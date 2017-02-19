<!DOCTYPE html>
<html>
    <head>
           <meta charset="utf-8">
        <!-- traz o diretorio raiz -->
        <?php $home = get_template_directory_uri();?>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?=$home; ?>/style.css">
         <title> 
         <?php carregaTitulo() ?>
         </title>

        <?php wp_head();?>
        
    </head>
  <body>

              <?php 
               $args =array(
                 'theme_location'=>'header-menus'
                );
                 wp_nav_menu($args);
              ?>


  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs">

           

            <li class="nav-item">
              <a href="#" class="active nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Messages</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>  


  