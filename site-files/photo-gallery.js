const photoStrip = document.getElementById('gallery-strip');
const galleryMotion = window.matchMedia('(prefers-reduced-motion: no-preference)');
const galleryHover = window.matchMedia('(hover: hover)');
const originals = Array.from(photoStrip.children);

for (const original of originals) {
    const copy = original.cloneNode(true);
    copy.removeAttribute('data-fancybox');
    copy.setAttribute('aria-hidden', 'true');
    copy.tabIndex = -1;
    copy.classList.add('photo-gallery-copy');
    copy.addEventListener('click', event => {
        event.preventDefault();
        original.click();
    });
    photoStrip.append(copy);
}

let galleryInView = false;
let lastFrame;
let remainder = 0;
let resumeAfter = 0;
let loopWidth = 0;
let mouseDrag;
let suppressDragClick = false;

function measureGallery() {
    const width = document.documentElement.clientWidth;
    photoStrip.style.setProperty('--gallery-viewport', width + 'px');
    loopWidth = photoStrip.children[originals.length].offsetLeft - originals[0].offsetLeft;
    if (galleryMotion.matches && loopWidth > 0 && photoStrip.scrollLeft >= loopWidth) {
        photoStrip.scrollLeft %= loopWidth;
    }
}

function advanceGallery(distance) {
    const position = photoStrip.scrollLeft + distance;
    if (galleryMotion.matches && loopWidth > 0) {
        photoStrip.scrollLeft = (position % loopWidth + loopWidth) % loopWidth;
    } else {
        photoStrip.scrollLeft = position;
    }
}

function pauseAfterTouch(event) {
    if (event.pointerType === 'touch') resumeAfter = performance.now() + 1800;
}

function startMouseDrag(event) {
    suppressDragClick = false;
    if (event.pointerType !== 'mouse' || event.button !== 0) return;
    mouseDrag = { id: event.pointerId, lastX: event.clientX, moved: false };
}

function moveMouseDrag(event) {
    if (mouseDrag?.id !== event.pointerId) return;
    const distance = mouseDrag.lastX - event.clientX;
    if (!mouseDrag.moved) {
        if (Math.abs(distance) < 6) return;
        mouseDrag.moved = true;
        photoStrip.setPointerCapture(event.pointerId);
        photoStrip.classList.add('is-dragging');
    }
    advanceGallery(distance);
    mouseDrag.lastX = event.clientX;
}

function endMouseDrag(event) {
    if (mouseDrag?.id !== event.pointerId) return;
    suppressDragClick = mouseDrag.moved;
    mouseDrag = undefined;
    photoStrip.classList.remove('is-dragging');
}

photoStrip.addEventListener('pointerdown', startMouseDrag);
photoStrip.addEventListener('pointermove', moveMouseDrag);
document.addEventListener('pointerup', endMouseDrag);
document.addEventListener('pointercancel', endMouseDrag);
photoStrip.addEventListener('lostpointercapture', endMouseDrag);
photoStrip.addEventListener('dragstart', event => event.preventDefault());
photoStrip.addEventListener('click', event => {
    if (!suppressDragClick || event.detail === 0) return;
    suppressDragClick = false;
    event.preventDefault();
    event.stopImmediatePropagation();
}, true);

function animateGallery(now) {
    const elapsed = Math.min(now - (lastFrame ?? now), 50);
    lastFrame = now;
    if (galleryInView && !mouseDrag && now >= resumeAfter
        && !(galleryHover.matches && photoStrip.matches(':hover'))
        && !photoStrip.querySelector(':focus-visible')
        && !document.querySelector('.fancybox-container')) {
        remainder += elapsed * .035;
        const pixels = Math.floor(remainder);
        if (pixels) {
            advanceGallery(pixels);
            remainder -= pixels;
        }
    }
    animationFrame = requestAnimationFrame(animateGallery);
}

let animationFrame;
function updateGalleryMotion() {
    cancelAnimationFrame(animationFrame);
    lastFrame = undefined;
    measureGallery();
    if (galleryMotion.matches) animationFrame = requestAnimationFrame(animateGallery);
}

const galleryObserver = new IntersectionObserver(([entry]) => {
    galleryInView = entry.isIntersecting;
});
galleryObserver.observe(photoStrip);
new ResizeObserver(measureGallery).observe(document.documentElement);
photoStrip.addEventListener('pointerup', pauseAfterTouch);
photoStrip.addEventListener('pointercancel', pauseAfterTouch);
galleryMotion.addEventListener('change', updateGalleryMotion);
updateGalleryMotion();
