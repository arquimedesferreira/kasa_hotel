<?php get_header();?>
<?php $home_index = get_template_directory_uri();?>

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
    

    <!---  Carrocel de imagems  -->
 <div id="fullcarousel-example" data-interval="false" class="carousel slide"
    data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?=$home_index?>/img/dining-table-1348717_960_720.jpg">
          <div class="carousel-caption">
            <h2>Title</h2>
            <p>Description</p>
          </div>
        </div>
        <div class="item">
          <img src="<?=$home;?>/img/imagem mesa montada.jpg">
          <div class="carousel-caption">
            <h2>Title</h2>
            <p>Description</p>
          </div>
        </div>
        <div class="item">
          <img src="<?=$home;?>/img/JPG_9ab6ebc36f346a8fcbf0c8e670c17b69.jpg">
          <div class="carousel-caption">
            <h2>Title</h2>
            <p>Description</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
    </div>

<div class="section">
      <div class="container">
        <!--Inicio do Looop -->
         <?php  
              $args= array( 'post_type'=>'item' );
               $loop =new  WP_Query($args);
                if($loop->have_posts()){
                        while($loop->have_posts()){ 
                         $loop->the_post();
        ?>   
        <a href="<?php the_permalink(); ?>">
            <div class="row">
            <!--Coluna  -->
              <div class="col-md-3">
                <img class="img-responsive" src="<?php the_post_thumbnail_url();?>">
              
                <h2 class="text-center" ><?=the_title(); ?> </h2>
                <p><?=the_content(); ?></p>
                  
              </div>
              <?php                  
                            }
                    }?>
            </div>
        </a>   
      </div>
    </div>
<?php get_footer();?>
