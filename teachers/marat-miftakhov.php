<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
		<title>Преподаватель Марат Мифтахов</title>
		<meta name="description" content="Марат Мифтахов — преподаватель брейк-данса.">
	</head>
<body>
<style type="text/css">#active-teachers {<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/active-menu.html'); ?>}</style>
<div class="wrapper">
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.html'); ?>
	<div class="grid teacher-profile">
		<div class="teacher-name">
			<br><br><br><br>
			<h1 class="inline-page-heading"><span>Марат</span><br><span>Мифтахов</span></h1><br>
			<br>Основной преподаватель центра<br>
		</div>

		<div class="teacher-photo">
			<img class="teacher-portrait" src="/images/teacher-portraits/marat-miftakhov.webp" alt="Марат Мифтахов" width="800" height="1200">
			<p>Танцует брейкинг с 2001 г. Начал танцевальную практику в городе Белебей. Стаж преподавания более 11 лет.</p>
			<p>Представитель команд: No Sense Crew / Техникс / Танцуй, не комплексуй / Симплз Крю.</p>
			<p>Преподаёт как детям от 5 лет, так и взрослым. Индивидуальный подход к каждому ученику.</p>
			<p>Развитие навыков на тренировках:</p>
			<ul>
				<li>Результативность</li>
				<li>Достижение поставленных задач</li>
				<li>Поиск стиля каждого ученика</li>
				<li>Работа в команде, подготовка к соревнованиям и выступлениям</li>
			</ul>

			<?php
			$teacherVideoFile = 'marat-miftakhov';
			$teacherVideoId = 'miftakhov-video';
			$teacherVideoTitle = 'Видео с Маратом';
			include($_SERVER['DOCUMENT_ROOT'].'/includes/teacher-local-video.php');
			?>
		</div>

		<div id="regalia-main">
			<span>Участие и победы</span>
			<p>Победитель, призёр и участник Республиканских, Всероссийских и международных фестивалей и чемпионатов по брейкингу.</p>
		</div>
	</div>

</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>

</body>
</html>