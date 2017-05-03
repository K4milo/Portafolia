<?php 
	
/*
	Template Name: Home
*/

get_template_part('includes/header'); ?>

<?php while(have_posts()):the_post();?>
<div class="container-fluid">

  <div class="row slider">
    <?php the_field('texto_slider'); ?>
  </div><!-- /.row -->


  <div class="row studio wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
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
	  			<div class="item wow fadeI" data-wow-duration="1.<?php echo $counter; ?>s" data-wow-delay=".5s">
	  				<figure class="wow fadeIn" data-wow-delay=".5s">
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

  		<a href="#" class="blackBtn wow fadeIn">What We Do</a>
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
	  					<?php the_sub_field('texto'); ?>
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

<?php endwhile; ?>

<?php get_template_part('includes/footer'); ?>
