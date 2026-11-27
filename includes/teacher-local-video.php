<?php $videoPath = '/media/videos/' . $teacherVideoFile; ?>
<div class="teacher-video" id="<?= htmlspecialchars($teacherVideoId) ?>">
    <strong><?= htmlspecialchars($teacherVideoTitle) ?></strong>
    <a class="video-preview" href="<?= htmlspecialchars($videoPath) ?>.mp4" data-fancybox data-local-video
       aria-label="<?= htmlspecialchars($teacherVideoTitle) ?>">
        <img src="<?= htmlspecialchars($videoPath) ?>.webp" width="768" height="432" alt="">
    </a>
</div>
<?php if (empty($teacherVideoScriptIncluded)): ?>
    <script defer src="/site-files/local-video.js"></script>
    <?php $teacherVideoScriptIncluded = true; ?>
<?php endif; ?>
