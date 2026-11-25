(() => {
    const picture = document.getElementById('slider-main');
    const artwork = document.querySelectorAll('.slider-text');
    const captions = document.querySelectorAll('.slide-caption');
    const stage = document.querySelector('.slider-stage');
    const controls = document.querySelectorAll('.arrow, .slide-to');
    const last = artwork.length - 1;
    let index = 0;

    function showSlide(next) {
        index = Math.max(0, Math.min(last, next));
        picture.style.setProperty('--slide-index', index);
        artwork.forEach((label, i) => {
            label.setAttribute('aria-hidden', String(i !== index));
            captions[i].classList.toggle('is-active', i === index);
        });
        controls.forEach(control => {
            if (control.hasAttribute('data-shift')) {
                const disabled = index + Number(control.dataset.shift) < 0 || index + Number(control.dataset.shift) > last;
                control.setAttribute('aria-disabled', String(disabled));
                control.style.display = disabled ? 'none' : '';
            } else {
                control.setAttribute('aria-current', String(Number(control.dataset.number) === index));
            }
        });
    }

    controls.forEach(control => {
        const activate = () => {
            if (control.getAttribute('aria-disabled') === 'true') return;
            showSlide(control.dataset.number ? Number(control.dataset.number) : index + Number(control.dataset.shift));
        };
        control.addEventListener('click', activate);
        control.addEventListener('keydown', event => {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                activate();
            }
        });
    });

    let start;
    stage.addEventListener('touchstart', event => {
        start = event.touches.length === 1 ? event.touches[0] : null;
    }, { passive: true });
    stage.addEventListener('touchend', event => {
        if (!start) return;
        const dx = event.changedTouches[0].clientX - start.clientX;
        const dy = event.changedTouches[0].clientY - start.clientY;
        if (Math.abs(dx) > 40 && Math.abs(dx) > Math.abs(dy)) showSlide(index + (dx < 0 ? 1 : -1));
        start = null;
    }, { passive: true });
})();
