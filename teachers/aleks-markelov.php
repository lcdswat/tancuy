<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
		<title>Преподаватель Александр Маркелов</title>
		<meta name="description" content="Александр Маркелов — преподаватель брейк-данса.">
	</head>
<body>
<style type="text/css">#active-teachers {<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/active-menu.html'); ?>}</style>
<div class="wrapper">
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.html'); ?>
	<div class="grid teacher-profile">
		<div class="teacher-name" id="markel">
			<br><br><br><br>
			<h1 class="inline-page-heading"><span>Александр</span><br><span>Маркелов</span></h1><br>
			<br>Основной преподаватель центра<br>
<!-- 			<div class="motto">
				<span>Девиз:</span><br>
				<span>Танцуй, не комплексуй!</span>
			</div> -->
		</div>

		<div class="teacher-photo">
			<img class="teacher-portrait" src="/images/teacher-portraits/aleks-markelov.webp" alt="Александр Маркелов" width="800" height="1200">
			<p>Брейк-дансом начал заниматься с 15 лет, преподавательский стаж 18 лет.</p>
			<p>Представляет команду «Новатор» и сообщество «Танцуй, не комплексуй».</p>
			<p>Важным считает найти связь с учеником, которому передает знания, заинтересовать и показать максимально развернуто всю культуру брейк-данса в целом, развить в каждом воспитаннике свой индивидуальный почерк, ну и конечно же физическая подготовка и дисциплина, благодаря этому пути можно достичь хороших результатов.</p>
			<p>Соорганизатор Всероссийского танцевального фестиваля «Mega Dance Fest» (фестиваль организуется при поддержке ТЦ Мега). Соорганизатор регионального танцевального чемпионата «Hip-Hop Connect».</p>

			<?php
			foreach ([
				['aleks-markelov-youtube', 'markel-video', 'Видео с Александром'],
				['aleks-markelov', 'markel-extra-video', 'Ещё одно видео с Александром'],
			] as list($teacherVideoFile, $teacherVideoId, $teacherVideoTitle)) {
				include($_SERVER['DOCUMENT_ROOT'].'/includes/teacher-local-video.php');
			}
			?>
		</div>

		<div id="regalia-main">
			<span>Участие и Победы</span>
			<div class="city">
				<p>Уфа</p>
				Breakspin 2006 г.<br>
				SkilzChek 2005 г.<br>
				Soul Jam / судейство<br>
				Novator Jam / судейство
			</div>
			<div class="city">
				<p>Казань</p>
				Combonation 2,3,4<br>
				Реп на голове<br>
				Винтовка<br>
				<br>
				<br>
			</div>
			<div class="city">
				<p>Стерлитамак</p>
				Шанти Павер<br>
				Happy B-Day<br>
				Духовка Батл
			</div>
			<div class="city">
				<p>Ижевск</p>
				Герои нашего времени / судейство<br>
				Ижевский бит 3 / судейство
			</div>
			<div class="city">
				<p>Челябинск</p>
				Energy 2015 г.<br>
				Кидс прорыв 2014 г.
			</div>
			<div class="city">
				<p>Владимир</p>
				Битва стилей / судейство
			</div>
			<div class="city">
				<p>Пермь</p>
				Все Стили<br>в&nbsp;Силе
			</div>
			<div class="city">
				<p>Крым, Ялта</p>
				Yalta Summer Jam 2012 , 2015
			</div>
			<div class="city">
				<p>Москва</p>
				Старая школа 2017
			</div>
			<div class="clean"></div>
		</div>
	</div>

</div>

<!-- Футер -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>

</body>
</html>