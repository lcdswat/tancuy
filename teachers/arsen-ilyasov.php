<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
		<title>Преподаватель Арсен Ильясов</title>
		<meta name="description" content="Арсен Ильясов — преподаватель брейк-данса.">
	</head>
<body>
<style type="text/css">#active-teachers {<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/active-menu.html'); ?>}</style>
<div class="wrapper">
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.html'); ?>
	<div class="grid teacher-profile">
		<div class="teacher-name">
			<br><br><br><br>
			<h1 class="inline-page-heading"><span>Арсен</span><br><span>Ильясов</span></h1><br>
			<br>Основной преподаватель центра<br>
<!-- 			<div class="motto">
				<span>Девиз:</span><br>
				<span>Танцуй, не комплексуй!</span>
			</div> -->
		</div>

		<div class="teacher-photo">
			<img class="teacher-portrait" src="/images/teacher-portraits/arsen-ilyasov.webp" alt="Арсен Ильясов" width="800" height="1200">
			<p>Танцует с 2007 года, начал танцевать брейк в 18 лет. Имеет успешный опыт преподавания — 16 лет.</p>
			<p>Преподаёт как детям, так и взрослым. Проводит тренировки в младших группах (4–6 лет), в группах для детей 7–15 лет и в старшей группе.</p>
			<p>Является учеником команды No Sense Crew (Уфа-Оренбург). Представитель команды «Just Funk» и сообщества «Танцуй, не комплексуй».</p>
			<p>Как и все преподаватели центра Арсен отдаётся преподаванию на 100 процентов. Воспитал и воспитывает чемпионов и фанатов Брейкинга, которые достойно представляют нашу Республику и Страну.</p>

			<?php
			foreach ([
				['arsen-ilyasov', 'arsen-ilyasov-video', 'Видео с Арсеном'],
				['arsen-ilyasov-extra-1', 'arsen-ilyasov-extra-video-1', 'Видео с Арсеном — 2'],
				['arsen-ilyasov-extra-2', 'arsen-ilyasov-extra-video-2', 'Видео с Арсеном — 3'],
			] as list($teacherVideoFile, $teacherVideoId, $teacherVideoTitle)) {
				include($_SERVER['DOCUMENT_ROOT'].'/includes/teacher-local-video.php');
			}
			?>
		</div>

		<div id="regalia-main">
			<span>Участие и Победы</span>
			<div class="teacher-cities">
				<div class="city">
					<p>Уфа</p>
					MORTAL FOR JUNIOR<br>
					BREAK ELKA<br>
					FIGHT CLUB<br>
					ШУМ III<br>
					NOVATOR JAM<br>
					SOUL JAM
				</div>
				<div class="city">
					<p>Стерлитамак</p>
					FANTASY 2<br>
					HAPPY B-DAY 6<br>
					ДЕТИ УЛИЦ 5<br>
				</div>
				<div class="city">
					<p>Казань</p>
					ВИНТОВКА&nbsp;2011,&nbsp;2013&nbsp;г.<br>
					COMBONATION 6<br>
					РЭП НА ГОЛОВЕ 3
				</div>
				<div class="city">
					<p>Салават</p>
					B-DAY  2009, 2010 гг.<br>
					LORDS OF THE BATTLE
				</div>
				<div class="city">
					<p>Самара</p>
					СНИКЕРС&thinsp;УРБАНИЯ&thinsp;09
				</div>
				<div class="city">
					<p>Ижевск</p>
					220 VOLT
				</div>
				<div class="city">
					<p>Пермь</p>
					ВСЕ СТИЛИ В СИЛЕ<br>2011—2013 г.
				</div>
				<div class="city">
					<p>Москва</p>
					ТАНЦУЙ В&nbsp;БИТ&nbsp;2
				</div>
			</div>
		</div>
	</div>

</div>

<!-- Футер -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>

</body>
</html>