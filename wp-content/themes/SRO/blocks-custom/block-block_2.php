<div id="block_2">
<div class="square4"></div>
<div class="square5"></div>
<div class="square6"></div>
<svg class="line_star" xmlns="http://www.w3.org/2000/svg" width="287.4" height="287.4" viewBox="0 0 287.4 287.4">
  <g id="Сгруппировать_18" data-name="Сгруппировать 18" transform="translate(-2553.5 -2876.5)">
    <g id="Сгруппировать_16" data-name="Сгруппировать 16" transform="translate(2553.5 2876.5)">
      <line id="Линия_10" data-name="Линия 10" y2="287.4" transform="translate(143.7)" fill="none" stroke="#dd2e0d" stroke-width="2"/>
      <line id="Линия_11" data-name="Линия 11" y2="287.4" transform="translate(287.4 143.7) rotate(90)" fill="none" stroke="#dd2e0d" stroke-width="2"/>
    </g>
    <g id="Сгруппировать_17" data-name="Сгруппировать 17" transform="translate(2697.2 2934.343) rotate(45)">
      <line id="Линия_10-2" data-name="Линия 10" y2="121.421" transform="translate(60.71)" fill="none" stroke="#dd2e0d" stroke-width="2"/>
      <line id="Линия_11-2" data-name="Линия 11" y2="121.421" transform="translate(121.421 60.71) rotate(90)" fill="none" stroke="#dd2e0d" stroke-width="2"/>
    </g>
    <g id="Эллипс_2" data-name="Эллипс 2" transform="translate(2693.523 3016.523)" fill="#dd2e0d" stroke="#dd2e0d" stroke-width="1">
      <circle cx="3.96" cy="3.96" r="3.96" stroke="none"/>
      <circle cx="3.96" cy="3.96" r="3.46" fill="none"/>
    </g>
  </g>
</svg>
<img class="bl2_img1 lazy" data-src="<?php echo THEME_IMAGES; ?>/bl2_img1.png" alt=""> 
<img class="bl2_img2 lazy animate__animated animate__fadeInRight wow" data-wow-duration="2s" data-wow-delay="100ms" src="<?php echo THEME_IMAGES; ?>/bl2_img2.png" alt=""> 
    <div class="container-fluid">
        <div class="block_2">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <div class="text-block">
                            <div class="animate__animated animate__fadeInLeft wow" data-wow-duration="2s" data-wow-delay="100ms"> <?php echo get_field('bl2_title'); ?></div>
                            <div class="left_block animate__animated animate__fadeInRight wow" data-wow-duration="2s" data-wow-delay="100ms"> <?php echo get_field('bl2_text_right'); ?></div>
                        </div>
                        
                        <div class="favor_wrap">
                            <?php 
							while( have_rows('rep2') ): the_row(); 
								$img = get_sub_field('img');
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
							?>
								<div class="favor_item">
                                <div class="favor_content">
                                        <svg class="icon1" xmlns="http://www.w3.org/2000/svg" width="56" height="49" viewBox="0 0 56 49">
                                            <g id="Сгруппировать_106" data-name="Сгруппировать 106" transform="translate(-364 -2598)">
                                                <path id="Многоугольник_1" data-name="Многоугольник 1" d="M22.791,9.117a6,6,0,0,1,10.419,0L50.87,40.023A6,6,0,0,1,45.661,49H10.339A6,6,0,0,1,5.13,40.023Z" transform="translate(364 2598)" fill="#dd2e0d"/>
                                                <line id="Линия_76" data-name="Линия 76" x2="14" transform="translate(385.5 2629.5)" fill="none" stroke="#fff" stroke-width="3"/>
                                            </g>
                                        </svg>
                                        <div class="title">
                                            <?php echo $title; ?>
                                        </div>
                                        <div class="text">
                                            <?php echo $text; ?>
                                        </div>
                                    </div>
									<div class="favor_img">
										<img class="lazy" data-src="<?php echo $img; ?>" alt="">
									</div>
                                    
								</div>
                            <?php 
							endwhile;
							wp_reset_query();
							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>