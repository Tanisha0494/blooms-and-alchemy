
<?php get_header(); //include header.php ?>

<main class="cf">
	
		<?php //THE LOOP
		if( have_posts() ): ?>
		
		<?php while( have_posts() ): the_post(); ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> >


			<?php the_post_thumbnail('feature', array('class' => 'thumb' )); //featured image (activate in functions.php) ?>

			<article class="entry-content cf" >
				<?php //logic!!! show short content on 'archive views' , show full content on single posts pages 
					if( is_single() OR is_page() ){ 
						the_content();
					}else{
						the_excerpt();//shortened content
					}
				?>

						
		</section><!-- end post -->
		
		<?php endwhile; ?>


	<?php endif;  //end THE LOOP ?>

	<?php storefront_recent_products('storefront_recent_products_args', array(
				'limit' 			=> 4,
				'columns' 			=> 4,
				'title'				=> __( 'Recent Products', 'storefront' )
				)
				 );
 ?>

	</main>


<?php get_footer(); //include footer.php ?>