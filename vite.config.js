import { defineConfig } from 'vite';
import { resolve } from 'path';

const themeDir = 'wp-content/themes/noirforge';

export default defineConfig({
  root: resolve(__dirname, themeDir, 'assets/src'),
  base: './',
  build: {
    outDir: resolve(__dirname, themeDir, 'assets/dist'),
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        main: resolve(__dirname, themeDir, 'assets/src/js/main.js'),
      },
      output: {
        entryFileNames: 'js/[name].js',
        chunkFileNames: 'js/[name].js',
        assetFileNames: (assetInfo) => {
          if (assetInfo.name && assetInfo.name.endsWith('.css')) {
            return 'css/[name][extname]';
          }

          return 'assets/[name][extname]';
        },
      },
    },
  },
});
