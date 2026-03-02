import './bootstrap';
import Alpine from 'alpinejs';

// Theme store for dark/light mode toggle
Alpine.store('theme', {
    dark: localStorage.getItem('theme') === 'dark' || 
          (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches),
    
    toggle() {
        this.dark = !this.dark;
        localStorage.setItem('theme', this.dark ? 'dark' : 'light');
        document.documentElement.classList.toggle('dark', this.dark);
    },

    init() {
        document.documentElement.classList.toggle('dark', this.dark);
    }
});

// Initialize Alpine.js
window.Alpine = Alpine;
Alpine.start();
