<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
		<link rel="stylesheet" type="text/css" href="/site-files/slider.css">
		<title>О центре</title>
	</head>
<body>

<style type="text/css">#active-about {<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/active-menu.html'); ?>}</style>

<div class="wrapper">

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.html'); ?>

<div id="slider-main"></div>

<div class="grid">
	<img src="/images/slider-text-0.svg" id="i0" class="slider-text">
	<img src="/images/slider-text-01.svg" id="i1" class="slider-text">
	<img src="/images/slider-text-02.svg" id="i2" class="slider-text">
	<img src="/images/slider-text-03.svg" id="i3" class="slider-text">
	<img src="/images/slider-text-04.svg" id="i4" class="slider-text">
	<img src="/images/slider-text-05.svg" id="i5" class="slider-text">
	<img src="/images/slider-text-06.svg" id="i6" class="slider-text">
	<img src="/images/slider-text-07.svg" id="i7" class="slider-text">
</div>

<script type="text/javascript">

</script>

<script type="text/javascript">
 var index = 0;
function setIndex(i) {
 index = +i;
 var pos = -810 * index;
 $('#slider-main').css('background-position', pos + 'px');
 $('.slider-text').css('opacity', '0');
   var txt = '#i' + index;
 $(txt).css('opacity', '1');
  index == 0 ? $('.arrow.left').hide() : $('.arrow.left').show();
  index == 7 ? $('.arrow.right').hide() : $('.arrow.right').show();
}
</script>

<script type="text/javascript">
$(document).ready(function(){
 $('.slide-to').click(function(){
  setIndex($(this).attr('data-number'));
 });

$('.arrow').click(function(){
 var shift = +$(this).attr('data-shift');
 var newIndex = index + shift;
 if(newIndex > 7 || newIndex < 0){
 return;
 }

 setIndex(newIndex);

 });
});
</script>


<div class="grid">
	<a class="arrow left" data-shift = "-1" style="display: none;"></a>
	<a class="arrow right" data-shift = "1"></a>
</div>

<div class="grid" id="slider-buttons">
	<a class="slide-to" data-number="1">01</a>
	<a class="slide-to" data-number="2">02</a>
	<a class="slide-to" data-number="3">03</a>
	<a class="slide-to" data-number="4">04</a>
	<a class="slide-to" data-number="5">05</a>
	<a class="slide-to" data-number="6">06</a>
	<a class="slide-to" data-number="7">07</a>
</div>

