<footer class="container site-footer">
 	<div class="footer-nav">
		<?php
		    wp_nav_menu( array(
		        'theme_location'    => 'navbar-left',
		        'depth'             => 2,
		        'menu_class'        => 'nav navbar-nav',
		        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		        'walker'            => new wp_bootstrap_navwalker())
		    );
		?>
    </div><!-- /.navbar-collapse -->
 	<a href="/terms" class="terms">TERMS OF USE</a>
    <div class="site-sub-footer">
      <p>Portafolia Studio is a trade name of Portafolia Ltd. | Registered in England and Wales as a Limited Liability Company: 08386313 | Registered Office: 26 Stalbridge Flats, Lumley Street, W1K 6TA |  <?php echo date('Y'); ?> | PORTAFOLIA (All rights reserved) |</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
