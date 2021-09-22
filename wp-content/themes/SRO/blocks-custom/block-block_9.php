<div id="block_9">
        <div class="block_9">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                       <div class="animate__animated animate__fadeInUp wow" data-wow-duration="2s" data-wow-delay="100ms"> <?php echo get_field('bl9_title'); ?> </div>
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
                        <div class="favor_wrap swiper-container">
                            <div class="swiper-wrapper">
                            <?php 
							while( have_rows('rep8') ): the_row(); 
								$img = get_sub_field('img');
                                $img_alt = get_sub_field('img_alt');
                                $fio = get_sub_field('fio');
                                $position = get_sub_field('position');
                                $quotes = get_sub_field('quotes');
							?>
                            <div class="favor_item swiper-slide">
                                <div class="favor_img">
                                <picture>
                                    <source srcset="<?php echo $img; ?>" type="image/webp">
                                    <img src="<?php echo $img_alt; ?>" alt="Alt Text!">
                                </picture>
                                    
                                </div>
                                <div class="tag">
                                    <div class="fio"><?php echo $fio; ?></div>
                                    <div class="position"><?php echo $position; ?></div>
                                    <div class="quotes"><?php echo $quotes; ?></div>
                                </div>
                            </div>
                            <?php 
							endwhile;
							wp_reset_query();
							?>
                        </div>
                        </div>
                        <div class="text-block animate__animated animate__fadeInLeft wow" data-wow-duration="2s" data-wow-delay="100ms">
                            <svg  id="Сгруппировать_150" data-name="Сгруппировать 150" xmlns="http://www.w3.org/2000/svg" width="58.014" height="43.511" viewBox="0 0 58.014 43.511">
                            <path id="Контур_2" data-name="Контур 2" d="M0,4V47.511L21.755,25.755V4Z" transform="translate(0 -4)" fill="#239eb8"/>
                            <path id="Контур_3" data-name="Контур 3" d="M20,4V47.511L41.755,25.755V4Z" transform="translate(16.259 -4)" fill="#239eb8"/>
                            </svg>
                            <?php echo get_field('bl9_text'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>


<script>
		const swiper1 = new Swiper('#block_9 .swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 1.89,
 
  centeredSlides: true,
  navigation: {
    nextEl: '.next',
    prevEl: '.prev',
  },
  breakpoints: {
            200: {
                        slidesPerView: .5
                                  },
            376: {
                slidesPerView: .7
                          },
            770: {
                    slidesPerView: 1.4
                  },
          1025: {
            slidesPerView: 1.5
          },
          1281: {
            slidesPerView: 1.5
          },
          1368: {
            slidesPerView: 1.6
          },
          1441: {
            slidesPerView: 1.7
          },
          1919: {
            slidesPerView: 1.89
          },
        },

  
});
	</script>