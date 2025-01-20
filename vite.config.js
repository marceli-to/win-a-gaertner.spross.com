import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';
export default defineConfig({
  resolve: {
    alias: {
      img: resolve('resources/media'),
      fonts: resolve('resources/fonts')
    }
  },
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/dashboard.css'],
      refresh: true,
    }),
  ],
});
