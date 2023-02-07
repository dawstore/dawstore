import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            'css/style.default.css',
            'css/custom.css',
            'js/app.js',
            'vendor/choices.js/public/assets/styles/choices.min.css',
            'vendor/glightbox/css/glightbox.min.css',
            'vendor/nouislider/nouislider.min.css',
            'vendor/swiper/swiper-bundle.min.css',
            'vendor/bootstrap/js/bootstrap.bundle.min.js',
            'vendor/glightbox/js/glightbox.min.js',
            'vendor/nouislider/nouislider.min.js',
            'vendor/swiper/swiper-bundle.min.js',
            'vendor/choices.js/public/assets/scripts/choices.min.js',
            'js/front.js',
            'js/icon-svg.js' ,
            'js/app.js'],
            refresh: true,
        }),
    ],
});
