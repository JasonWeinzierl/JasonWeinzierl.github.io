// @ts-check
import { defineConfig } from 'astro/config';

export default defineConfig({
  site: 'https://jasonweinzierl.com',
  compressHTML: false,
  trailingSlash: 'always',
  build: {
    format: 'directory',
  },
});
