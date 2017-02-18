<?php get_header();?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		
        <?php the_title();?>
        <?php the_content();?>

	<?php } // end while
} // end if?>


<?php get_footer();?>