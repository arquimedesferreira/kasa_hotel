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


<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">
            <h2>A title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          
        </div>
      </div>
    </div>
<?php get_footer();?>
