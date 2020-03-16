<style>
    .bottomMenu > a {
  text-decoration: none; 
  color:#cef1f2;
  line-height:1.5rem; 
}
.bottomMenu > .menu > ul >li > a {
    text-decoration: none; 
  color:#cef1f2;
  line-height:1.5rem;  
}
.bottomMenu > .menu > ul >li > a:hover, 
.bottomMenu a:hover{
    color:#44c0c5;

}
</style>
<footer>
<div class="container">
<div class="bottomMenu">
<a href="<?php bloginfo('url'); ?>">home</a>
              <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>  
    </div>
</div>


</footer>

<?php  wp_footer(); ?>
</body>
</html>