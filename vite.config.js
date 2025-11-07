import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias:{
            '@': '/resources/js',
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap/dist'),
            '~select2': path.resolve(__dirname, 'node_modules/select2/dist'),
            '~select2-bootstrap': path.resolve(__dirname, 'node_modules/select2-bootstrap-5-theme/dist'),
            '~bootstrap-icons': path.resolve(__dirname, 'node_modules/bootstrap-icons/font'),
            '~flatpickr': path.resolve(__dirname, 'node_modules/flatpickr/dist'),
        }
    }
});