<div class="grid" style="width: 810px;">
    <span class="intro-header-one">Плюсы нашего центра</span><br/><br/><br/>
	<p>
	- Ежеквартальная аттестация учеников кураторами центра - чемпионами мира по брейк- дансу;
	</p>
	<p>
	- Участие учеников Центра в проекте «Танцуй» на городском телеканале UTV;
	</p>
	<p>
	- Уникальная программа обучения, включающая в себя всестороннее развитие личности. Регулярные открытые уроки с приглашенными профессионалами творческой сферы(музыканты, танцоры, актеры, художники, …);
	</p>
	<p>
	-  3 занятия в неделю продолжительностью 1,5 часа;
	</p>
	<p>
	- Наши педагоги - неоднократные участники и победители Всероссийских чемпионатов по Брейк-дансу;
	</p>
	<p>
	-  Ежемесячный мастер-класс от ведущего передачи «Танцуй» на городском телеканале UTV, неоднократного победителя и судьи Всероссийских фестивалей и чемпионатов по брейк-дансу Артура "Клеща" Хабирова;
	</p>
	<p>
	-  Участие во Всероссийских Чемпионатах по Брейк-Дансу;
	</p><br/><br/>

	<!-- Отзывы -->
	<span class="intro-header-one">Отзывы</span><br><br><br><br>
	
	<a data-fancybox class="review" href="https://www.youtube.com/watch?v=6KRYBF7Yuf8">
  		<img src="/images/review-aynaz-t.jpg">
  		<span>Айназ Мухамедьяров, <i>6 лет</i>.</span>
	</a>
	
	<a data-fancybox class="review" href="https://www.youtube.com/watch?v=XpEpHL802iw">
  		<img src="/images/review-amin-t.jpg">
  		<span>Амин Аминов, <i>5 лет</i>.</span>
	</a>
	
	<a data-fancybox class="review" href="https://www.youtube.com/watch?v=AxTGb6hR7JQ">
  		<img src="/images/review-safiullin-t.jpg">
  		<span>Сафиуллин Роберт, <i>10 лет</i>.</span>
	</a>

	<a data-fancybox class="review" href="https://www.youtube.com/watch?v=8tQQ9Kcia4g">
  		<img src="/images/review-syrchin-t.jpg">
  		<span>Сырчин Илья, <i>9 лет</i>.</span>
	</a>
	
	<div class="clean"></div><br><br><br>

	<!-- Частые вопросы -->
	<span class="intro-header-one">Частые вопросы</span><br><br><br><br>
	<span class="intro-header-two">КАК ПРОХОДИТ АТТЕСТАЦИЯ В&nbsp;ВАШЕМ ЦЕНТРЕ?</span>
	<p>
		Хороший вопрос!) Наша аттестация проходит в&nbsp;виде брейк-данс баттла. Этот танец зародился на&nbsp;улицах США, и&nbsp;молодые ребята всегда соревновались в&nbsp;своём мастерстве ,чтобы выяснить, чей стиль танца круче. Брейк-данс дал им&nbsp;свободу и&nbsp;веру в&nbsp;свои силы.<br>
		Отчетный концерт в&nbsp;центре &laquo;Танцуй, не&nbsp;комплексуй!&raquo; проходит 2&nbsp;раза в&nbsp;год, зимой и&nbsp;весной. На&nbsp;аттестацию приезжают наши кураторы из&nbsp;Москвы&nbsp;&mdash; чемпионы мира по&nbsp;брейк-дансу Артём Алиев и&nbsp;Влад Сыреев. Именно они оценивают мастерство наших учеников и&nbsp;смотрят, чему ребята научились
	<br><br>
	</p>

	<span class="intro-header-two">КАК ОБЫЧНО ПРОХОДЯТ У&nbsp;ВАС ВОСКРЕСНЫЕ ЗАНЯТИЯ<br>И&nbsp;ОТКРЫТЫЕ УРОКИ?</span>
	<p>
		Мы&nbsp;хотим, чтобы наши ученики развивались всесторонне, и&nbsp;именно поэтому так стараемся, чтобы ребята узнавали как можно больше творческих профессий и&nbsp;пробовали их&nbsp;освоить. Мы&nbsp;стремимся к&nbsp;тому, чтобы наши ученики мыслили без комплексов.<br>
		На&nbsp;воскресные занятия мы&nbsp;приглашаем людей самых разных творческих профессий&nbsp;&mdash; у&nbsp;нас в&nbsp;гостях были музыканты, художники, танцоры, ди-джеи, актёры, преподаватели. Эти люди увлечены своим любимым делом и&nbsp;показывают достойный пример ученикам центра. Наши гости проводят небольшой мастер-класс на&nbsp;20-30&nbsp;минут, а&nbsp;затем тренировка продолжается в&nbsp;обычном режиме.
	<br><br>
	</p>

	<span class="intro-header-two">КАК ЧАСТО РЕБЯТА ПРИНИМАЮТ УЧАСТИЕ В ТАНЦЕВАЛЬНЫХ<br>БАТТЛАХ И ДЖЕМАХ?</span>
	<p>
		Мы&nbsp;очень часто участвуем в&nbsp;танцевальных баттлах различного масштаба! Не&nbsp;пропускаем городские соревнования и&nbsp;очень стараемся как можно чаще выезжать на&nbsp;фестивали в&nbsp;другие города нашей страны.<br>
		2&nbsp;раза в&nbsp;учебном году у&nbsp;нас проходят свои брейк-данс баттлы (зимой и&nbsp;весной). Также мы&nbsp;активно принимаем участие в&nbsp;мероприятиях от&nbsp;компании &laquo;Уфанет&raquo;&nbsp;&mdash; ребята представляют наш центр на&nbsp;таких масштабных праздниках , как &laquo;Дети&nbsp;&mdash; наше будущее&raquo; и&nbsp;&laquo;Весенний бал&raquo;.<br>
		Мы&nbsp;с&nbsp;уверенностью говорим, что скучать вам точно не&nbsp;придётся))).
	<br><br>
	</p>

	<span class="intro-header-two">Я боюсь прийти на первое занятие<br>и то что ребята могут засмеять меня. Что делать?</span>
	<p>
		Все мы&nbsp;ученики и&nbsp;приходим на&nbsp;занятия чтобы учиться танцевать. Главное сделать шаг вперед. И&nbsp;помните что в&nbsp;зале находится опытный педагог, который контролирует весь тренировочный процесс. Занятия проходят в&nbsp;позитивной обстановке, где все обмениваются опытом и&nbsp;общаются.
	<br><br>
	</p>

	<span class="intro-header-two">ЧТО&nbsp;ЕСЛИ Я РАНЕЕ НЕ&nbsp;ЗАНИМАЛСЯ ТАНЦАМИ?</span>
	<p>
		Это не&nbsp;страшно. Не&nbsp;важно сколько вам лет, какое у&nbsp;вас телосложение. Наши преподаватели проявляют индивидуальный подход к&nbsp;каждому и&nbsp;помогают раскрыть сильные стороны ученика, ну&nbsp;и&nbsp;конечно научить Вас &laquo;Танцевать, не&nbsp;комплексовать&raquo;)).
	<br><br>
	</p>

	<span class="intro-header-two">ЕСТЬ&nbsp;ЛИ У&nbsp;ВАС ГРУППЫ ДЛЯ САМЫХ МАЛЕНЬКИХ?</span>
	<p>
		Да, есть. Группа со&nbsp;специальной программой в&nbsp;которую входит современная хореография, акробатика, стрейчинг (растяжка) и&nbsp;конечно&nbsp;же брейк. За&nbsp;более подробной информации обращайтесь к&nbsp;нашему администратору по&nbsp;тел: 266-56-14.
	<br><br>
	</p>

	<span class="intro-header-two">CКОЛЬКО НУЖНО ВРЕМЕНИ ЧТОБЫ НАЧАТЬ КРУТО ТАНЦЕВАТЬ?</span>
	<p>
		Тогда когда научишься крутиться 500 раз на&nbsp;голове:-). Если честно, то&nbsp;при серьезном подходе за&nbsp;месяца четыре ты&nbsp;сможешь удивить всех своих друзей и&nbsp;подружку с&nbsp;соседнего класса:-). Но&nbsp;если ты&nbsp;хочешь действительно быть одним из&nbsp;лучших, то&nbsp;необходимо относиться серьезно к&nbsp;тренировкам, быть любознательным, и&nbsp;с&nbsp;опытом все получится!
	<br><br>
	</p>
	
	<span class="intro-header-two">КАКАЯ ФОРМА ОДЕЖДЫ НЕОБХОДИМА ДЛЯ ЗАНЯТИЙ БРЕЙКОМ?</span>

	<p>
		Удобная вам одежда, которая не&nbsp;сковывает ваши движения, в&nbsp;которой вы&nbsp;чувствуете себя комфортно. Сменная обувь (спортивная).
	<br><br>
	</p>

	<span class="intro-header-two">А ДЕВУШКИ У ВАС ЗАНИМАЮТСЯ?</span>
	<p>
		Да&nbsp;конечно, и&nbsp;не&nbsp;одна:-)
	<br><br>
	</p>

	<span class="intro-header-two">А КАК МНОГО ЗАНИМАЕТСЯ У ВАС ДЕВУШЕК И СКОЛЬКО ЮНОШЕЙ?</span>
	<p>
		Если смотреть в&nbsp;процентном соотношении то&nbsp;70%&nbsp;&mdash; мальчики, 30%&nbsp;&mdash; девочки. С&nbsp;каждым годом девочек становится все больше.
	<br><br><br><br>
	</p>

	<!-- История -->
	<span class="intro-header-one">История</span><br/><br/><br/>
	<p>
		В&nbsp;корне названия танца &laquo;Брейк-данс&raquo; лежит слово break (ломать). Это танец, который ломает рамки, раздвигает стенки сознания, учит мыслить свободно и&nbsp;творчески, вдохновляет к&nbsp;познанию нового. 
	</p>
	<p>
		Именно эту философию и&nbsp;хочет донести до&nbsp;большинства людей танцор с&nbsp;многолетним стажем <a href="http://arturkhabirov.com/">Артур &laquo;Клещ&raquo; Хабиров</a>&nbsp;&mdash; сначала через свои выступления, затем через экран телевизора с&nbsp;помощью передачи &laquo;Танцуй&raquo; на&nbsp;городском телеканале UTV.
	</p>
	<p>
		Желание обучить не&nbsp;только брейк-дансу, но&nbsp;и&nbsp;всей его идеологии, как можно больше людей, привело к&nbsp;мысли об&nbsp;открытии центра брейк-данса &laquo;Танцуй, не&nbsp;комплексуй!&raquo;<br><br>
	</p><br/><br/>

	<!-- Миссия -->
	<span class="intro-header-one">Миссия</span><br/><br/><br/>
	<p>
		Создать благоприятные условия для детей, подростков и&nbsp;молодежи, обучить и&nbsp;вдохновить их&nbsp;через танцевальное искусство&nbsp;&mdash; в&nbsp;будущем именно они изменят нашу страну к&nbsp;лучшему, сделают её&nbsp;сильной и&nbsp;творческой.
	</p>
    <p>Центр по брейк-дансу «Танцуй, не комплексуй» ждет тебя на своих занятиях. Возраст, пол и физическая подготовка не имеют значения. Звони! Пиши! Прибегай))) <span style="font-weight:bold;color:#E50046; font-size: 18px;">(347) 266-56-14</span>
    <br><br><br><br>
    </p>
</div>

<div class="footerPush"></div>

</div>

<!-- Футер -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>

<script type="text/javascript">
	$("[data-fancybox]").fancybox({
		// Options will go here
	});
</script>

</body>
</html>