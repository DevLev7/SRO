<?php get_header(); ?>
<?php 
if ( !is_page_template(get_option( 'page_on_front' )) ) {
$hero_bg = get_field('group', get_option( 'page_on_front' ))['hero-bg']['url'];
$hero_bg_micro = get_field('group', get_option( 'page_on_front' ))['hero-bg']['sizes']['micro-item'];
?>
	<section id="hero" 
	class="<?php echo get_field('group', get_option( 'page_on_front' ))['hero-image'] ? "hero-image" : ""; ?>" 
	<?php echo $hero_bg ? 'style="background-image: url('.$hero_bg.'), url('.$hero_bg_micro.')"' : '' ; ?>
	>
<?php }else{ ?>
	<section id="hero" 	class="hero-image">	
<?php } ?>	
<div class="square1"></div>
    <div class="square2"></div>
    <div class="square3"></div>
    <svg class="line_bg" xmlns="http://www.w3.org/2000/svg" width="1095.814" height="1030.317" viewBox="0 0 1095.814 1030.317">
    <g id="Сгруппировать_1700" data-name="Сгруппировать 1700" transform="translate(-825.5 0.317)">
        <g id="Сгруппировать_98" data-name="Сгруппировать 98" transform="translate(-2076.84 -375.5)">
        <line id="Линия_1" data-name="Линия 1" y2="760.67" transform="translate(3017.5 376)" fill="none" stroke="#1e569f" stroke-width="2"/>
        <line id="Линия_2" data-name="Линия 2" x2="928.415" transform="translate(3017.5 1136.67)" fill="none" stroke="#1e569f" stroke-width="2"/>
        <line id="Линия_3" data-name="Линия 3" y2="645.17" transform="translate(3945.915 491.5)" fill="none" stroke="#1e569f" stroke-width="2"/>
        <line id="Линия_4" data-name="Линия 4" x1="329.425" y2="461.67" transform="translate(3667.915 675)" fill="none" stroke="#1e569f" stroke-width="2"/>
        <line id="Линия_5" data-name="Линия 5" y2="267.33" transform="translate(3667.915 1136.67)" fill="none" stroke="#1e569f" stroke-width="2"/>
        <line id="Линия_6" data-name="Линия 6" y2="728.991" transform="translate(3206.33 675.085)" fill="none" stroke="#1e569f" stroke-width="2"/>
        <line id="Линия_7" data-name="Линия 7" x2="979.84" transform="translate(3017.5 675.085)" fill="none" stroke="#1e569f" stroke-width="2"/>
        <line id="Линия_8" data-name="Линия 8" x1="423.01" y2="299.085" transform="translate(3484.33 376)" fill="none" stroke="#1e569f" stroke-width="2"/>
        <line id="Линия_9" data-name="Линия 9" y2="461.585" transform="translate(3484.33 675.085)" fill="none" stroke="#1e569f" stroke-width="2"/>
        </g>
        <path id="Контур_13" data-name="Контур 13" d="M0,0V726.7" transform="translate(826 303.302)" fill="none" stroke="#0062e2" stroke-width="1"/>
    </g>
    </svg>
    <img class="grad lazy" src="<?php echo THEME_IMAGES; ?>/grad.png" alt=""> 
	<img class="thanks_img lazy" src="<?php echo THEME_IMAGES; ?>/thanks_img.png" alt=""> 
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-7 col-lg-8 col-ml-7 col-md-7 col-12">
					<div class="main">
						<div class="wrap">
							<div class="header list">
								<h1>Ожидайте звонка менеджера</h1>
							</div>
							<div class="button">
								<button type="button" onclick="history.back();" class="btn"><span>Вернуться назад</span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>