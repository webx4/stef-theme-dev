<?php
/* Template Name: shop */

 get_header();
 
 



?>
<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <header class="secondary-header">
               
            <div class="container">      
<h2> Shop</h2>
</div>

</header>
<div class="container">

			<?php

			/* Start the Loop */
			
                while ( have_posts() ) :
                    the_post();
                    the_content();
    
                    // get_template_part( 'template-parts/content/content', 'page' );
    
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                    
                    if(have_rows('product')):
                    
                    
                    while( have_rows('product')): the_row();
                    ?>
                    
                    <div class="product-row">
                    <div class="product-img">
                    <?php if(get_sub_field('image') !== "") { ?>
                    <img src="<?php the_sub_field('image') ?>" alt="">
                    <?php
                    }  else { echo "no image";} ?>
                    </div>
                    <div class="product-text">
                    <h3> <?php the_sub_field('title'); ?> </h3>
                    <p> <?php the_sub_field('description'); ?> </p>
                    <p> <?php the_sub_field('price'); ?> </p>
                    <a class="primaryButton" href="<?php the_sub_field('link'); ?>">Buy now</a>
                    </div>
                    
                    </div>
                    
                    <?php 
                    endwhile;
                     endif; ?>


    
              <?php  endwhile; // End of the loop.
                ?>
    
				

            </div>

		</main><!-- #main -->
	</div><!-- #primary -->
    <?php get_footer(); ?>
