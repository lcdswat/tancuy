<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
		<title>Расписание</title>
		<meta name="description" content="Расписание занятий по брейк-дансу по группам.">
	</head>
<body>

<style type="text/css">#active-schedule {<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/active-menu.html'); ?>}</style>

<div class="wrapper">

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.html'); ?>

<div class="grid schedule-title">
		<h1 class="inline-page-heading"><span class="intro-header-one">Расписание</span></h1><br><br>
</div>

<div class="grid schedule-intro" style="font-size: 22px; line-height: 30px; margin: 40px auto 0 auto;">
	<b>Идёт набор во все группы</b><br>
	Количество мест ограничено<br>
	Подробности по телефону <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/phone.html'); ?>
</div>

<?php
$days = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
$teacherProfiles = [
    'Арсен' => '/teachers/arsen-ilyasov',
    'Марат' => '/teachers/marat-miftakhov',
    'Александр' => '/teachers/aleks-markelov',
];
$groups = [
    ['teacher' => 'Арсен', 'level' => 'Группа PRO', 'times' => ['пн' => '20:30–22:00', 'ср' => '20:30–22:00']],
    ['teacher' => 'Марат', 'level' => '7–14 лет', 'times' => ['вт' => '15:30–17:00', 'чт' => '15:30–17:00']],
    ['teacher' => 'Марат', 'level' => '7–14 лет', 'times' => ['вт' => '17:00–18:30', 'чт' => '17:00–18:30']],
    ['teacher' => 'Александр', 'level' => '4–6 лет', 'times' => ['вт' => '18:30–19:30', 'чт' => '18:30–19:30']],
    ['teacher' => 'Александр', 'level' => '7–14 лет', 'times' => ['вт' => '19:30–21:00', 'чт' => '19:30–21:00']],
    ['teacher' => 'Арсен', 'level' => '7–14 лет', 'times' => ['ср' => '15:30–17:00', 'пт' => '15:30–17:00']],
    ['teacher' => 'Александр', 'level' => '6–7 лет', 'times' => ['ср' => '17:00–18:00', 'пт' => '17:00–18:00']],
    ['teacher' => 'Арсен', 'level' => '4–6 лет', 'times' => ['ср' => '18:00–19:00', 'пт' => '18:00–19:00']],
    ['teacher' => 'Арсен', 'level' => '7–15 лет', 'times' => ['ср' => '19:00–20:30', 'пт' => '19:00–20:30']],
];
$sundayClass = 'Воскресная тренировка';
$sundayTime = '11:30–13:00';
?>
<div id="s-main">
    <div id="groups">
        <?php foreach ($groups as $i => $group): ?>
            <div>Группа <?= $i + 1 ?></div>
            <div class="prepods">Преподаватель <a class="schedule-teacher" href="<?= $teacherProfiles[$group['teacher']] ?>"><?= htmlspecialchars($group['teacher']) ?></a>,<br><?= $group['level'] ?></div>
        <?php endforeach; ?>
    </div>
    <?php foreach ($days as $day): ?>
        <div class="s-column"><div class="day-up"><?= $day ?></div><div class="day-down"><?= $day ?></div>
            <?php foreach ($groups as $group): ?>
                <?php if (isset($group['times'][$day])): ?>
                    <div class="s-time"><?= $group['times'][$day] ?></div>
                <?php else: ?>
                    <div class="s-time no-bg">&nbsp;</div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
    <div class="s-column" id="last"><div class="day-up">вс</div><div class="day-down">вс</div>
        <div class="s-time free"><?= $sundayClass ?><br><?= $sundayTime ?></div>
    </div>
    <div class="clean"></div>
</div>

<section class="mobile-schedule grid" aria-label="Занятия по группам" hidden>
    <?php foreach ($groups as $i => $group): ?>
        <article>
            <h2>Группа <?= $i + 1 ?></h2>
            <p><?= $group['level'] ?> · Преподаватель <a class="schedule-teacher" href="<?= $teacherProfiles[$group['teacher']] ?>"><?= htmlspecialchars($group['teacher']) ?></a></p>
            <dl>
                <?php foreach ($group['times'] as $day => $time): ?>
                    <div><dt><?= $day ?></dt><dd><?= $time ?></dd></div>
                <?php endforeach; ?>
            </dl>
        </article>
    <?php endforeach; ?>
    <article>
        <h2><?= $sundayClass ?></h2>
        <dl><div><dt>вс</dt><dd><?= $sundayTime ?></dd></div></dl>
    </article>
</section>

</div>

<!-- Футер -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>

</body>
</html>