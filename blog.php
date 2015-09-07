<?php
/**
 * Blog Template
 *
   Template Name: Blog 
 *
 */
   ?>
<?php get_header(); ?>
<section id="classes" class="ash blog">
   <div class="container">
      <div class="row">
         <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h1 class="">Blog</h1>
            <div class="row">
               <?php
                  global $post;
                  $args = array( 'posts_per_page' => 10, 'category_name' => 'blog', 'order' => 'DSC', 'orderby' => 'date' );
                  $myposts = get_posts( $args );
                  foreach( $myposts as $post ) :  setup_postdata($post);
               ?>
               <div class="col-sm-12 card <?php the_id(); ?>">
                  <div class="row">
                     <div class="col-sm-4">
                        <?php the_post_thumbnail('medium'); ?>
                     </div>
                     <div class="col-sm-8">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
               <?php wp_reset_postdata(); ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php endwhile; endif; ?>
<script>
   jQuery(document).ready(function($){
      
   });
</script>
<?php get_footer(); ?>