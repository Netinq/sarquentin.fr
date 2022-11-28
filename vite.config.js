import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/home.css',
                'resources/css/home/clients.css',
                'resources/css/home/guideline.css',
                'resources/css/home/services.css',
                'resources/css/home/welcome.css',
                'resources/css/home/contact.css',
                'resources/css/home/feedback.css',
                'resources/css/layouts/footer.css',
                'resources/css/layouts/header.css',
                'resources/css/master.css',
                'resources/css/fonts.css',
                'resources/css/app.css',
                'resources/css/animations.css',
                'resources/js/app.js',
                'resources/js/sticky.js',
                'resources/js/header.js',
                'resources/js/scroller.js',
                'resources/js/feedback.js',
            ],
            refresh: true,
        }),
    ],
});
