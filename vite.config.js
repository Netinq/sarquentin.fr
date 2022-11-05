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
                'resources/css/master.css',
                'resources/css/fonts.css',
                'resources/css/app.css',
                'resources/css/animations.css',
                'resources/js/app.js',
                'resources/js/sticky.js',
                'resources/js/scroller.js',
            ],
            refresh: true,
        }),
    ],
});
