<?php 
	
/*
	Template Name: Home
*/

get_template_part('includes/header'); ?>

<?php while(have_posts()):the_post();?>
<div class="container-fluid">

  <div class="row slider">
    <div class="txt-slider">
      <?php the_field('texto_slider'); ?>
    </div>
    <a href="#studio" class="bottom-slider">Learn More <img src="<?php bloginfo('template_url'); ?>/img/caret-down.png" class="caretd"></a>

    <?php
        wp_nav_menu( array(
            'theme_location'    => 'navbar-left',
            'depth'             => 2,
            'menu_class'        => 'slider-nav')
        );
    ?>

  </div><!-- /.row -->


  <div class="row studio wow fadeIn" id="studio" data-wow-duration=".5s" data-wow-delay=".5s">
    <?php the_content(); ?>
  </div><!-- /.row -->


  <div class="row values">
  	<header>
  		<h2>You want to know how we do it?</h2>
      <h3>Simple. We speak art.</h3>
  	</header>
  	<div class="container clearfix">
  		<?php while(have_rows('valores_agregados')): the_row();
          $counter = 1; 
  				while(have_rows('items')): the_row(); 
  		?>
	  		<div class="col-md-4">
	  			<div class="item wow fadeIn" data-wow-duration="1.<?php echo $counter; ?>s">
	  				<figure class="wow fadeIn">
	  					<img src="<?php the_sub_field('icono'); ?>">
	  				</figure>
	  				<h3 class="titulo wow  fadeIn">
	  					<?php the_sub_field('titulo'); ?>
	  				</h3>
	  				<div class="text wow fadeIn">
	  					<?php the_sub_field('texto'); ?>
	  				</div>
	  			</div>
	  		</div>
  		<?php 
          $counter++;
  			endwhile;
  		endwhile; ?>
  		<a href="http://portafolia.studio/what-we-do/" class="blackBtn">What We Do</a>
  	</div>
  </div><!-- /.row -->

  <div class="row wedo">
  	<div class="container clearfix">
  		<?php while(have_rows('que_hacemos')): the_row(); 
  				$counter = 1;
          while(have_rows('item')): the_row(); 
  		?>
	  		<div class="col-md-6">
	  			<div class="item item-<?php echo $counter; ?>">
	  				<figure>
	  					<img src="<?php the_sub_field('icono'); ?>" class=" wow  wow fadeIn" data-wow-delay=".5s" >
	  				</figure>
	  				<h3 class="titulo">
	  					<?php the_sub_field('titulo'); ?>
	  				</h3>
	  				<div class="text wow fadeIn">
	  					<a href="<?php the_sub_field('vinculo_relacionado'); ?>"><?php the_sub_field('texto'); ?></a>
	  				</div>
	  			</div>
	  		</div>
  		<?php 
          $counter ++;
  			endwhile;
  		endwhile; ?>
  	</div>
  </div><!-- /.row -->

  <div class="row testimonios">
    <div class="container clearfix">
      <h3 class="titulo wow  fadeIn">
        What They Say
      </h3>
      <ul>
        <?php 
            while(have_rows('testimonios')): the_row(); 
        ?>
          <li><img src="<?php the_sub_field('icono'); ?>"></li>
        <?php 
          endwhile; 
        ?>
      </ul>
    </div>
  </div><!-- /.row -->

</div><!-- /.container -->

<div class="row newsletter">
  <div class="container">
    <?php echo do_shortcode('[contact-form-7 id="164" title="Form inglés"]'); ?>
  </div>
</div>

<?php endwhile; ?>

<?php get_template_part('includes/footer'); ?>
