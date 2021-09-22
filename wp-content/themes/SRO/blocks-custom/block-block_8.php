<div id="block_8">
    <div class="square7"></div>   
    <img class="bl8_img1 lazy animate__animated animate__fadeInLeft wow" data-wow-duration="2s" data-wow-delay="100ms" src="<?php echo THEME_IMAGES; ?>/bl8_img1.png" alt="">  
    <img class="bl8_img2 lazy animate__animated animate__fadeInRight wow" data-wow-duration="2s" data-wow-delay="100ms" data-src="<?php echo THEME_IMAGES; ?>/bl8_img2.png" alt="">  
    <div class="container-fluid">
        <div class="block_8">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                      <div class="animate__animated animate__fadeInLeft wow" data-wow-duration="2s" data-wow-delay="100ms">  <?php echo get_field('bl8_title'); ?> </div>
                        <div class="form_block_wrap animate__animated animate__fadeInRight wow" data-wow-duration="2s" data-wow-delay="100ms">
                            <h4>Введите данные и получите 3 варианта СРО и расчет стоимости вступления</h4>
                            <form method="POST" action="<?php echo $formUrl ? $formUrl : get_page_link(get_page_by_title('Страница благодарности'));?>" class="form_block" enctype="multipart/form-data">
                                <input type="hidden" name="formid" value="<?php echo $formTitle; ?>">
                                <input type="hidden" name="title" value="<?php echo get_the_title(); ?>">
                                <input type="hidden" name="url" value="<?php echo get_permalink(); ?>">
                                <input type="hidden" name="city1" value="">
                                <input type="hidden" name="category" value="">
                                <div class="hidden"><input type="text" name="e-mail"/></div>
                                <div class="name">Выберите тип СРО</div>
                                <div class="form-group animate-top custom-select">
                                    <select>
                                    <option value="0">Выберите направление деятельности</option>
                                        <option value="1">Строительство</option>
                                        <option value="2">Проектирование</option>
                                        <option value="3">Инженерные изыскания</option>
                                    </select>
                                </div>
                                <div class="name">Какой город</div>
                                <div class="form-group animate-top">
                                    <input type="text" name="" data-quest="city1" class="form-control  " value=""/>
                                    <label>Укажите город</label>
                                </div>
                                <div class="name">Телефон</div>
                                <div class="form-group animate-top">
                                    <input type="tel" name="phone" class="form-control required  inp"/>
                                    <label>Номер телефона</label>
                                </div>
                                <div class="button animate-top">
                                    <button type="submit" name="send" class="btn" anim="ripple"><span>Получить расчет</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

<script>


var block_show6 = false;

function scrollTracking6(){
    if (block_show6) {
        return false;
    }

    var wt = $(window).scrollTop();
    var et = $('#block_8').offset().top;

    if ( (et*0.89) < wt){
        block_show6 = true;
        $('#block_8').addClass('show')
	
		
		var s = document.createElement("script");
		s.type = "text/javascript";
		s.src = "//api-maps.yandex.ru/2.1/?load=package.standard&lang=ru-RU&onload=init";
		$("#map-3").append(s);
		console.log(s)
    }
}
$(document).ready(function(){
  scrollTracking6();
  $(window).scroll(function(){
      scrollTracking6();
  });
});








</script>