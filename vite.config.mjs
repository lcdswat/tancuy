import { defineConfig } from 'vite'

export default defineConfig({
  appType: 'custom',
  server: {
    host: '0.0.0.0',
    port: 5173,
    strictPort: true,
    allowedHosts: ['nas.local', 'dxp2800'],
    proxy: {
      // PHP pages use both directory indexes and extensionless URLs.
      '^/(?:[a-zA-Z0-9_-]+/)*(?:[a-zA-Z0-9_-]+(?:\\.php)?)?(?:\\?.*)?$': 'http://127.0.0.1:8517',
    },
  },
  plugins: [{
    name: 'reload-php-pages',
    handleHotUpdate({ file, server }) {
      if (file.endsWith('.php') || file.includes('/includes/')) {
        server.ws.send({ type: 'full-reload' })
        return []
      }
    },
  }],
})
