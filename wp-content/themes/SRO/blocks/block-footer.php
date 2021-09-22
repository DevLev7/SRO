	<footer id="footer">
				<svg class="foot_line" xmlns="http://www.w3.org/2000/svg" width="1460.424" height="622.5" viewBox="0 0 1460.424 622.5">
			<g id="линий" transform="translate(-85.5 -13711.5)">
				<line id="Линия_100" data-name="Линия 100" y2="436" transform="translate(86.5 13711.5)" fill="none" stroke="#2b293e" stroke-width="2"/>
				<circle id="Эллипс_40" data-name="Эллипс 40" cx="161" cy="161" r="161" transform="translate(103 14011)" fill="none" stroke="#2b293e" stroke-width="2"/>
				<line id="Линия_101" data-name="Линия 101" x2="447" y2="432" transform="translate(86.5 13742.5)" fill="none" stroke="#2b293e" stroke-width="2"/>
				<line id="Линия_102" data-name="Линия 102" x2="1179" transform="translate(290.5 13938.5)" fill="none" stroke="#2b293e" stroke-width="2"/>
				<line id="Линия_103" data-name="Линия 103" y2="430" transform="translate(604.5 13742.5)" fill="none" stroke="#2b293e" stroke-width="2"/>
				<line id="Линия_104" data-name="Линия 104" y2="442" transform="translate(949.5 13742.5)" fill="none" stroke="#2b293e" stroke-width="2"/>
				<line id="Линия_105" data-name="Линия 105" y1="126" x2="130" transform="translate(887.5 13873.5)" fill="none" stroke="#2b293e" stroke-width="2"/>
				<path id="Контур_24" data-name="Контур 24" d="M-3783.11,140h-376.78a189.166,189.166,0,0,1,4.9-36.847,187.578,187.578,0,0,1,11.649-34.242,188.7,188.7,0,0,1,17.689-30.925,189.924,189.924,0,0,1,23.019-26.9A189.8,189.8,0,0,1-4075-11.071a188.45,188.45,0,0,1,31.542-16.708,187.583,187.583,0,0,1,34.737-10.547A189.977,189.977,0,0,1-3971.5-42a189.978,189.978,0,0,1,37.22,3.674,187.582,187.582,0,0,1,34.737,10.547A188.443,188.443,0,0,1-3868-11.071a189.8,189.8,0,0,1,27.636,22.159,189.932,189.932,0,0,1,23.019,26.9,188.726,188.726,0,0,1,17.69,30.925,187.585,187.585,0,0,1,11.649,34.242,189.177,189.177,0,0,1,4.9,36.847Z" transform="translate(5328 13798)" fill="none" stroke="#2b293e" stroke-width="2"/>
			</g>
			</svg>
		<div class="container">
			<div class="row mainrow">			
				<div class="col-lg-2 col-ml-2 col-md-2 col-sm-4 col-12 col">
					<div class="footer-logo <?php echo !get_field('logos','option')['footer']? "no-logo" : "" ; ?>">
						<a href="<?php echo HOME_URI; ?>" class="img_link">
							<img src="<?php echo get_field('logos','option')['footer']? get_field('logos','option')['footer'] : get_field('logos','option')['header'] ; ?>" alt="Логотип <?php echo get_field('company', 'option')['brand']; ?>" />
						</a>
					</div>
					<div class="descriptor">
						<?php the_field('descriptor', 'option'); ?>
					</div>
					
				</div>
				<div class="col-lg-2 col-ml-3 col-md-3 col-sm-6 col ">
					<ul>
						<li class="adress" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<?php if ( is_plugin_active( 'multycity/multycity.php' ) ) { ?>
									<span itemprop="addressLocality">г. <?php echo do_shortcode( '[city_i]'); ?>, </span>
									<?php  } ?>
									<span itemprop="streetAddress"><?php echo do_shortcode('[adress]'); ?></span></li>
								<!-- <li><?php echo do_shortcode('[email]'); ?></li> -->
					</ul>
					
				</div>
				<div class="col-xl-5 col-lg-4 col-ml-2 col-md-1  line_foot col"></div>
				<!-- <div class="col-lg-3 col-ml-3 col-sm-4 col-12 col main">
					<? if ( has_nav_menu( 'footer_menu-1' ) ){?>
					<div class="footer-head">
						<?php 
						$id = get_nav_menu_locations()['footer_menu-1'];
						$menu = wp_get_nav_menu_object( $id );
						echo get_field('menu-name-1', $menu);
						?>
					</div>
					<div class="footer-menu">
						<?php wp_nav_menu( array(
							'theme_location' => 'footer_menu-1',
							'fallback_cb' => ''
						) ); ?>
					</div>
					<? } ?>
				</div> -->
				<!-- <div class="col-lg-4 col-ml-3 col-sm-8 col-12 col">
					<? if ( has_nav_menu( 'footer_menu-2' ) ){?>
					<div class="footer-head">
						<?php 
						$id = get_nav_menu_locations()['footer_menu-2'];
						$menu = wp_get_nav_menu_object( $id );
						echo get_field('menu-name-2', $menu);
						?>
					</div>
					<div class="footer-menu">
						<?php wp_nav_menu( array(
							'theme_location' => 'footer_menu-2',
							'fallback_cb' => ''
						) ); ?>
					</div>
					<? } ?>
				</div> -->
				<div class="col-xl-3  col-lg-4 col-ml-5 col-md-6 col-sm-8 col-12 col" itemscope itemtype="http://schema.org/Organization">
				
					<div class="footer-contacts">
					
						<div class="telephone" itemprop="telephone"><?php echo do_shortcode('[phone]') ?> <span class="liniya">Горячая линия</span>	</div>
						
						<div data-src="#popup-call" class="link" data-fancybox=""><span>Заказать звонок</span></div>
                        
					</div>
					<?php get_template_part('template-parts/social-icons');?>
					<?php //get_template_part('template-parts/messenger-icons');?>
				</div>
			</div>
			<div class="foot-2">
				<div class="public col-lg-2 col-ml-3 col-12">
				ⓒ Все права защищены. Информация на сайте не является публичной офертой. <?php echo get_field('company', 'option')['inn'] ? 'ИНН '.get_field('company', 'option')['inn'].'<span class="sepa">/</span>' : "" ; ?> 
				</div>
				<div class="polic col-lg-7 col-ml-6 col-12">
					<div class="b2b-copy-inline">
					</div>
					<?php echo get_field('company', 'option')['name'] ? get_field('company', 'option')['name'].'<span class="sepa">/</span>' : "" ; ?> 
					<?php echo get_field('company', 'option')['ogrn'] ? 'ОГРН '.get_field('company', 'option')['ogrn'].'<span class="sepa">/</span>' : "" ; ?> 
					<?php echo get_field('company', 'option')['inn'] ? 'ИНН '.get_field('company', 'option')['inn'].'<span class="sepa">/</span>' : "" ; ?> 
					ⓒПервый линцезионный центр 2010 –  <nobr><?php echo date('Y'); ?></nobr><span class="sepa">/</span>
					<a href="<?php echo get_privacy_policy_url(); ?>">Политика конфиденциальности</a>
				</div>
				<div id="copyright" class="copy-white col-lg-2 col-ml-3 col-12">
							<? 
							/*доступные классы: 
								copy-black - черные буквы и белая подложка 
								copy-white - белые буквы и черная подложка 
								copy-inline - display: inline-block
								copy-link - без подложки
								copy-right - позиционирование справа
							*/?>
							<?php get_template_part('template-parts/copyright');?>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- <footer id="footer-2">
		<div class="container-fluid">
			
		</div>
	</footer> -->