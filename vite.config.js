import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    react(), // 🔄 Plugin de React (¡esto permite el @react-refresh!)
    laravel({
      input: [
        'resources/sass/app.scss',
        'resources/js/app.js',
      ],
      refresh: true,
    }),
  ],
  server: {
    host: 'localhost', // 👈 Opcional: evita usar [::1] y fuerza IPv4
    port: 5173,         // 👈 Asegura el mismo puerto que usa tu app
  },
});
