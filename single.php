<?php get_header();?>

<?php 
    if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
               
?>

<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <!--- Inicio Carrocel-->
            <div id="fullcarousel-example" data-interval="false" class="carousel slide"
            data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="<?php the_post_thumbnail_url();?>">
                  <div class="carousel-caption">
                    <h2>Title</h2>
                    <p>Description</p>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
              <a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <h1><?php the_title();?></h1>
            <p> <?php the_content();?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
        </div>
      </div>
    </div>


<?php
         } // end while
    } // end if
?>

<?php get_footer();?>