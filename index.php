<?php get_header();?>
<?php $home_index = get_template_directory_uri();?>

                        
    

    <!---  Carrocel de imagems  -->
   
 <div id="fullcarousel-example" data-interval="false" class="carousel slide"
    data-ride="carousel">
      <div class="carousel-inner">
       <?php  
              //Faz uma busca  por  posts do tipo carrocel 
              $args= array( 'post_type'=>'Carrocel' );
               $loop =new  WP_Query($args);
                if($loop->have_posts()){
                        $cont=0;
                        while($loop->have_posts()){ 
                         $loop->the_post();
                         
                         if($cont==0){ ?>

                          <div class="item active">
                                <img src="<?=the_post_thumbnail_url();?>">
                                <div class="carousel-caption">
                                <h2><?=the_title();?></h2>
                                <p><?=the_content();?></p>
                              </div>
                           </div>


                         <?php $cont++;
                         }else{ ?>
                            <div class="item">
                              <img src="<?=the_post_thumbnail_url();?>">
                              <div class="carousel-caption">
                                <h2><?=the_title();?></h2>
                                <p><?=the_content();?></p>
                              </div>
                            </div>

                            <?php }
                }
          }// Fim do Loop  ?>

      </div>
      
      <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
    </div>
  <!--- Fim do  Carrocel de imagems  -->


<div class="section">
      <div class="container">
        <!--Inicio do Looop -->
        <div class="row">
         <?php  
              $args= array( 'post_type'=>'item' );
               $loop =new  WP_Query($args);
                if($loop->have_posts()){
                        while($loop->have_posts()){ 
                         $loop->the_post();
        ?>   
        <a href="<?php the_permalink(); ?>">
            
            <!--Coluna  -->
              <div class="col-md-3">
                <img class="img-responsive" src="<?php the_post_thumbnail_url();?>">
              
                <h2 class="text-center" ><?=the_title(); ?> </h2>
                <p><?=the_content(); ?></p>
                  
              </div>
            </a> 
              <?php                  
                            }
                    }?>
          </div>  
          
      </div>
    </div>
<?php get_footer();?>
