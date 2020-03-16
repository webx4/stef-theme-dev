
<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
        <!-- // individual item and it will keeping looping through 
        // brings back an array  -->
        <article>
        <header>
       <?php the_title('<h2>', '</h2>'); 
       
       ?>
       <?php  the_post_thumbnail('')  ?>
     
       <p> <?php  the_excerpt(); ?>
       </header>
        </article>
        <?php
        
    endwhile; // end while
endif; // end if
?>


