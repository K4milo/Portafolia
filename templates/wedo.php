<?php 
	
/*
	Template Name: we do
*/

get_template_part('includes/header'); ?>

<?php while(have_posts()):the_post();?>
<div class="container-fluid">

  <div class="row list-bs-items">
    <header>
      <h2><?php the_title(); ?></h2>
    </header>
    
    <div class="container list-services no-gutter">
      <?php while ( have_rows('service_items') ) : the_row();?>
        <div class="col-md-4 service-square">
          <div class="flip-container">
            <div class="flipper">
              <div class="front">
                <h4><?php the_sub_field('enunciado'); ?></h4>
              </div>
              <div class="back">
                <span><?php the_sub_field('descripcion'); ?></span>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>  
    </div>

  </div><!-- /.row -->

  <div class="row methodology">
    <div class="container">
      <header>
        <h3>Methodology</h3>
      </header>
      <p>Objetive-first Framework</p>
      <ul class="line-path">
        <?php while ( have_rows('items_metodologia') ) : the_row(); ?>
          <li><?php the_sub_field('item_metodologia'); ?></li>
        <?php endwhile; ?> 
      </ul>
    </div>
  </div>

  <div class="row faqs">
    <div class="container">
      <header>
        <h3>FAQ</h3>
      </header>

      <div class="panel-group">
        <div class="panel panel-default">
          <?php 

          $counter = 1;

          while ( have_rows('faqs') ) : the_row(); ?>
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse<?php echo $counter; ?>"><?php the_sub_field('enunciado'); ?></a>
              <img src="<?php bloginfo('template_url'); ?>/img/caret-down.png" class="caretd">
            </h4>
          </div>
          <div id="collapse<?php echo $counter; ?>" class="panel-collapse collapse">
            <div class="panel-body"><?php the_sub_field('pregunta'); ?></div>
          </div>
          <?php $counter++; endwhile; ?>
        </div>
      </div>
    </div>
  </div>


</div><!-- /.container -->
<?php endwhile; wp_reset_query(); ?>



<?php get_template_part('includes/footer'); ?>