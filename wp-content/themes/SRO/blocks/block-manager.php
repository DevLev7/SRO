	<?php 					
	
	if(get_field('manager-header') || get_field('form-text','option')){
	
	// Фото менеджера
	//if(get_field('avatar',get_field('manager'))['url']){
	if(get_field('manager')){
		$image = get_field('avatar',get_field('manager'));
		$name = get_the_title(get_field('manager'));
		$position = get_field('position',get_field('manager'));
	} else {
		$image = get_field('form-manager','option')['avatar'];
		$name = get_field('form-manager','option')['name'];
		$position = get_field('form-manager','option')['position'];
	}	

	$avatar_info = new SplFileInfo($image['url']);
	$avatar_ext = $avatar_info->getExtension();
									
	//	Адаптивное изображение
	$imageSize = '';
	include (locate_template('template-parts/lazy-image-responsive-IE.php'));
	?>
	
	<section id="manager" class="manager-1">
		<div class="circle6"></div>
		<div class="circle7"></div>
		<div class="circle8"></div>
		<div class="circle9"></div>
		<div class="circle10"></div>
		<div class="text_bl">
			<h5>При заказе оформления любого вида допуска СРО бесплатно поможем вам подготовить все нужные документы.</h5>
		</div>
		<img class="man_img2 lazy" data-src="<?php echo THEME_IMAGES; ?>/man_img2.png" alt=""> 
		<img class="man_img1 lazy" data-src="<?php echo THEME_IMAGES; ?>/man_img1.png" alt=""> 
		<div class="container-fluid">
			<div class="wrap">
				<div class="left-wrap">	
					<div class="text-wrap">	
						<div class="utp animate__animated animate__fadeInLeft wow" data-wow-duration="2s" data-wow-delay="100ms">
							<?php if(get_field('manager-header')){ ?>
							<div class="header">
								<?php the_field('manager-header'); ?>
							</div>
							<?php if(get_field('manager-desc')){ ?>
							<div class="subheader">
								<?php the_field('manager-desc'); ?>
							</div>
							<?php } ?>
							<?php }else{ ?>
							<div class="header subheader">
								<?php the_field('form-text','option'); ?>
							</div>
							<?php } ?>
						</div>
						<div class="manager-label">
							<div class="name">
								<?php echo $name;?>
							</div>
							<div class="position">
								<?php echo $position;?>
							</div>
						</div>
			
					
					</div>
					
				</div>	
				<div class="form-wrap <?php echo get_field('form','option')['center'] ? "ct" : ""; ?> animate__animated animate__fadeInLeft wow" data-wow-duration="2s" data-wow-delay="100ms">
					<?php 
					$formEmail = "";
					
					// Проверка на заполнение формы сначала на самой странице, если нет, то из блока Формы, ели и там пусто, то по умолчанию
					
					// Заголовок
					if(get_field('manager-form')['head']){
						$formTitle = get_field('manager-form')['head'];
					}elseif(get_field('form','option')['head']){
						$formTitle = get_field('form','option')['head'];
					}else{
						$formTitle = "Заполните форму";
					}
					
					// Описание
					if(get_field('manager-form')['desc']){
						$formDesk = get_field('manager-form')['desc'];
					}elseif(get_field('form','option')['desc']){
						$formDesk = get_field('form','option')['desc'];
					}else{
						$formDesk = "и мы перезвоним вам в самое ближайшее время";
					}
					
					// Текстовое поле
					if(get_field('manager-form')['textarea']){
						$formTextarea = get_field('manager-form')['textarea'];
					}elseif(get_field('form','option')['textarea']){
						$formTextarea = get_field('form','option')['textarea'];
					}else{
						$formTextarea = "";
					}
					
					// Кнопка
					if(get_field('manager-form')['btn']){
						$formBtn = get_field('manager-form')['btn'];
					}elseif(get_field('form','option')['btn']){
						$formBtn = get_field('form','option')['btn'];
					}else{
						$formBtn = "Отправить сообщение";
					}
					
					include (locate_template('blocks/block-form.php'));
					?>
				</div>
			</div>
		</div>
	
	</section>
	<? }else{ ?>
	
	<section id="no-manager">
		<div class="container-fluid">
			<div class="row">
				<div class="col-s">	
					<div class="wrap">	
						<div class="header">
							<h2>Вам нужно больше информации?</h2>
							<p>Не стесняйтесь обращаться к нам!</p>
						</div>
						<div class="button">
							 <div data-src="#popup-mess" data-fancybox class="btn" anim="ripple"><span>Оставить сообщение</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<? } ?>