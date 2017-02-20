<!DOCTYPE html>
<html>
    <head>
           <meta charset="utf-8">
            <title> 
         <?php carregaTitulo() ?>
         </title>
        <!-- traz o diretorio raiz -->
        <?php $home = get_template_directory_uri();?>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <!-- CSS sepados para cada item  -->
        <link rel="stylesheet" href="<?= $home ?>/assets/css/reset.css">
	      <link rel="stylesheet" href="<?= $home; ?>/assets/css/comum.css">
	      <link rel="stylesheet" href="<?= $home; ?>/assets/css/ddheader.css">


        <link rel="stylesheet" type="text/css" href="<?=$home; ?>/style.css">



        

        <?php wp_head();?>
        
    </head>
  <body>



    
    <header>
    <div class="container">
              <?php 
               //$args =array('theme_location'=>'header-menus','show_home'=>'Home');
               //wp_page_menu($args);
              ?>
      </div>
    </header


<div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>Brand</span></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active testeindex">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


  