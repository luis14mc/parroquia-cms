import './bootstrap';

// Theme toggle (dark mode)
document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuToggle = document.getElementById('menu-toggle');

    const initTheme = () => {
        const stored = localStorage.getItem('theme');
        const prefers = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const isDark = stored === 'dark' || (!stored && prefers);
        document.documentElement.classList.toggle('dark', isDark);
        if (themeIcon) themeIcon.textContent = isDark ? '☀️' : '🌙';
    };

    initTheme();

    themeToggle?.addEventListener('click', () => {
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        if (themeIcon) themeIcon.textContent = isDark ? '☀️' : '🌙';
    });

    menuToggle?.addEventListener('click', () => {
        mobileMenu?.classList.toggle('hidden');
        menuToggle.textContent = mobileMenu?.classList.contains('hidden') ? '☰' : '✕';
    });

    // Close mobile menu when clicking a link
    mobileMenu?.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            if (menuToggle) menuToggle.textContent = '☰';
        });
    });
});
