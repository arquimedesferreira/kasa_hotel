<?php get_header();?>

        <h1>Apenas Teste </h1>
        <!-- Todos os post -->
        <?php  
                if(have_posts()){
                        while(have_posts()){ 
                         the_post();
        ?>                
                        
                         <div>  <?php the_post_thumbnail(); ?> </div>
                         <h2>   <?php the_title(); ?> </h2>
                         <div>  <?php the_content(); ?> </div>
                           
         <?php                  
                        }
                }
        ?>

<?php get_footer();?>
