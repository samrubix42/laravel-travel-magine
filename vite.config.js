import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

// Type system: Cormorant Garamond for story-led headings, Anton for section
// display, Inter for navigation and utility text.
// Each one is exposed as a CSS variable, e.g. --font-anton.
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                bunny('Anton', { alias: 'anton', weights: [400], fallbacks: ['Arial Narrow', 'sans-serif'] }),
                bunny('Cormorant Garamond', {
                    alias: 'cormorant',
                    weights: [500, 600],
                    preload: [{ weight: 500 }],
                    fallbacks: ['Georgia', 'serif'],
                }),
                bunny('Inter', {
                    alias: 'inter',
                    weights: [400, 500, 600],
                    preload: [{ weight: 400 }],
                    fallbacks: ['system-ui', 'sans-serif'],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
