// @ts-check
import sitemap from '@astrojs/sitemap';
import tailwindcss from '@tailwindcss/vite';
import { defineConfig } from 'astro/config';

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
  integrations: [
    sitemap(),
  ],
});
