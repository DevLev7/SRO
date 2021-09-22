<div id="block_5">
    <div class="circle4"></div>
    <div class="circle5"></div>
   
        <div class="block_5">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                    <div class="container-fluid">
                       <div class="animate__animated animate__fadeInLeft wow" data-wow-duration="2s" data-wow-delay="100ms"> <?php echo get_field('bl5_title'); ?> </div>
                        <div class="title_tab"> <span> "Полный пакет" </span> в одном месте</div>
                        <div class="favor_wrap1">
                            <?php 
							while( have_rows('rep6') ): the_row(); 
								$img = get_sub_field('img');
                                $title = get_sub_field('title');
							?>
								<div class="favor_item animate__animated animate__fadeInUp wow" data-wow-duration="2s" data-wow-delay="100ms">
									<div class="favor_img">
										<img class="lazy" data-src="<?php echo $img; ?>" alt="">
									</div>
                                    <div class="favor_content">
                                        <?php echo $title; ?>
                                    </div>
								</div>
                            <?php 
							endwhile;
							wp_reset_query();
							?>
                        </div>
                    </div>
                    <div class="container">
                        <div class="favor_wrap2 ">
                            <?php 
							while( have_rows('rep7') ): the_row(); 
								$name = get_sub_field('name');
                                $cost = get_sub_field('cost');
                                $old_cost = get_sub_field('old_cost');
                                $entrance_fee = get_sub_field('entrance_fee');
                                $membership_fee = get_sub_field('membership_fee');
                                $specialists = get_sub_field('specialists');
                                $insurance = get_sub_field('insurance');
                                $economy = get_sub_field('economy');
                                $contribution = get_sub_field('contribution');
							?>
								<div class="favor_item animate__animated animate__fadeInUp wow" data-wow-duration="2s" data-wow-delay="100ms">
									<div class="name"><?php echo $name; ?></div>
                                        <div class="favor_item_inner">
                                            <div class="cost"><?php echo $cost; ?></div>
                                            <div class="old_cost"><?php echo $old_cost; ?></div>
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td class="name_t">Вступительный взнос – 0 ₽</td>
                                                        <td class="name_str"><?php echo $entrance_fee; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="name_t">Членский взнос – 0 ₽</td>
                                                        <td class="name_str"><?php echo $membership_fee; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="name_t">Страховка – 0 ₽  </td>
                                                        <td class="name_str"><?php echo $insurance; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="name_t">Специалисты НРС – 0 ₽</td>
                                                        <td class="name_str"><?php echo $specialists; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="economy"><?php echo $economy; ?></div>
                                            <div class="contr"><?php echo $contribution; ?></div>
                                            <div class="button ">
                                                <div data-src="#popup-order" data-fancybox class="btn1"><span>Заказать</span></div>
                                            </div>
                                        
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
</div> </div>


