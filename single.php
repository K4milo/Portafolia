<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
    <div class="container">
      <div class="blog-single">
        <div class="share">
          <?php echo do_shortcode('[apss_share]'); ?>
        </div>
        <?php get_template_part('includes/loops/content', 'single'); ?>
        <div class="share">
          <?php echo do_shortcode('[apss_share]'); ?>
        </div>
      </div>
    </div>
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
