import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const domain = "davidtorralbo.dev.test";
const homedir = require("os").homedir();

export default defineConfig({
    server: {
        https: {
            key: homedir + "/.config/valet/Certificates/" + domain + ".key",
            cert: homedir + "/.config/valet/Certificates/" + domain + ".crt",
        },
        host: domain,
        hmr: {
            host: domain,
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});