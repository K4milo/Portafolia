<?php 
  
/*
  Template Name: Clean
*/

get_template_part('includes/header'); ?>

<?php while(have_posts()):the_post();?>
<div class="container-fluid">

  <div class="row content">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </div><!-- /.row -->

</div><!-- /.container -->

<?php endwhile; ?>

<?php get_template_part('includes/footer'); ?>