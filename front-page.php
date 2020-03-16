<?php 
 get_header();

/* Template Name: front page */
?>
<main>
   <style>
      .paint{
         background-image: url("http://stef-guilly-a.web.dmitcapstone.ca/wordpress/wp-content/uploads/2020/02/paint-stripe.png");
         background-size: 100%;
         background-repeat:no-repeat;
         background-position: 40px;

        padding-top:10rem;
        padding-bottom:6rem;

      }
      .leaves > img {
         width:80%;
    
  }
  .leaves{
   background-image: url("http://stef-guilly-a.web.dmitcapstone.ca/wordpress/wp-content/uploads/2020/02/leaves.png");
   background-size: 50%;
         background-repeat:no-repeat;
         background-position: 90% 75%;
         padding-top: 5rem;
    padding-bottom: 10rem;
  }
  .paint-circle{
   background-image: url("http://stef-guilly-a.web.dmitcapstone.ca/wordpress/wp-content/uploads/2020/02/paint-circle.png");
   background-size: 70%;
         background-repeat:no-repeat;
         background-position: 150% 70%;
         
  }
  .decoration{
     display:none;
  }
  @media (min-width: 768px){

   .paint-circle{
 
   background-size: 20%;
         background-repeat:no-repeat;
         background-position: 0% 75%;
         
  }
  .leaves{
 
   background-size: 50%;
         background-repeat:no-repeat;
         background-position: 90% 90%;
         padding-top: 5rem;
    padding-bottom: 10rem;
  }
  .paint{
         
         background-size: 50%;
         background-repeat:no-repeat;
         background-position: 40px;

        padding-top:10rem;
        padding-bottom:10rem;

      }
      .decoration{
         display:block;
         position:absolute; 
         top: 580px; 
         left:-100px;
      }



  }
      </style>

<img class="decoration" src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?>" alt="succulant">
 <?php  

  // arguments array
  $args = array(  
     'post_type' => 'home_page_content',
     
     
     'posts_per_page' => 1, 
    
      
 );

 // the result of your query
 $results = new WP_Query( $args ); 

 // the wordpress loop using the array returned.
 
 while ( $results->have_posts() ) : $results->the_post(); 
 $header = get_field('header', get_the_ID());
 $p1 = $header['intro_paragraph_one'];
 $p2= $header["intro_paragraph_two"];
 $p2Img =$header["paragraph_two_image"];
 $featured =$header["featured_paragraph"];
 $background = $header['banner_image'];
 $featureimg1 =$header["featured_image_one"];
 $featureimg2 =$header["featured_image_two"];

 
 
 ?>
 <div style= "background-image: url(<?php echo $background; ?>); background-size:cover; background-position:center; height:737px;">
 
</div>
<section class="paint-circle">

 <div class="flex-home container paint">
<div>
   <h2>Stef Guilly</h2>
   <p class="tagline"> Author, writer & educator </p>
</div>
<div>
 <?php echo $p1 ?>
</div>
 </div>
 <div class="flex-home container">
    <div>
 <?php echo $p2 ?>
</div>
<div class="leaves">
   <img src="<?php echo $p2Img; ?>">
</div>
 </div>
</section>
<div style="margin:4rem 0;">
<img style="width:100%; " src="<?php echo get_template_directory_uri() . '/assets/images/typing-banner.jpg'; ?>" alt="Photo by: Liz Pittman.">
</div>
<section class="paint-circle">
 <div class="container poem">
    <div>

 <img src="<?php echo $featureimg1; ?>">
</div>
<div>
<img src="<?php echo $featureimg2; ?>">
</div>
<div>
   <h3>Poetry</h3>
 <?php echo $featured ?>
 <div style="margin-top: 2rem; margin-bottom:2rem;">
 <a class="primaryButton" href="<?php echo  get_home_url() . '/works'; ?>">explore poetry</a>
</div>
</div>

 </div>
</section>
 
 <?php 
  endwhile;
?>
 
</main>
<?php get_footer(); ?>