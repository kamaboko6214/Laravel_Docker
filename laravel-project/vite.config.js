import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/scss/layout.scss',
                'resources/js/app.js',
                'resources/js/index.js',
            ],
            refresh: true,
        }),
    ],
});
