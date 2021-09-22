new WOW().init();	

if ($(window).width() < 501){
	var lazyLoadInstance = new LazyLoad({
	  threshold: 500
	})
	} else {
	var lazyLoadInstance = new LazyLoad({
	  threshold: 1000
	})
}





$(document).ready(function() {

 

	const   body 			= $("body"),
			header 			= $("#header"),
	    	windowWidth  	= $(window).width(),
	    	windowHeight 	= $(window).height();

	var 	scrollTop,
			activeAnimTwoBk = false,
			heightBlockOne 	= $("#hero").height();
			blockTwo 		= $("#block_2 .block_2");

	// При старте 
	if($(window).scrollTop() > 0){
		header.addClass("scrolling");
	}
	// Фон шапки при скроллинге
	$(window).scroll(function(){
		scrollTop = $(this).scrollTop();
		if(scrollTop > 10){
			header.addClass("scrolling");
		}else{
			header.removeClass("scrolling");
		}
	});
	// Старт анимаций второй экран
	$(window).scroll(function(){
		if(activeAnimTwoBk == false){
			if(scrollTop > heightBlockOne + (heightBlockOne / 2)){
				activeAnimTwoBk = true;
				blockTwo.addClass("activeAnimate");
				
			}
		}
	});
	function activeRotateColorAnimated(elem){
		$(elem).addClass("colorRotate");
	}


    var block_show1 = false;

function scrollTracking1(){
    if (block_show1) {
        return false;
    }

    var wt = $(window).scrollTop();
    var et = $('#block_6').offset().top;

    if ( (et*0.95) < wt){
        block_show1 = true;
        $('#block_6').addClass('show')
		

        //Карта
        $('.animateOfMap path:eq(0)').animate({opacity: "0"}, 650, function(){
            $(this).next().animate({opacity: "0"}, 200, arguments.callee);
        });
        $('#lineOfBG line:eq(0)').animate({strokeDashoffset: "0"}, 950, function(){
            $(this).next().animate({strokeDashoffset: "0"}, 400, arguments.callee);
        });
    }
}
$(document).ready(function(){
  scrollTracking1();
  $(window).scroll(function(){
      scrollTracking1();
  });
});
	
	

    
    //Первый экран
    
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
    function changeOfHero(btn, color, title, shadowOfBG, quotesOfBG, houseOfBG, manOfBG, partOfBG, partOfBG1, BtnOfCheck, changeBtn, btnBGOfQuote, fillOfLine){
        btn.addEventListener('click', function (){
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
        })
    }
    changeOfHero(id_1, '#003172', urlText1, 'grad.png', 'hero_img1.png', 'hero_img3.png','hero_img2.png', '#003e8e', '#00357D', '#0F4799', '#003172', '#DD2E0D','#1E569F')
    changeOfHero(id_2, '#CB4D38', urlText2, 'grad_2.png', 'hero_img1_2.png', 'hero_img3_2.png', 'hero_img2_3.png', '#B0402E', '#953928', '#CB4D38', '#953928', '#003E8E', '#D15F4A')
    changeOfHero(id_3, '#2195B1', urlText3, 'grad_3.png', 'hero_img1_3.png', 'hero_img3_3.png', 'hero_man1.png', '#197B91','#156072', '#2195B1', '#156072', '#CB4D38', '#268298')

});
// var currentLocation = window.location
// if(currentLocation.pathname == '/a'){
//     console.log('Первый баттон');
//     changeOfHero(id_1, '#003172', urlText1, 'grad.png', 'hero_img1.png', 'hero_img3.png','hero_img2.png', '#003e8e', '#00357D', '#0F4799', '#003172', '#DD2E0D','#1E569F')
// }else if(currentLocation.pathname == '/b'){
//     console.log('Второй баттон');
//     changeOfHero(id_2, '#CB4D38', urlText2, 'grad_2.png', 'hero_img1_2.png', 'hero_img3_2.png', 'hero_img2_3.png', '#B0402E', '#953928', '#CB4D38', '#953928', '#003E8E', '#D15F4A')
// }else if(currentLocation.pathname == '/c'){
//     console.log('Третий баттон');
//     currentLocation.pathname = '/';
// }

// Форма
function addValue(){
    var changeInput = document.querySelector('input[data-quest="city1"]');
    var savedValue = document.querySelector('input[name="city1"]');
    var changeAttr = document.querySelectorAll('.select-items.select-hide div');
    var category = document.querySelector('input[name="category"]');
    changeInput.addEventListener('change', function (){
        savedValue.value = changeInput.value;
        console.log(savedValue.value);
    });
    changeAttr.forEach(element => {
        element.addEventListener('click', function(){
                category.value = element.textContent;
        });
    });
}
addValue();
