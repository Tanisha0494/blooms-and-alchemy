<?php get_header(); //include header.php ?>

<main class="cf">
	
	<?php //THE LOOP
		if( have_posts() ): ?>
		
		<?php while( have_posts() ): the_post(); ?>

		<a href="<?php the_permalink(); ?>"> 

			<section id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> >
			
			<h2 class="post-title" > 

				

					<?php the_title(); ?> 

				

			</h2>

			<?php the_post_thumbnail('thumbnail', array('class' => 'thumb' )); //featured image (activate in functions.php) ?>

			<!-- <article class="entry-content cf" >
				<?php //logic!!! show short content on 'archive views' , show full content on single posts pages 
					//if( is_single() OR is_page() ){ 
						//the_content();
					//}else{
					//	the_excerpt();//shortened content
					//}
				?>
			</article> -->

			<!-- <article class="postmeta cf"> 
				<span class="author"> Posted by: <?php //the_author(); ?></span>
				<span class="date"><a href="<?php //the_permalink(); ?>"><?php //the_date(); ?></a></span>
				<span class="num-comments"><?php //comments_number(); ?></span>
				<span class="categories"><?php //the_category(); ?></span>
				<span class="tags"><?php //the_tags(); ?></span> 
			</article><!-- end postmeta - -->
						
		</section> </a><!-- end post -->
		
		<?php endwhile; ?>
		
		<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

</main>

<?php get_footer(); //include footer.php ?>