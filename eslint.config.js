// @ts-check
import js from '@eslint/js';
import stylistic from '@stylistic/eslint-plugin';
import gitignore from 'eslint-config-flat-gitignore';
import astro from 'eslint-plugin-astro';
import tailwindcss from 'eslint-plugin-better-tailwindcss';
import perfectionist from 'eslint-plugin-perfectionist';
import unicorn from 'eslint-plugin-unicorn';
import { defineConfig, globalIgnores } from 'eslint/config';
import globals from 'globals';
import tseslint from 'typescript-eslint';

export default defineConfig(gitignore(), globalIgnores([
  '.yarn/**/*',
]), [
  {
    files: [
      '**/*.{js,mjs,cjs,jsx,astro}',
    ],
    extends: [
      js.configs.recommended,
      unicorn.configs.recommended,
      stylistic.configs['disable-legacy'],
      stylistic.configs.customize({
        quotes: 'single',
        semi: true,
        jsx: true,
        braceStyle: '1tbs',
        commaDangle: 'always-multiline',
      }),
    ],
    plugins: {
      perfectionist,
    },
    languageOptions: { globals: globals.browser },
    rules: {
      '@stylistic/indent': 'off',
      '@stylistic/indent-binary-ops': 'off',
      '@stylistic/jsx-indent-props': 'off',
      '@stylistic/jsx-one-expression-per-line': 'off',

      'unicorn/filename-case': 'off',
      'unicorn/prevent-abbreviations': 'off',

      'perfectionist/sort-imports': 'warn',
      'perfectionist/sort-named-imports': 'warn',
    },
  },
  {
    files: [
      '**/*.{js,mjs,cjs,jsx,ts,mts,cts,tsx,astro}',
    ],
    extends: [
      tseslint.configs.strictTypeChecked,
      tseslint.configs.stylisticTypeChecked,
    ],
    languageOptions: {
      parserOptions: {
        projectService: true,
        extraFileExtensions: ['.astro'],
      },
    },
  },
  astro.configs['flat/recommended'],
  {
    extends: [
      tailwindcss.configs.recommended,
    ],
    settings: {
      'better-tailwindcss': {
        entryPoint: 'src/styles/global.css',
      },
    },
    rules: {
      'better-tailwindcss/enforce-consistent-line-wrapping': 'off',
      'better-tailwindcss/no-unknown-classes': [
        'error',
        {
          ignore: ['h0'],
        },
      ],
    },
  },
]);
