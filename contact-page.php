<?php
/* Template Name: Contact */

 get_header();

 



?>
<style>
   
    
.form-section{
    background-color: #ecfafa; 
padding:20px;
width:90%;
margin: 0 auto;

}


div.wpforms-container-full .wpforms-form button[type=submit]{
   
    background-color: #44c0c5;

  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  color: white; 
  border:none;
  width:100%;

}
div.wpforms-container-full .wpforms-form button[type=submit]:hover{
    background-color: #cef1f2;
    color: #44c0c5;
    border:none;
  
}
.container-full .wpforms-form .wpforms-two-thirds{
    width:100%;

}
div.wpforms-container-full .wpforms-form .wpforms-two-thirds{
    width:100%;
}
.wpforms-field-label{
    font-family: "Raleway";
    color: #0f2c2d;
}
.decoration2{
    display:none;
}
@media (min-width: 768px){
.form-section{
    width: 40%; 
margin: 0 auto;
}
.decoration2{
    display: block;
    position: absolute;
    top: 1060px;
    left: 190px;
    z-index: -2;
    transform: rotate(-90deg);
    opacity: 0.7;
    width: 30%;
}
.decoration3{
    width: 150px;
    display: block;
    position: absolute;
    top: 540px;
    right: 23%;
    z-index: -2;
    opacity: 0.7;
}
    
}

</style>
<div id="primary" class="content-area">
<img class="decoration2" src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?>" alt="succulant">
<img class="decoration3" src="<?php echo get_template_directory_uri() . '/assets/images/flower2.png'; ?>" alt="succulant">  
<main id="main" class="site-main" style="margin-bottom:5rem;">
          

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
    
				

            

		</main><!-- #main -->
    </div><!-- #primary -->
    

<div style="margin-top: 20rem;">
    <?php get_footer(); ?>
            </div>