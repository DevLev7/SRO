	<section id="block_7" class="gallery gallery-docs ">

	
			
			<div class="row">
			<div class="col-12">
				<div class="header list">
					<?php the_field('docs-header','option'); ?>
					
					<div class="slider-arrow">
					<div class="prev">
							<svg class="prev_arrow" xmlns="http://www.w3.org/2000/svg" width="48.315" height="16.322" viewBox="0 0 48.315 16.322">
							<g id="Сгруппировать_148" data-name="Сгруппировать 148" transform="translate(1.414 0.707)">
								<line id="Линия_72" data-name="Линия 72" x1="45.947" transform="translate(0.954 7.454)" fill="none" stroke="#fff" stroke-width="2"/>
								<path id="Контур_10" data-name="Контур 10" d="M10.541,10.541V0H0" transform="translate(7.454 14.908) rotate(-135)" fill="none" stroke="#fff" stroke-width="2"/>
							</g>
							</svg>
						</div>
						<div class="next">
							<svg class="next_arrow" xmlns="http://www.w3.org/2000/svg" width="73.368" height="16.322" viewBox="0 0 73.368 16.322">
							<g id="Компонент_2_6" data-name="Компонент 2 – 6" transform="translate(0 0.707)">
								<line id="Линия_72" data-name="Линия 72" x2="71" transform="translate(0 7.454)" fill="none" stroke="#fff" stroke-width="2"></line>
								<path id="Контур_10" data-name="Контур 10" d="M10.541,0V10.541H0" transform="translate(57.046 7.454) rotate(-45)" fill="none" stroke="#fff" stroke-width="2"></path>
							</g>
							</svg>
						</div>
					</div>
				</div>
				
				</div>
				<div class="col-xl-2 col-sm-1 col-1"></div>
				<div class=" docs">
				
					<div class="slider slider-docs1 swiper-container">
						<div class="swiper-wrapper">
							<?php
							$gallery_arr = get_field('docs-repeater','option');
							foreach( $gallery_arr as $image ):
							?>
								<div class="image swiper-slide">
									<? if(get_field('docs-setting','option')['zoom']) { ?>
									<a href="<?php echo $image['url']; ?>" class="frame" data-fancybox='docs-<?php echo $building_row; ?>'>
									<? }else{ ?>
									<div class="">
									<? } ?>
										<img class="lazy" data-src="<?php echo $image['sizes']['team']; ?>" >
									<? echo get_field('docs-setting','option')['zoom'] ? '</a>' : '</div>' ; ?>
									<div class="name">
									<?php echo $image['title']; ?>
							</div>
								</div>
							
							<?php 
							endforeach;
							?>
							
						</div>
					</div>
					<div class="gallery-arrow-docs"></div>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col-s">
					<div class="footer list">
						<?php the_field('docs-footer','option'); ?>
					</div>
				</div>
			</div>
	</section>
	
	
	<script>
		const swiper = new Swiper('#block_7 .swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 3.2,

  pagination: {
          el: ".swiper-pagination",
          type: "fraction",
        },
  // Navigation arrows
  navigation: {
    nextEl: '.next',
    prevEl: '.prev',
  },
  breakpoints: {
			200: {
		            slidesPerView: 1.5
		                  },
			415: {
		            slidesPerView: 2.2
		                  },
            601: {
                    slidesPerView: 2.5
                  },
			 770: {
                    slidesPerView: 3.2
                  },
			// 1921: {
			// slidesPerView: 3
			// },
        },

  
});
	</script>