    <!-- NAVBAR -->
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container justify-content-between">
                <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
                    PlayMore
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                if (has_nav_menu( 'menu-1' )){
	                wp_nav_menu( array(
		                'menu'					=> 'menu-1',
		                'theme_location'		=> 'menu-1',
		                'container'				=> 'div',
		                'container_class'      => 'collapse navbar-collapse',
		                'container_id'         => 'navbarText',
		                'menu_class'           => 'navbar-nav ml-auto',
		                'menu_id'              => '',
		                'echo'                 => true,
		                'before'               => '',
		                'after'                => '',
		                'link_before'          => '',
		                'link_after'           => '',
		                //'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		                'depth'                => 2,
		                'walker'               => new WP_Bootstrap_Navwalker(),
		                'fallback_cb'          => 'WP_Boostrap_Navwalker::fallback'
	                ));
                } else {
	                echo 'Veuillez assigner un menu dans l\'administration WordPress -> Apparence -> Menus -> Gérer les emplacements';
                }
                ?>
            </div>
        </nav>
    </header>
	<!-- NAVBAR END -->