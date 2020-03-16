<?php $header = get_field('header', get_the_ID());
 $background = $header['banner_image'];
 ?>
<div style="background-image: url(../<?php echo $background; ?>); width: 100%; height: 100%;">
    <!-- <header class="main-page-header"> -->
         <img class="logo" src="<?php echo get_template_directory_uri()."/assets/icons/logo-white.svg"  ?>" alt="">
         <h1 class="title"><?php echo get_bloginfo('name'); ?></h1>
         <p class="taglinle"><?php echo  get_bloginfo('description');?></p>
         <img src="<?php the_sub_field('banner_image') ?>" alt="">
    <!-- </header> -->
</div>
