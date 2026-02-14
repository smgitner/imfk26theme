/**
 * Mobile navigation toggle.
 *
 * @package imfktheme
 */
(function () {
    'use strict';

    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('mobile-menu-overlay');

    if (!toggle || !menu) {
        return;
    }

    function openMenu() {
        menu.classList.add('is-open');
        if (overlay) overlay.classList.add('is-visible');
        toggle.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        menu.classList.remove('is-open');
        if (overlay) overlay.classList.remove('is-visible');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    toggle.addEventListener('click', function () {
        const isOpen = menu.classList.contains('is-open');
        isOpen ? closeMenu() : openMenu();
    });

    if (overlay) {
        overlay.addEventListener('click', closeMenu);
    }

    // Close on Escape key.
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && menu.classList.contains('is-open')) {
            closeMenu();
            toggle.focus();
        }
    });

    // Mobile sub-menu accordion toggles.
    const subToggles = menu.querySelectorAll('.mobile-nav__toggle');
    subToggles.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const submenu = btn.nextElementSibling;
            const isOpen = submenu.classList.contains('is-open');

            // Close all others first.
            subToggles.forEach(function (otherBtn) {
                const otherSub = otherBtn.nextElementSibling;
                if (otherSub && otherSub !== submenu) {
                    otherSub.classList.remove('is-open');
                    otherBtn.setAttribute('aria-expanded', 'false');
                }
            });

            submenu.classList.toggle('is-open', !isOpen);
            btn.setAttribute('aria-expanded', String(!isOpen));
        });
    });

    // ---------------------------------------------------------------
    // Search field toggle
    // ---------------------------------------------------------------
    const searchToggle = document.getElementById('search-toggle');
    const mobileSearchToggle = document.getElementById('mobile-search-toggle');
    const searchField = document.getElementById('search-field');
    const searchClose = document.getElementById('search-close');
    const searchInput = searchField ? searchField.querySelector('.search-field__input') : null;

    function openSearch() {
        if (searchField) {
            searchField.classList.add('is-open');
            if (searchToggle) searchToggle.setAttribute('aria-expanded', 'true');
            if (searchInput) {
                setTimeout(() => searchInput.focus(), 100);
            }
        }
        // Close mobile menu if open
        if (menu && menu.classList.contains('is-open')) {
            closeMenu();
        }
    }

    function closeSearch() {
        if (searchField) {
            searchField.classList.remove('is-open');
            if (searchToggle) searchToggle.setAttribute('aria-expanded', 'false');
        }
    }

    if (searchToggle) {
        searchToggle.addEventListener('click', function () {
            const isOpen = searchField && searchField.classList.contains('is-open');
            isOpen ? closeSearch() : openSearch();
        });
    }

    if (mobileSearchToggle) {
        mobileSearchToggle.addEventListener('click', function () {
            openSearch();
        });
    }

    if (searchClose) {
        searchClose.addEventListener('click', closeSearch);
    }

    // Close search on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && searchField && searchField.classList.contains('is-open')) {
            closeSearch();
            if (searchToggle) searchToggle.focus();
        }
    });
})();
