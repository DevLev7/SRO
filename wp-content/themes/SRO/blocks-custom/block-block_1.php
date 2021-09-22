<div id="hero">
    
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
    <img class="hero_img1 " src="<?php echo THEME_IMAGES; ?>/hero_img1.png" alt=""> 
    <img class="hero_img3 animate__fadeInRight wow" data-wow-duration="3s"  src="<?php echo THEME_IMAGES; ?>/hero_img3.png" alt=""> 
    <img class="hero_img2   animate__fadeInRight wow" data-wow-duration="3s"  src="<?php echo THEME_IMAGES; ?>/hero_img2.png" alt=""> 
    
    <div class="container-fluid">
        <div class="block_1">
            <div class="row">
                <div class="col-12">
                    <div class="content animate__fadeInLeft wow" data-wow-duration="3s" >
                        <?php echo get_field('hero_text1'); ?>
                        <div class="button">
                            <div data-src="#popup-order" data-fancybox class="btn"><span><?php echo get_field('hero_btn1'); ?></span></div>
                        </div>
                        <div class="favor_wrap">
                            <?php 
                            $id=0;
							while( have_rows('rep1') ): the_row(); 
								$icon = get_sub_field('icon');
                                $name = get_sub_field('name');
                                $id++;
							?>
								<div id="id_<?php echo $id; ?>" class="favor_item">
                                    <svg class="arrow_hero" xmlns="http://www.w3.org/2000/svg" width="25.711" height="25.712" viewBox="0 0 25.711 25.712">
                                        <g id="Компонент_2_7" data-name="Компонент 2 – 7" transform="translate(0 15.17) rotate(-45)">
                                            <line id="Линия_72" data-name="Линия 72" x2="20.5" transform="translate(0 7.454)" fill="none" stroke="#fff" stroke-width="2"/>
                                            <path id="Контур_10" data-name="Контур 10" d="M10.541,0V10.541H0" transform="translate(6.546 7.454) rotate(-45)" fill="none" stroke="#fff" stroke-width="2"/>
                                        </g>
                                    </svg>
									<div class="favor_img">
                                        <?php echo file_get_contents($icon);?>
									</div>
                                    <div class="favor_content">
                                        <?php echo $name; ?>
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

<script>



var urlBase= "<?php echo THEME_IMAGES; ?>";
var urlText1= "<?php echo get_field('hero_text0'); ?>";
var urlText2= "<?php echo get_field('hero_text2'); ?>";
var urlText3= "<?php echo get_field('hero_text3'); ?>";
$('#pathOfBG path:eq(0)').animate({strokeDashoffset: "0"}, 950)
    let screen = document.querySelector('#hero');// первый экран
    let text = document.querySelector('#hero h1');//Текст h1
    let shadow = document.querySelector('.grad');//Тень рядом с типа ковычкой
    let quotes = document.querySelector('.hero_img1');//Ковычка
    let man = document.querySelector('.hero_img2');//мужичок по центру экрана
    let partOfQuotes = document.querySelector('.square1');//закрашеваемая часть ковычки
    let partOfMan = document.querySelector('.square2');//закрашеваемая часть мужичка
    let partOfHouse = document.querySelector('.square3');//закрашеваемая часть дома
    let house = document.querySelector('.hero_img3');// дом
    let allBtn = document.querySelectorAll('#hero .favor_item')//все кнопки
    let btnOgQuote = document.querySelector('#hero .button .btn');//кнопка в форме
    let line = document.querySelectorAll('#hero .line_bg line');
    let lineOfPath = document.querySelector('#hero .line_bg path')

    
    //Аргументы функции changeOfHero(кнопка на которую нажимают, цвет background на экране, текст h1, закруглённая тень, ковычки, изменение картинки дома, изменение мужичка, в какую часть перекрашивается часть дома/мужичка/ковычек, изменение цвета кнопок ,кнопка где находится пользователь, кнопка внутри формы)

    function newStyle(btn, color, title, shadowOfBG, quotesOfBG, houseOfBG, manOfBG, partOfBG, partOfBG1, BtnOfCheck, changeBtn, btnBGOfQuote, fillOfLine){
        screen.style.backgroundColor = `${color}`;
        text.innerHTML = `${title}`;
        shadow.setAttribute('src',`${urlBase}/${shadowOfBG}`);
        quotes.setAttribute('src', `${urlBase}/${quotesOfBG}`);
        house.setAttribute('src', `${urlBase}/${houseOfBG}`);
        man.setAttribute('src', `${urlBase}/${manOfBG}`);
        partOfQuotes.style.backgroundColor = `${partOfBG}`;
        partOfMan.style.backgroundColor = `${partOfBG1}`;
        partOfHouse.style.backgroundColor = `${partOfBG1}`;
        line.forEach(list =>{
            gsap.to(list, {stroke:`${fillOfLine}`, duration:1})
        })
            gsap.to(lineOfPath, {stroke: `${fillOfLine}`, duration:1})
        allBtn.forEach(item =>{
            gsap.to(item, {backgroundColor: `${BtnOfCheck}`, duration:1})
        });
        gsap.to(btnOgQuote, {backgroundColor: `${btnBGOfQuote}`, duration:1})
        gsap.to(btn, {backgroundColor: `${changeBtn}`, duration: 1});
        gsap.fromTo(house, {opacity:0},{opacity: 1, duration: 1.5});
    }
    var currentLocation = window.location
    if(currentLocation.search.indexOf('?type=builders') != -1){
        console.log('Первый баттон');
        newStyle(id_1,'#003172', urlText1, 'grad.png', 'hero_img1.png', 'hero_img3.png','hero_img2.png', '#003e8e', '#00357D', '#0F4799', '#003172', '#DD2E0D','#1E569F')
    
    }else if(currentLocation.search.indexOf('?type=designers') != -1){
        console.log('Второй баттон');
        newStyle(id_2,'#CB4D38', urlText2, 'grad_2.png', 'hero_img1_2.png', 'hero_img3_2.png', 'hero_img2_3.png', '#B0402E', '#953928', '#CB4D38', '#953928', '#003E8E', '#D15F4A')
    
    }else if(currentLocation.search.indexOf('?type=prospectors') != -1){
        console.log('Третий баттон');
        newStyle(id_3,'#2195B1', urlText3, 'grad_3.png', 'hero_img1_3.png', 'hero_img3_3.png', 'hero_man1.png', '#197B91','#156072', '#2195B1', '#156072', '#CB4D38', '#268298')
    }
    

</script>