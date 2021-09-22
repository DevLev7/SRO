<div id="block_3">
    <div class="container">
        <div class="header_block">
            <div class="circle"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="text animate__animated animate__fadeInUp wow" data-wow-duration="2s" data-wow-delay="100ms"> <?php echo get_field('old'); ?></div>
        </div>
    </div>
    <div class="container">
        <div class="block_3">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <div class="big_text animate__animated animate__fadeInUp wow" data-wow-duration="2s" data-wow-delay="100ms">
                            <?php echo get_field('bl3_title'); ?>
                        </div>
                        <div class="content_block">
                            <div class="left_block animate__animated animate__fadeInLeft wow" data-wow-duration="2s" data-wow-delay="100ms">
                                <div class="prog_wrap">
                                    <div class="prog_head">
                                        <div class="tabs_prog">
                                                <?php 
                                                $id = 0;
                                                while( have_rows('rep3') ): the_row(); 
                                                    $name = get_sub_field('name');
                                                    $id++;
                                                ?>
                                                <div class="prog_headding" data-el="<?php echo $id; ?>">
                                                    <?php echo $name; ?>
                                                </div>
                                                <?php 
                                                endwhile;
                                                wp_reset_query();
                                                ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="prog_main">
                                    <div class="tabs_cont_prog">
                                            <?php 
                                            $id1 = 0;
                                            while( have_rows('rep4') ): the_row(); 
                                                $text = get_sub_field('text');
                                                $id1++;
                                            ?>
                                                    <div class=" prog_el " data-el="<?php echo $id1; ?>">
                                                        <div class="item">
                                                            
                                                            <div class="text"><?php echo $text; ?>
                                                                <!-- <svg class="eq" id="Сгруппировать_11" data-name="Сгруппировать 11" xmlns="http://www.w3.org/2000/svg" width="58.014" height="43.511" viewBox="0 0 58.014 43.511">
                                                                <path id="Контур_2" data-name="Контур 2" d="M0,4V47.511L21.755,25.755V4Z" transform="translate(0 -4)" fill="#003e8e"/>
                                                                <path id="Контур_3" data-name="Контур 3" d="M20,4V47.511L41.755,25.755V4Z" transform="translate(16.259 -4)" fill="#003e8e"/>
                                                                </svg> -->
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
                            <div class="right_block animate__animated animate__fadeInRight wow" data-wow-duration="2s" data-wow-delay="100ms">
                                <div class="frap_image">
                                        <?php 
                                        $id1 = 0;
                                        while( have_rows('rep4') ): the_row(); 
                                            $img = get_sub_field('img');
                                            
                                            $id1++;
                                        ?>
                                        
                                                <img class="lazy elem_img " data-el="<?php echo $id1; ?>" src="<?php echo $img; ?>" alt="">
                                        
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
    </div>
</div>



<script>




$(document).ready(function(){
	function prog_tab(elem){
 	$('.prog_headding').removeClass('active');
 	$('.prog_el').removeClass('active');
	  $('.elem_img').removeClass('active');
 	
	$('.prog_headding[data-el="'+elem+'"]').addClass('active');
	$('.prog_el[data-el="'+elem+'"]').addClass('active');
	 $('.elem_img[data-el="'+elem+'"]').addClass('active');
}
prog_tab('1');

$('.prog_headding').click(function(){
	if(!$(this).hasClass('active')){
		elem = $(this).attr('data-el');
		prog_tab(elem);	
	}
});
})







</script>