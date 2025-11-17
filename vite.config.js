import {defineConfig} from 'vite'
import vue from '@vitejs/plugin-vue'
import path from 'path';
/*
Simple Vite config with code in app/client/src
*/

// https://vitejs.dev/config/
export default defineConfig(({command}) => {
	return {
		server: {
			host: '0.0.0.0',
			port: 3000,
			cors:true,
			proxy: {
				'/fonts': {
					target:'http://domain.loc',
					changeOrigin:true,
				},
				'/images': {
					target:'http://domain.loc',
					changeOrigin:true,
				}
			}
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
				},
				external: [
					/^\/fonts\//,
					/^\/images\//
				]
			},
		},
		publicDir:false,
		plugins: [
			vue(),
			{
				name: 'reload-ss',
				handleHotUpdate({ file, server }) {
					if (file.endsWith('.ss')) {
						server.ws.send({
							type: 'full-reload',
							path: '*',
						});
					}
				},
			},
		],
		resolve: {
			alias: {
				vue: 'vue/dist/vue.esm-bundler.js',
				'@composables': path.resolve(__dirname, './app/client/src/js/Vue/Composables'),
				'@components': path.resolve(__dirname, './app/client/src/js/Vue/Composables')
			}
		},
	}
})
