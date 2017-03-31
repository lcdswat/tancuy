<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
		<link rel="stylesheet" type="text/css" href="/site-files/slider.css">
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
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
	<span class="intro-header-one">Отзывы родителей</span><br/><br/><br/>
	<table>
	    <tbody>
	        <tr>
	            <td style="width:50%; vertical-align:top;">
	                <a style='color:black' target="_blank" href="https://vk.com/id408594"><b>Алмаз Манаков</b></a><br/>
	                Наш сын начал заниматься в центре Брейк-данса "Танцуй, не комплексуй" с сентября 2016 года. Команда центра очень дружная, открытая. Преподаватели пользуются большим уважением среди детей. Все занятия проходят с полной отдачей, дети вовлечены в работу. Энергия и творчество во всем. Ребенок ходит с большим удовольствием. Спасибо всей команде. За время тренировок физика ребенка сильно выросла. Он стал увереннее.<br/><br/>
	            </td>
	            <td style="width:50%; vertical-align:top;">
	                <a style='color:black' target="_blank" href="https://vk.com/id199871045"><b>Айгуль Уразметова</b></a><br/>
	                Нам нравится центр прежде всего подходом к обучению. Команда центра по-настоящему заботиться о результатах детей. Они привозят чемпионов мира, приглашают на занятия интересных людей и регулярно организуют различные мероприятия.<br/><br/>
	            </td>
	        </tr>
	        <tr>
	            <td style="width:50%; vertical-align:top;">
	                <a style='color:black' target="_blank" href="https://vk.com/id25567540"><b>Ольга Ким</b></a><br/>
	                Яша любит не только танцевать в центре, но и сниматься у них на телевидении. Потом мы всей семьей смотрим его выступления на канале UTV.
	            </td>
	            <td style="width:50%; vertical-align:top;">
	                <a style='color:black' target="_blank" href="https://vk.com/urozh2006"><b>Анна Урожай</b></a><br/>
	                Спасибо центру за то, что помогли ребенку найти себя! Теперь он точно знает, что брейк-данс это лучший танец!
	            </td>
	        </tr>
	    </tbody>
	</table>
	<br/><br/><br/>
	<span class="intro-header-one">Частые вопросы</span><br><br><br>

		<span class="intro-header-two">Я боюсь прийти на первое занятие<br>и то что ребята могут засмеять меня. Что делать?</span>

		<p>
			Все мы&nbsp;ученики и&nbsp;приходим на&nbsp;занятия чтобы учиться танцевать. Главное сделать шаг вперед. И&nbsp;помните что в&nbsp;зале находится опытный педагог, который контролирует весь тренировочный процесс. Занятия проходят в&nbsp;позитивной обстановке, где все обмениваются опытом и&nbsp;общаются.<br><br>
		</p>

		<span class="intro-header-two">ЧТО&nbsp;ЕСЛИ Я РАНЕЕ НЕ&nbsp;ЗАНИМАЛСЯ ТАНЦАМИ?</span>

		<p>
			Это не&nbsp;страшно. Не&nbsp;важно сколько вам лет, какое у&nbsp;вас телосложение. Наши преподаватели проявляют индивидуальный подход к&nbsp;каждому и&nbsp;помогают раскрыть сильные стороны ученика, ну&nbsp;и&nbsp;конечно научить Вас &laquo;Танцевать, не&nbsp;комплексовать&raquo;)).
		</p>

		<img src="/images/faq_1.jpg" class="round"><br><br><br><br>

		<span class="intro-header-two">ЕСТЬ&nbsp;ЛИ У&nbsp;ВАС ГРУППЫ ДЛЯ САМЫХ МАЛЕНЬКИХ?</span>

		<br><br><iframe style="border-radius: 10px;" width="999" height="562" src="https://www.youtube.com/embed/XTWr1DVI-KU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe><br><br>

		<p>
			Да, есть. Группа со&nbsp;специальной программой в&nbsp;которую входит современная хореография, акробатика, стрейчинг (растяжка) и&nbsp;конечно&nbsp;же брейк. За&nbsp;более подробной информации обращайтесь к&nbsp;нашему администратору по&nbsp;тел: 266-56-14.<br><br>
		</p>

		<span class="intro-header-two">CКОЛЬКО НУЖНО ВРЕМЕНИ ЧТОБЫ НАЧАТЬ КРУТО ТАНЦЕВАТЬ?</span>

		<p>
			Тогда когда научишься крутиться 500 раз на&nbsp;голове:-). Если честно, то&nbsp;при серьезном подходе за&nbsp;месяца четыре ты&nbsp;сможешь удивить всех своих друзей и&nbsp;подружку с&nbsp;соседнего класса:-). Но&nbsp;если ты&nbsp;хочешь действительно быть одним из&nbsp;лучших, то&nbsp;необходимо относиться серьезно к&nbsp;тренировкам, быть любознательным, и&nbsp;с&nbsp;опытом все получится!<br><br>
		</p>

		<span class="intro-header-two">КАКАЯ ФОРМА ОДЕЖДЫ НЕОБХОДИМА ДЛЯ ЗАНЯТИЙ БРЕЙКОМ?</span>

		<p>
			Удобная вам одежда, которая не&nbsp;сковывает ваши движения, в&nbsp;которой вы&nbsp;чувствуете себя комфортно. Сменная обувь (спортивная).<br><br>
		</p>

		<span class="intro-header-two">А ДЕВУШКИ У ВАС ЗАНИМАЮТСЯ?</span>

		<p>
			Да&nbsp;конечно, и&nbsp;не&nbsp;одна:-)
		</p>

		<span class="intro-header-two">А КАК МНОГО ЗАНИМАЕТСЯ У ВАС ДЕВУШЕК И СКОЛЬКО ЮНОШЕЙ?</span>

		<p>
			Если смотреть в&nbsp;процентном соотношении то&nbsp;70%&nbsp;&mdash; мальчики, 30%&nbsp;&mdash; девочки. С&nbsp;каждым годом девочек становится все больше.
		</p>

		<br><br>
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
	<span class="intro-header-one">Миссия</span><br/><br/><br/>
	<p>
		Создать благоприятные условия для детей, подростков и&nbsp;молодежи, обучить и&nbsp;вдохновить их&nbsp;через танцевальное искусство&nbsp;&mdash; в&nbsp;будущем именно они изменят нашу страну к&nbsp;лучшему, сделают её&nbsp;сильной и&nbsp;творческой.
	</p>
	<br/>
    <p>Центр по брейк-дансу «Танцуй, не комплексуй» ждет тебя на своих занятиях. Возраст, пол и физическая подготовка не имеют значения. Звони! Пиши! Прибегай))) <span style="font-weight:bold;color:#E50046; font-size: 18px;">(347) 266-56-14</span></p><br><br><br><br>
</div>

<div class="footerPush"></div>

</div>

<!-- Футер -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>

</body>
</html>