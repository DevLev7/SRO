<div id="block_4">
<svg class="bl2_line" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1034" height="491" viewBox="0 0 1034 491">
  <defs>
    <clipPath id="clip-path">
      <rect id="Прямоугольник_25" data-name="Прямоугольник 25" width="1034" height="491" transform="translate(886 4574)" fill="#fff" stroke="#707070" stroke-width="1"/>
    </clipPath>
  </defs>
  <g id="Группа_масок_1" data-name="Группа масок 1" transform="translate(-886 -4574)" clip-path="url(#clip-path)">
    <g id="Сгруппировать_98" data-name="Сгруппировать 98" transform="translate(-2110.5 4066.5)">
      <line id="Линия_1" data-name="Линия 1" y2="760.67" transform="translate(3017.5 376)" fill="none" stroke="#e8e8e8" stroke-width="2"/>
      <line id="Линия_2" data-name="Линия 2" x2="928.415" transform="translate(3017.5 1136.67)" fill="none" stroke="#e8e8e8" stroke-width="2"/>
      <line id="Линия_3" data-name="Линия 3" y2="714.67" transform="translate(3945.915 422)" fill="none" stroke="#e8e8e8" stroke-width="2"/>
      <line id="Линия_4" data-name="Линия 4" x1="361.924" y2="361.924" transform="translate(3667.915 774.745)" fill="none" stroke="#e8e8e8" stroke-width="2"/>
      <line id="Линия_5" data-name="Линия 5" y2="188.83" transform="translate(3667.915 1136.67)" fill="none" stroke="#e8e8e8" stroke-width="2"/>
      <line id="Линия_6" data-name="Линия 6" y2="639.924" transform="translate(3206.33 675.085)" fill="none" stroke="#e8e8e8" stroke-width="2"/>
      <line id="Линия_7" data-name="Линия 7" x2="1012.34" transform="translate(3017.5 675.085)" fill="none" stroke="#e8e8e8" stroke-width="2"/>
      <line id="Линия_8" data-name="Линия 8" x1="569.01" y2="299.585" transform="translate(3484.33 375.5)" fill="none" stroke="#e8e8e8" stroke-width="2"/>
      <line id="Линия_9" data-name="Линия 9" y2="461.585" transform="translate(3484.33 675.085)" fill="none" stroke="#e8e8e8" stroke-width="2"/>
    </g>
  </g>
</svg>
        <div class="block_4">
            <div class="container-fluid">
                <div class="text-block">
                   <div class="animate__animated animate__fadeInLeft wow" data-wow-duration="2s" data-wow-delay="100ms"> <?php echo get_field('bl4_title'); ?> </div>
                   <div class="animate__animated animate__fadeInRight wow" data-wow-duration="2s" data-wow-delay="100ms"> <?php echo get_field('bl4_text_left'); ?> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="content">            
                        <div class="favor_wrap">
                            <?php 
							while( have_rows('rep5') ): the_row(); 
								$title = get_sub_field('title');
                                $text = get_sub_field('text');
                                $bg = get_sub_field('bg');
							?>
								<div data-src="#popup-order" data-fancybox class="favor_item" style="background:url(<?php echo $bg; ?>)">
									<div class="favor_content">
										<div class="title">
                                            <?php echo $title; ?>
                                        </div>
                                        <div class="text">
                                            <?php echo $text; ?>
                                        </div>
									</div>
                                        <div class="arrow_bl">
                                            <svg class="bl4_arrow" xmlns="http://www.w3.org/2000/svg" width="73.368" height="16.322" viewBox="0 0 73.368 16.322">
                                            <g id="Компонент_2_6" data-name="Компонент 2 – 6" transform="translate(0 0.707)">
                                                <line id="Линия_72" data-name="Линия 72" x2="71" transform="translate(0 7.454)" fill="none" stroke="#fff" stroke-width="2"/>
                                                <path id="Контур_10" data-name="Контур 10" d="M10.541,0V10.541H0" transform="translate(57.046 7.454) rotate(-45)" fill="none" stroke="#fff" stroke-width="2"/>
                                            </g>
                                            </svg>
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