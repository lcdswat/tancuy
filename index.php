<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.html'); ?>
		<link rel="stylesheet" type="text/css" href="/site-files/slider.css">
		<link rel="stylesheet" href="/site-files/photo-gallery.css">
		<script defer src="/site-files/photo-gallery.js"></script>
		<title>О центре</title>
		<meta name="description" content="Центр брейк-данса «Танцуй, не комплексуй» в Уфе.">
	</head>
<body>

<style type="text/css">#active-about {<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/active-menu.html'); ?>}</style>

<div class="wrapper">

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.html'); ?>

<div class="slider-stage">
<div id="slider-main"></div>

<?php
$slideLines = [
    ['больших плюсов', 'нашего центра'],
    ['Зимнее и весеннее шоу от учеников,', 'а также аттестация кураторами центра —', 'чемпионами мира по брейк-дансу'],
    ['Съёмки учеников центра', 'в передаче «Танцуй»', 'на «Городском телеканале UTV»'],
    ['Открытые уроки', 'с приглашёнными', 'танцорами'],
    ['2–3 занятия в неделю', 'продолжительностью', '1,5 часа'],
    ['Наши педагоги — неоднократные', 'участники и победители Всероссийских', 'чемпионатов по брейк-дансу'],
    ['Уроки с художественным', 'руководителем центра', 'Артуром «Клещом» Хабировым'],
    ['Участие во Всероссийских', 'чемпионатах', 'по брейк-дансу'],
];
// Tight viewBoxes keep the original digits centered inside the mobile plaques.
$mobileDigitViewBoxes = [
    1 => '27.5 14.3 45.8 83.2',
    2 => '24.7 13.5 58.6 84.6',
    3 => '13 13.7 57.8 84.9',
    4 => '10.6 14.6 63.2 83.1',
    5 => '19.2 14.5 57.4 85',
    6 => '16.8 13.8 63.9 85.3',
    7 => '15.9 16 60.9 83.3',
];
$introSubtitle = 'Или для тех, кто любит сравнивать';
$desktopSlideLines = $slideLines;
// Эти две десктопные плашки сохраняют переносы исходного макета.
foreach ([2 => [3, 5], 7 => [1, 2]] as $i => [$firstLineWords, $secondLineWords]) {
    $words = explode(' ', implode(' ', $slideLines[$i]));
    $desktopSlideLines[$i] = [
        implode(' ', array_slice($words, 0, $firstLineWords)),
        implode(' ', array_slice($words, $firstLineWords, $secondLineWords)),
        implode(' ', array_slice($words, $firstLineWords + $secondLineWords)),
    ];
}
?>
<div class="grid slider-artwork" aria-live="polite">
    <?php foreach ($desktopSlideLines as $i => $lines): ?>
        <div class="slider-text" id="i<?= $i ?>" aria-hidden="<?= $i === 0 ? 'false' : 'true' ?>">
            <svg class="slide-digit" role="img" aria-label="<?= $i ?: 7 ?>" width="88" height="112">
                <use href="/images/slider-digits.svg#digit-<?= $i ?>"/>
            </svg>
            <?php foreach ($lines as $line): ?>
                <span class="desktop-line"><span><?= htmlspecialchars($line) ?></span></span>
            <?php endforeach; ?>
            <?php if ($i === 0): ?><small><?= htmlspecialchars($introSubtitle) ?></small><?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>

<div class="mobile-caption" hidden aria-live="polite">
    <?php foreach ($slideLines as $i => $lines): ?>
        <div class="slide-caption<?= $i === 0 ? ' is-active' : '' ?>">
            <?php if ($i === 1): ?>
            <div class="slide-photo slide-photo--duo" aria-hidden="true"></div>
            <?php elseif ($i === 5): ?>
            <div class="slide-photo slide-photo--teachers" aria-hidden="true"></div>
            <?php else: ?>
            <svg class="slide-photo" aria-hidden="true" focusable="false"
                 viewBox="<?= 810 * $i ?> 0 810 444" preserveAspectRatio="<?= $i === 4 ? 'xMinYMid' : 'xMidYMid' ?> slice">
                <image href="/images/slider.jpg" width="6480" height="444" />
            </svg>
            <?php endif; ?>
            <div class="caption-type">
                <?php if ($i > 0): ?>
                    <span class="caption-number" aria-hidden="true">
                        <svg viewBox="<?= $mobileDigitViewBoxes[$i] ?>" focusable="false">
                            <use href="/images/slider-digits.svg#digit-<?= $i ?>" width="88" height="112"/>
                        </svg>
                    </span>
                <?php endif; ?>
                <div class="caption-copy">
                    <?php foreach ($lines as $row => $line): ?><span class="caption-line"><?= $i === 0 && $row === 0 ? '7 ' : '' ?><?= htmlspecialchars($line) ?></span> <?php endforeach; ?>
                    <?php if ($i === 0): ?><small><?= htmlspecialchars($introSubtitle) ?></small><?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>
<div class="slider-navigation">
<div class="grid slider-arrows">
    <a class="arrow left" role="button" tabindex="0" aria-label="Предыдущий слайд" aria-disabled="true" data-shift="-1" style="display: none;"></a>
    <a class="arrow right" role="button" tabindex="0" aria-label="Следующий слайд" data-shift="1"></a>
