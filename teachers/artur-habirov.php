<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
		<title>Преподаватель Артур Хабиров</title>
		<meta name="description" content="Артур Хабиров — художественный руководитель центра.">
	</head>
<body>
<style type="text/css">#active-teachers {<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/active-menu.html'); ?>}</style>
<div class="wrapper">
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.html'); ?>
	<div class="grid teacher-profile">
		<div class="teacher-name">
			<br><br><br><br>
			<h1 class="inline-page-heading"><span>Артур</span><br><span>Хабиров</span></h1><br>
			<br>Художественный<br>руководитель центра,<br>преподаватель<br>
		</div>

		<div class="teacher-photo">
			<img class="teacher-portrait" src="/images/teacher-portraits/artur-habirov.webp" alt="Артур Хабиров" width="800" height="1200">
			<p>Танцует с 2000 года, преподает с 2005 года. Представитель команды No Sense Crew / Танцуй, не комплексуй / Radi Sveta</p>
			<p>Автор и ведущий проекта «Танцуй» на Городском телеканале UTV. Вместе с командой единомышленников в 2015 году открыл центр брейк-данса «Танцуй, не комплексуй».</p>
			<p>В своем преподавании Артур делает упор на всестороннее развитие личности и помогает ученику раскрыть свой танцевальный потенциал.</p>
			<p>Участник проекта «Танцы» на Телеканале ТНТ, 4 сезон. Неоднократный призёр, судья, участник и победитель Всероссийских и Международных танцевальных фестивалей и чемпионатов.</p>
			<p>Соорганизатор Всероссийского танцевального фестиваля «Mega Dance Fest» (фестиваль организуется при поддержке ТЦ Мега). Соорганизатор регионального танцевального чемпионата «Hip-Hop Connect».</p>
			<p><strong>Девиз:</strong> Танцуй, не комплексуй!</p>
			<p>Сайт Артура Хабирова<br>
			<a href="http://arturkhabirov.com/">arturkhabirov.com</a></p>

			<?php
			foreach ([
				['artur-habirov', 'artur-habirov-video', 'Видео с Артуром'],
				['artur-habirov-extra', 'artur-habirov-extra-video', 'Ещё одно видео с Артуром'],
			] as list($teacherVideoFile, $teacherVideoId, $teacherVideoTitle)) {
				include($_SERVER['DOCUMENT_ROOT'].'/includes/teacher-local-video.php');
			}
			?>

			<div class="teacher-video">
				<iframe width="440" height="247" src="//rutube.ru/play/embed/10627261?sTitle=false&sAuthor=false" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>

		<div id="regalia-main">
			<span>Регалии за 1 место</span>
			<div class="city">
				<p>Уфа</p>
				BREAKSPIN<br>
				FIGHT CLUB<br>
				ШУМ DANCE EVENT<br>
			</div>
			<div class="city">
				<p>Самара</p>
				NEW YORK BATTLE 4<br>
				СНИКЕРС УРБАНИЯ<br>
				GABA-FEST<br>
			</div>
			<div class="city">
				<p>Челябинск</p>
				PRO-ДВИЖЕНИЕ<br>
				ENERGY FEST<br>
				<br>
			</div>
			<div class="city">
				<p>Оренбург</p>
				STREET LIFE<br>
				ROCKIN TOYZ<br>
				ЭГОИСТ<br>
			</div>
			<div class="city">
				<p>Магнитогорск</p>
				ЛЕПТАФЕСТ<br>
			</div>
			<div class="city">
				<p>Стерлитамак</p>
				FANTAZY 4<br>
			</div>
			<div class="city">
				<p>Наб. Челны</p>
				FREESTYLE ACTION<br>
			</div>
			<div class="city">
				<p>Салават</p>
				B.DAY 5<br><br><br>
			</div>
			<div class="clean"></div>
		</div>
	</div>

</div>

<!-- Футер -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>

</body>
</html>