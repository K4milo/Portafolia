<?php 
	
/*
	Template Name: we say
*/

get_template_part('includes/header'); ?>

<?php while(have_posts()):the_post();?>
<div class="container-fluid">

  <header class="top-img">
      <img src="<?php echo the_field('imagen__superior') ?>" alt="portaShit"/>
  </header>

  <div class="row content">
    <div class="container">
      <header>
        <?php the_content(); ?>
      </header>
    </div>
  </div><!-- /.row -->

<?php endwhile; 
      wp_reset_query(); ?>
  <div class="row second-blog">
    <div class="container">
      <div class="featured">   
      <?php
    
        $args = array(
          'posts_per_page' => 2
        );

        query_posts($args);
        while(have_posts()):the_post();
        ?>
        <div class="col-md-6">
            <article class="last-posts" id="post_<?php the_ID()?>">
              <header>
                <img src="<?php bloginfo('template_url');?>/img/logo-blog.png" alt="portafuck">
                <div class="date"><?php the_time('F j, Y'); ?></div>
              </header>
              <figure class="thumbs">
                <?php the_post_thumbnail('full'); ?>
              </figure>
              <div class="caption">
                <header>
                  <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                  </a>
                </header>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="link-info">Ver Más</a>
              </div>
            </article>
        </div>
        <?php
        endwhile;
        wp_reset_query();
      ?>

      </div>

      <div class="other posts">   
      <?php
    
        $args = array(
          'posts_per_page' => -1,
          'offset' => 2
        );

        query_posts($args);
        while(have_posts()):the_post();
        ?>
        <div class="col-md-4">
          <article class="last-posts" id="post_<?php the_ID()?>">
            <header>
              <img src="<?php bloginfo('template_url');?>/img/logo-blog.png" alt="portafuck">
              <div class="date"><?php the_time('F j, Y'); ?></div>
            </header>
            <figure class="thumbs">
              <?php the_post_thumbnail('thumbnail'); ?>
            </figure>
            <div class="caption">
              <header>
                <a href="<?php the_permalink('large'); ?>">
                  <h3><?php the_title(); ?></h3>
                </a>
              </header>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="link-info">Ver Más</a>
            </div>
          </article>
        </div>
        <?php
        endwhile;
        wp_reset_query();
      ?>

      </div>


    </div>
  </div><!-- /.row -->

</div><!-- /.container -->



<?php get_template_part('includes/footer'); ?>