(() => {
    const $ = window.jQuery;
    if (!$?.fancybox) return;

    document.querySelectorAll('[data-fancybox][data-local-video]').forEach((link, index) => {
        const container = document.createElement('div');
        const video = document.createElement('video');
        container.id = 'local-video-player-' + index;
        container.className = 'local-video-player';
        video.controls = true;
        video.playsInline = true;
        video.preload = 'none';
        video.setAttribute('aria-label', link.getAttribute('aria-label') || link.textContent.trim());
        for (const event of ['touchstart', 'mousedown']) {
            video.addEventListener(event, interaction => interaction.stopPropagation());
        }
        container.append(video);
        document.body.append(container);
        link.dataset.src = '#' + container.id;
    });

    function playVideo(slide) {
        const link = slide.opts.$orig?.[0];
        const video = slide.$content?.find('video')[0];
        if (!link?.hasAttribute('data-local-video') || !video) return;

        if (!video.hasAttribute('src')) {
            const thumbnail = link.querySelector('img');
            video.poster = thumbnail.currentSrc || thumbnail.src;
            video.src = link.href;
        }
        video.play().catch(() => {});
    }

    function stopVideos(instance) {
        instance.$refs.container.find('.local-video-player video[src]').each(function () {
            this.pause();
            this.removeAttribute('src');
            this.load();
        });
    }

    $(document)
        .on('afterLoad.fb', (event, instance, slide) => {
            if (slide === instance.current) playVideo(slide);
        })
        .on('beforeMove.fb', (event, instance, slide) => {
            stopVideos(instance);
            playVideo(slide);
        })
        .on('beforeClose.fb', (event, instance) => stopVideos(instance));
})();
