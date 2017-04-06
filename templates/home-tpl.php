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


  <div class="row studio">
    <?php the_content(); ?>
  </div><!-- /.row -->


  <div class="row values">
  	<header>
  		<h2>You want to know how we do it? Simple. We speak art.</h2>
  	</header>
  	<div class="container clearfix">
  		<?php while(have_rows('valores_agregados')): the_row(); 
  				while(have_rows('items')): the_row(); 
  		?>
	  		<div class="col-md-4">
	  			<div class="item">
	  				<figure>
	  					<img src="<?php the_sub_field('icono'); ?>">
	  				</figure>
	  				<h3 class="titulo">
	  					<?php the_sub_field('titulo'); ?>
	  				</h3>
	  				<div class="text">
	  					<?php the_sub_field('texto'); ?>
	  				</div>
	  			</div>
	  		</div>
  		<?php 
  			endwhile;
  		endwhile; ?>

  		<a href="">What We Do</a>
  	</div>
  </div><!-- /.row -->

  <div class="row wedo">
  	<div class="container clearfix">
  		<?php while(have_rows('que_hacemos')): the_row(); 
  				while(have_rows('item')): the_row(); 
  		?>
	  		<div class="col-md-4">
	  			<div class="item">
	  				<figure>
	  					<img src="<?php the_sub_field('icono'); ?>">
	  				</figure>
	  				<h3 class="titulo">
	  					<?php the_sub_field('titulo'); ?>
	  				</h3>
	  				<div class="text">
	  					<?php the_sub_field('texto'); ?>
	  				</div>
	  			</div>
	  		</div>
  		<?php 
  			endwhile;
  		endwhile; ?>
  	</div>
  </div><!-- /.row -->

</div><!-- /.container -->

<?php endwhile; ?>

<?php get_template_part('includes/footer'); ?>
