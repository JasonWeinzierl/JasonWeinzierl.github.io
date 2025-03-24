// @ts-check
import { defineConfig } from 'astro/config';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  site: 'https://jasonweinzierl.com',
  compressHTML: false,
  trailingSlash: 'always',
  build: {
    format: 'directory',
  },
  vite: {
    plugins: [
      tailwindcss(),
    ],
    build: {
      minify: false,
    },
  },
});
