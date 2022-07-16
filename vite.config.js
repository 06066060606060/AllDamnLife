import laravel from 'laravel-vite-plugin'
import {defineConfig} from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        {
            name: 'vue',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.vue')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                } else if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
});