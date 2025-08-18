import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/scrollbar.css',
                'resources/css/code-theme.css',
                'resources/css/docs.css',
                'resources/js/app.js',
                'resources/js/docs.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