</div>
<div class="grid" id="slider-buttons">
	<a class="slide-to" role="button" tabindex="0" data-number="1">01</a>
	<a class="slide-to" role="button" tabindex="0" data-number="2">02</a>
	<a class="slide-to" role="button" tabindex="0" data-number="3">03</a>
	<a class="slide-to" role="button" tabindex="0" data-number="4">04</a>
	<a class="slide-to" role="button" tabindex="0" data-number="5">05</a>
	<a class="slide-to" role="button" tabindex="0" data-number="6">06</a>
	<a class="slide-to" role="button" tabindex="0" data-number="7">07</a>
</div>
</div>
<script defer src="/site-files/slider.js"></script>

<main class="grid home-content">
	<section id="advantages">
		<p>Зимнее и&nbsp;весеннее шоу от&nbsp;учеников, а&nbsp;также аттестация кураторами центра&nbsp;&mdash; чемпионами мира по&nbsp;брейк-дансу</p>
		<p>Съемки учеников центра в&nbsp;передаче &laquo;Танцуй&raquo; на&nbsp;&laquo;Городском телеканале UTV&raquo;</p>
		<p>Открытые уроки с&nbsp;приглашёнными танцорами</p>
		<p>3&nbsp;занятия в&nbsp;неделю продолжительностью 1,5 часа</p>
		<p>Наши педагоги&nbsp;&mdash; неоднократные участники и&nbsp;победители Всероссийских чемпионатов по&nbsp;Брейк-дансу</p>
		<p>Уроки с&nbsp;ведущим передачи &laquo;Танцуй&raquo; на&nbsp;городском телеканале UTV, неоднократного победителя и&nbsp;судьи Всероссийских фестивалей и&nbsp;чемпионатов по&nbsp;брейк-дансу Артура &laquo;Клеща&raquo; Хабирова</p>
		<p>Участие во&nbsp;Всероссийских Чемпионатах по&nbsp;Брейк-Дансу</p>
	</section>

	<section>
		<h2 class="center-life-heading" id="center-life-title"><span class="intro-header-one">Жизнь центра</span></h2>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/photo-gallery.php'); ?>
	</section>

	<section>
		<h2><span class="intro-header-one">Отзывы</span></h2>
		<div class="home-reviews">
			<a data-fancybox class="review" href="https://www.youtube.com/watch?v=6KRYBF7Yuf8">
				<img src="/images/review-aynaz-t.jpg">
				<span>Айназ Мухамедьяров, <i>6&nbsp;лет</i></span>
			</a>
			<a data-fancybox class="review" href="https://www.youtube.com/watch?v=XpEpHL802iw">
				<img src="/images/review-amin-t.jpg">
				<span>Амин Аминов, <i>5&nbsp;лет</i></span>
			</a>
			<a data-fancybox class="review" href="https://www.youtube.com/watch?v=AxTGb6hR7JQ">
				<img src="/images/review-safiullin-t.jpg">
				<span>Сафиуллин Роберт, <i>10&nbsp;лет</i></span>
			</a>
			<a data-fancybox class="review" href="https://www.youtube.com/watch?v=8tQQ9Kcia4g">
				<img src="/images/review-syrchin-t.jpg">
				<span>Сырчин Илья, <i>9&nbsp;лет</i></span>
			</a>
		</div>
	</section>

	<section>
		<h2><span class="intro-header-one">Частые</span> <span class="intro-header-one">вопросы</span></h2>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/faq-list.php'); ?>
	</section>

	<section>
		<h2><span class="intro-header-one">История</span></h2>
		<p>
			В&nbsp;корне названия танца &laquo;Брейк-данс&raquo; лежит слово break (ломать). Это танец, который ломает рамки, раздвигает стенки сознания, учит мыслить свободно и&nbsp;творчески, вдохновляет к&nbsp;познанию нового.</p>
		<p>
			Именно эту философию и&nbsp;хочет донести до&nbsp;большинства людей танцор с&nbsp;многолетним стажем <a href="http://arturkhabirov.com/">Артур &laquo;Клещ&raquo; Хабиров</a>&nbsp;&mdash; сначала через свои выступления, затем через экран телевизора с&nbsp;помощью передачи &laquo;Танцуй&raquo; на&nbsp;городском телеканале UTV.</p>
		<p>
			Желание обучить не&nbsp;только брейк-дансу, но&nbsp;и&nbsp;всей его идеологии, как можно больше людей, привело к&nbsp;мысли об&nbsp;открытии центра брейк-данса &laquo;Танцуй, не&nbsp;комплексуй!&raquo;</p>
	</section>

	<section>
		<h2><span class="intro-header-one">Миссия</span></h2>
		<p>
			Создать благоприятные условия для детей, подростков и&nbsp;молодежи, обучить и&nbsp;вдохновить их&nbsp;через танцевальное искусство&nbsp;&mdash; в&nbsp;будущем именно они изменят нашу страну к&nbsp;лучшему, сделают её&nbsp;сильной и&nbsp;творческой.</p>
		<p>Центр по брейк-дансу «Танцуй, не комплексуй» ждет тебя на своих занятиях. Возраст, пол и физическая подготовка не имеют значения. Звони! Пиши! Прибегай)))</p>
	</section>
</main>


</div>

<!-- Футер -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>

<script type="text/javascript">
	$("[data-fancybox]").fancybox({
	});
</script>

</body>
</html>