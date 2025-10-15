import {defineConfig} from 'vite'
import vue from '@vitejs/plugin-vue'
/*
Simple Vite config with code in app/client/src
*/

// https://vitejs.dev/config/
export default defineConfig(({command}) => {
	return {
		server: {
			host: '0.0.0.0',
			port: 3000,
			cors:true
		},
		alias: {
			alias: [{find: '@', replacement: './app/client/src'}],
		},
		base: './',
		build: {
			outDir: './app/client/dist',
			emptyOutDir:true,
			manifest: true,
			sourcemap: true,
			rollupOptions: {
				input: {
					'app.js': './app/client/src/js/app.js',
					'app.scss': './app/client/src/scss/app.scss',
					'editor.scss': './app/client/src/scss/editor.scss',
				}
			},
		},
		publicDir:false,
		plugins: [
			vue()
		],
		resolve: {
			alias: {
				vue: 'vue/dist/vue.esm-bundler.js',
			}
		},
	}
})
