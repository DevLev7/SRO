<div id="block_11" >
<img class="bl11_img1 lazy" data-src="<?php echo THEME_IMAGES; ?>/bl11_img1.png" alt=""> 
	<div class="container">
		<div class="block_11">
			<div class="row">
                <div class="col-12 how_search">
                    <div class="content " >
                        <?php echo get_field('bl11_title'); ?>
                        <div class="row photo">
                            <div class="image">
                                <img class="lazy" data-src="<?php echo get_field('bl11_icon'); ?>" alt="">
                            </div>
                            <?php echo get_field('bl11_text_left'); ?>
                        </div>
                        <ul class="main-list">
                            <?php if (get_field('mode', 'option')) { ?>
                                    <li>
                                        <span class="head">Режим работы</span>
                                        <?php the_field('mode', 'option') ?>
                                    </li>
                            <?php } ?>
                            <li>
                                <span class="head">Контакты</span>
                                <?php echo do_shortcode('[phone]') ?>
                                <?php echo do_shortcode('[email]'); ?>
                            </li>
                            <?php if (do_shortcode('[phone_second]')) { ?>
                                <li>
                                    <span class="head">Телефон (доп.)</span>
                                    <?php echo do_shortcode('[phone_second]') ?>
                                </li>
                            <?php } ?>
                            <?php if (do_shortcode('[phone_wa]')) { ?>
                                <li>
                                    <span class="head">Whats`App</span>
                                    <?php echo do_shortcode('[phone_wa]') ?>
                                </li>
                            <?php } ?>
                            <li>
                                <span class="head">Адрес</span>
                                г. Санкт-Петербург, пр-кт Обуховской обороны, д. 37, офис 75
                            </li>
                            <?php if (get_field('in', 'option') || get_field('yt', 'option') || get_field('vk', 'option') || get_field('fb', 'option')) { ?>
                                <li class="soc-block">
                                    <span class="head">Мы в соц.сетях</span>
                                    <?php get_template_part('template-parts/social-icons'); ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>    
                <div class="col-12 right-wrap">
                    <div id="map-3"></div>
                </div>
	        </div>
        </div>
	</div>
</div>
	

<!-- <script type="text/javascript" src="//api-maps.yandex.ru/2.1/?load=package.standard&amp;lang=ru-RU&amp;onload=init"></script> -->


<?php if (get_field('offices', 'option')) { ?>
	<script type="text/javascript">
		ymaps.ready(init);
		var myMap;

		function init() {

			myMap = new ymaps.Map('map-3', {
					center: [<?php echo get_field('offices-center', 'option'); ?>],
					zoom: <?php echo get_field('offices-zoom', 'option'); ?>
				}),
				myMap.behaviors.disable('scrollZoom')

			myMap.geoObjects
				.add(new ymaps.Placemark([<?php the_field('koordinati','option'); ?>], {
					balloonContent: 'Головной офис'
				}))
			<?php
			while (have_rows('offices', 'option')) : the_row();
				$department = get_sub_field('department');
				$phone = get_sub_field('phone');
				$adress = get_sub_field('adress');
				$coordinate = get_sub_field('coordinate');
				$mode = get_sub_field('mode');

				if ($department) {
					$department = $department . '</br>';
				}
				if ($phone) {
					$phone = $phone . '</br>';
				}
			?>
					.add(new ymaps.Placemark([<?php the_field('koordinati','option'); ?>], {
						balloonContent: '<?php echo $department . $adress . $phone . $mode; ?>'
					}))
			<?php
			endwhile;
			wp_reset_query();
			?>

		}
	</script>
<?php } else { ?>
	<script type="text/javascript">
		ymaps.ready(init);
		var myMap;

		function init() {

			myMap = new ymaps.Map('map-3', {
					center: [<?php echo do_shortcode('[coordinate]'); ?>],
					zoom: 9,
				}),

				MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

				myPlacemark = new ymaps.Placemark([<?php echo do_shortcode('[coordinate]'); ?>], {
            
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'wp-content/themes/SRO/assets/i/map1.svg',
            // Размеры метки.
            iconImageSize: [62, 62],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-30, -40],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });
			myMap.behaviors.disable('scrollZoom')
			myMap.geoObjects.add(myPlacemark);
		}
	</script>
<?php } ?>