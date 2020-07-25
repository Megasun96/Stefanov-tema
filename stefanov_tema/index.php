       <?php
    /**
     * @package Stefanov_tema  
     */
    ?>

    <?php get_header(); ?>

    <main>
    <?php
    if ( have_posts() ) :
    	/* Start the Loop */
    	while ( have_posts() ) :
    		the_post(); ?>

    		<article id="post-<?php the_ID(); ?>">
    			<h1 class="post-title"><?php the_title(); ?></h1>
    			<div class="post-excerpt"><?php the_excerpt(); ?></div>
    		</article>

    	<?php endwhile;
    endif;
    ?>
    </main>

    <?php get_footer(); ?>

