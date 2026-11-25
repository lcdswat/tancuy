const menuButton = document.querySelector('.menu-toggle');
const navigation = document.getElementById('main-menu');
const mobileLayout = window.matchMedia('(max-width: 998.98px)');

function setMenu(open) {
    menuButton.setAttribute('aria-expanded', String(open));
    navigation.hidden = mobileLayout.matches && !open;
}

function updateMenuLayout() {
    menuButton.hidden = !mobileLayout.matches;
    setMenu(false);
}

menuButton.addEventListener('click', () => setMenu(navigation.hidden));
document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && menuButton.getAttribute('aria-expanded') === 'true') {
        setMenu(false);
        menuButton.focus();
    }
});
mobileLayout.addEventListener('change', updateMenuLayout);
updateMenuLayout();

const headerVideo = document.querySelector('.header-video');
const headerMotion = window.matchMedia('(prefers-reduced-motion: no-preference)');

function updateHeaderVideo() {
    if (!headerMotion.matches) {
        headerVideo.pause();
        headerVideo.classList.remove('is-playing');
        return;
    }

    if (!headerVideo.hasAttribute('src')) {
        const useMobileVideo = mobileLayout.matches && headerVideo.canPlayType('video/mp4; codecs="avc1.64001f"');
        headerVideo.src = useMobileVideo ? headerVideo.dataset.mobileSrc : headerVideo.dataset.src;
    }
    headerVideo.play().catch(() => headerVideo.classList.remove('is-playing'));
}

headerVideo.addEventListener('playing', () => {
    if (headerMotion.matches) headerVideo.classList.add('is-playing');
});
headerVideo.addEventListener('error', () => headerVideo.classList.remove('is-playing'));
headerMotion.addEventListener('change', updateHeaderVideo);
updateHeaderVideo();
