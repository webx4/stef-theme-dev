<?php
/* Template Name: CustomPageT1 */

 get_header();
 get_template_part('template-parts/headers/front-page', 'header');
 



?>
<style>
    .contact-form{
        width:50%; 
        margin:0 auto;
    }
    
    .contact-submit {
  background-color: #cef1f2;
  color: #44c0c5;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
}
.contact-submit:hover {
  background-color: #44c0c5;
  color: white;
}
.wp-forms-form{

 width:50%; 
        margin:0 auto;

}
.wp-forms-submit {
    background-color: #cef1f2;
  color: #44c0c5;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;  
}
div.wpforms-container-full .wpforms-form button[type=submit]{
    background-color: #cef1f2;
  color: #44c0c5;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;

}
div.wpforms-container-full .wpforms-form button[type=submit]:hover{
    background-color: #44c0c5;
  color: white; 
}
</style>
<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
<h2> page temp</h2>
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
    
                endwhile; // End of the loop.
                ?>
    
				

            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

