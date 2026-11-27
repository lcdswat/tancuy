<?php
$galleryPhotos = [
    ['01', 'Общее фото учеников в танцевальном зале', 1280, 960],
    ['02', 'Танцор в оранжевой футболке выполняет элемент на одной руке', 2688, 4032],
    ['03', 'Четверо юных танцоров позируют для фото', 1280, 960],
    ['04', 'Танцор выполняет стойку на голове', 2688, 4032],
    ['05', 'Съёмка интервью с юным танцором', 2560, 1707],
    ['06', 'Групповая тренировка в танцевальном зале', 2688, 4032],
    ['07', 'Групповое фото в зале', 1280, 960],
    ['08', 'Танцор в голубой толстовке выполняет элемент на полу', 2688, 4032],
    ['09', 'Рисунок на спине фирменной футболки центра', 960, 1280],
    ['10', 'Группа танцоров у расписанной стены зала', 2688, 4032],
    ['11', 'Белый логотип центра на чёрной футболке', 1280, 853],
];
$galleryVideos = [
    '03' => ['center-life-performance', 'Танцевальное выступление в центре'],
    '08' => ['center-life-interview', 'Интервью с юным танцором'],
    '11' => ['center-life-extra', 'Фрагменты зимней сессии'],
];
?>
<div class="photo-gallery" id="photo-gallery">
    <div id="gallery-strip" role="region" aria-label="Фото и видео из жизни центра">
        <?php foreach ($galleryPhotos as list($id, $description, $width, $height)): ?>
            <?php
            $baseUrl = '/images/photo-gallery/' . $id . '-';
            $ratio = $width / $height;
            $landscape = $width > $height;
            $previewHeights = array_unique(array_map(
                static function ($size) use ($height) {
                    return min($size, $height);
                },
                [276, 450, 552, 900, 1152]
            ));
            $srcset = [];
            foreach ($previewHeights as $previewHeight) {
                $previewWidth = (int) round($previewHeight * $ratio);
                $srcset[] = $baseUrl . $previewHeight . '.webp ' . $previewWidth . 'w';
            }
            ?>
            <a class="photo-gallery-photo<?= $landscape ? ' photo-gallery-landscape' : '' ?>"
               href="<?= $baseUrl ?>full.webp" data-fancybox="center-life-photos"
               aria-label="<?= htmlspecialchars($description) ?>" style="--gallery-item-ratio: <?= $width ?> / <?= $height ?>">
                <img src="<?= $baseUrl ?>450.webp" srcset="<?= implode(', ', $srcset) ?>"
                     sizes="<?= $landscape ? '' : 'auto, ' ?>(max-width: 998.98px) calc((clamp(276px, 33vw, 450px) + 100px) * <?= round($ratio, 6) ?>),
                            calc(clamp(276px, 33vw, max(450px, 15vw)) * <?= round($ratio, 6) ?>)"
                     alt="" width="<?= $width ?>" height="<?= $height ?>" loading="lazy" decoding="async">
            </a>
            <?php if (isset($galleryVideos[$id])): ?>
                <?php list($videoFile, $title) = $galleryVideos[$id]; ?>
                <a class="photo-gallery-photo photo-gallery-video photo-gallery-landscape video-preview"
                   href="/media/videos/<?= $videoFile ?>.mp4" data-local-video
                   data-fancybox="center-life-photos" aria-label="Смотреть видео: <?= htmlspecialchars($title) ?>">
                    <img src="/media/videos/<?= $videoFile ?>.webp" alt="" width="1620" height="862" loading="lazy" decoding="async">
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
