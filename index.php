<?php get_header();?>
                          
         


<div class="section">
      <div class="container">
        <!--Inicio do Looop -->
         <?php  
                if(have_posts()){
                        while(have_posts()){ 
                         the_post();
        ?>   
        <div class="row">
        <!--Coluna  -->
          <div class="col-md-3">
            <img class="img-responsive" src=<?php the_post_thumbnail();?>
            <h2 class="text-center" ><?php the_title(); ?> </h2>
            <p><?php the_content(); ?>
              
          </div>
          <?php                  
                        }
                }?>
        </div>
        
      </div>
    </div>
<?php get_footer();?>
