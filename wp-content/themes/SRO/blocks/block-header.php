	<header id="header" class="">
		<div class="container">
			<div class="row mainrow">
				<div class="logo">
					<a href="<?php echo HOME_URI; ?>" class="img_link">
						<img src="<?php echo get_field('logos','option')['header']; ?>" alt="Логотип <?php echo get_field('company', 'option')['brand']; ?>" />
					</a>
				</div>
				<div class="content">
					<div class="row">
						
						<div class="col-lg-3 col-ml-4 ">
							<ul>
								<li class="adress" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
											<?php if ( is_plugin_active( 'multycity/multycity.php' ) ) { ?>
											<span itemprop="addressLocality">г. <?php echo do_shortcode( '[city_i]'); ?>, </span>
											<?php  } ?>
											<span itemprop="streetAddress"><?php echo do_shortcode('[adress]'); ?></span></li>
										<!-- <li><?php echo do_shortcode('[email]'); ?></li> -->
							</ul>
							
						</div>
						<div class="col hidden-sm hidden-xs">
						<?php if ( is_plugin_active( 'multycity/multycity.php' ) ) { 
							get_template_part('template-parts/multycity');
						} ?>
						</div>
						<div class="col-xl-4 col-lg-5 contacts">
						
							<div class="telephone" itemprop="telephone"><?php echo do_shortcode('[phone]') ?> <span class="liniya">Горячая линия</span>	</div>
							<div data-src="#popup-call" class="link" data-fancybox=""><span>Заказать звонок</span></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<? if ( has_nav_menu( 'main_menu' ) ){?>
	<nav id="menu">
		<div class="container-fluid">
			<div class="menu_block">
				<?php wp_nav_menu( array(
					'theme_location' => 'main_menu',
					'fallback_cb' => ''
				) ); ?>
			</div>
		</div>
	</nav>
	<? } ?>