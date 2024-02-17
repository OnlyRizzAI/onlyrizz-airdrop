import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    // https://github.com/laravel/vite-plugin/pull/42
    server: {
        hmr: {
            host: 'localhost',
        }
    }
});
