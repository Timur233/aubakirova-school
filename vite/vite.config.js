import { defineConfig } from 'vite'
export default defineConfig({
  base: '',
  build: {
    rollupOptions: {
      input: {
        app: './src/main.ts',
      },
      output: {
        dir: '../assets/dist',
        chunkFileNames: 'js/[name].bandle.js',
        entryFileNames: 'js/[name].bandle.js',
        
        assetFileNames: ({name}) => {          
          if (/\.css$/.test(name ?? '')) {
              return '[name].bandle[extname]';   
          }
          
          return '[name]-[hash][extname]';
        }
      },
    },
    sourcemap: true,
  },
})