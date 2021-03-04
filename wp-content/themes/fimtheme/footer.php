	<!-- FOOTER -->
	<footer class="text-muted bg-my">
	  <div class="container">
		<p class="float-right">
		  <a href="#">Back to top</a>
		</p>
		<p>&copy; <?php echo date('Y'); bloginfo('name'); ?> </p>
		
		<?php

		if (has_nav_menu( 'footer' )){
			wp_nav_menu( array(
				'menu'					=> 'footer',
				'theme_location'		=> 'footer',
				'container'				=> false,
				'container_class'      => '',
				'container_id'         => '',
				'menu_class'           => 'footernavmenu',
				'menu_id'              => '',
				'echo'                 => true,
				'before'               => ' | ',
				'after'                => '',
				'link_before'          => '',
				'link_after'           => '',
				//'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'                => 1,
				'walker'               => '',
				'fallback_cb'          => ''
			));
		} else {
			echo 'Veuillez assigner un menu dans l\'administration WordPress -> Apparence -> Menus -> Gérer les emplacements';
		}

		?>

		
		
	  </div>
	</footer>
	<!-- FOOTER END -->
	
    <?php wp_footer(); ?>

	<script type="text/javascript">
        tarteaucitron.user.gtagUa = 'G-624QZ2TLQS';
        tarteaucitron.user.gtagMore = function () { /* add here your optionnal gtag() */ };
        (tarteaucitron.job = tarteaucitron.job || []).push('gtag');
    </script>
</body>
</html>