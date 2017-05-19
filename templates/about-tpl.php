<?php 
	
/*
	Template Name: About
*/

get_template_part('includes/header'); ?>

<?php while(have_posts()):the_post();?>
<div class="container-fluid">

  <div class="row content">
    <div class="container">
      <header>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </header>
    </div>
  </div><!-- /.row -->

  <div class="row profile">
    <div class="container">
      <figure>
        <?php the_post_thumbnail('full'); ?>
      </figure>
      <ul class="social">
        <li>
          <a href="<?php the_field('link_twitter'); ?>" target="_blank">
            <img src="<?php bloginfo('template_url')?>/img/tw-icon.png" >
          </a>
        </li>
        <li>
          <a href="<?php the_field('link_facebook'); ?>" target="_blank">
            <img src="<?php bloginfo('template_url')?>/img/fb-icon.png" >
          </a>
        </li>
        <li>
          <a href="<?php the_field('link_linkedin'); ?>" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/img/in-icon.png" >
          </a>
        </li>
      </ul>

      <div class="short-text">
        <?php the_field('texto_corto'); ?>
        <?php
        if(ICL_LANGUAGE_CODE=='en'){
          ?>
          <a href="#" class="blackBtn toggleBtn wow fadeIn">Read More <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
      <?php
        }
        if(ICL_LANGUAGE_CODE=='es'){
         ?>
         <a href="#" class="blackBtn toggleBtn wow fadeIn">Ver Más <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
         <?php 
        }
      ?>
        
      </div>

      <div class="long-text">
        <?php the_field('texto_largo'); ?>
      </div>

    </div>
  </div><!-- /.row -->

</div><!-- /.container -->

<?php endwhile; ?>

<?php get_template_part('includes/footer'); ?>