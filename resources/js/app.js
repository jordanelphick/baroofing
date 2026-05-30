document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const menuClose = document.getElementById('menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const siteHeader = document.getElementById('site-header');
    const previewChromeTop = document.getElementById('preview-chrome-top');
    const previewModal = document.getElementById('preview-modal');
    const previewModalClose = document.getElementById('preview-modal-close');
    const previewModalDismiss = document.getElementById('preview-modal-dismiss');
    const previewModalBackdrop = document.getElementById('preview-modal-backdrop');

    const openMenu = () => {
        mobileMenu?.classList.remove('pointer-events-none', 'opacity-0', 'invisible');
        mobileMenu?.classList.add('pointer-events-auto', 'opacity-100', 'visible');
        document.body.classList.add('overflow-hidden');
        menuToggle?.setAttribute('aria-expanded', 'true');
    };

    const closeMenu = () => {
        mobileMenu?.classList.add('pointer-events-none', 'opacity-0', 'invisible');
        mobileMenu?.classList.remove('pointer-events-auto', 'opacity-100', 'visible');
        if (!isPreviewModalOpen()) {
            document.body.classList.remove('overflow-hidden');
        }
        menuToggle?.setAttribute('aria-expanded', 'false');
    };

    const isPreviewModalOpen = () => previewModal?.classList.contains('opacity-100');

    const openPreviewModal = () => {
        closeMenu();
        previewModal?.classList.remove('pointer-events-none', 'invisible', 'opacity-0');
        previewModal?.classList.add('pointer-events-auto', 'opacity-100', 'visible');
        previewModal?.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');
    };

    const closePreviewModal = () => {
        previewModal?.classList.add('pointer-events-none', 'invisible', 'opacity-0');
        previewModal?.classList.remove('pointer-events-auto', 'opacity-100', 'visible');
        previewModal?.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');
    };

    menuToggle?.addEventListener('click', openMenu);
    menuClose?.addEventListener('click', closeMenu);

    mobileMenu?.querySelectorAll('[data-menu-link]').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    document.querySelectorAll('[data-preview-link]').forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            openPreviewModal();
        });
    });

    previewModalClose?.addEventListener('click', closePreviewModal);
    previewModalDismiss?.addEventListener('click', closePreviewModal);
    previewModalBackdrop?.addEventListener('click', closePreviewModal);

    document.addEventListener('keydown', (event) => {
        if (event.key !== 'Escape') {
            return;
        }

        if (isPreviewModalOpen()) {
            closePreviewModal();
            return;
        }

        closeMenu();
    });

    const updateLayoutOffsets = () => {
        if (previewChromeTop) {
            document.documentElement.style.setProperty(
                '--preview-chrome-height',
                `${previewChromeTop.offsetHeight}px`,
            );
        }

        if (siteHeader) {
            document.documentElement.style.setProperty(
                '--site-header-height',
                `${siteHeader.offsetHeight}px`,
            );
        }
    };

    updateLayoutOffsets();
    window.addEventListener('resize', updateLayoutOffsets, { passive: true });

    if (previewChromeTop && typeof ResizeObserver !== 'undefined') {
        const chromeObserver = new ResizeObserver(updateLayoutOffsets);
        chromeObserver.observe(previewChromeTop);
    }

    if (document.fonts?.ready) {
        document.fonts.ready.then(updateLayoutOffsets);
    }
});
