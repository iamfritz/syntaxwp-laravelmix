const mix = require('laravel-mix');
const local = require('./local');
require('laravel-mix-versionhash');

mix.setPublicPath('./assets');

mix.webpackConfig({
    externals: {
        "jquery": "jQuery",
    }
});

if (local.proxy) {
    mix.browserSync({
        proxy: local.proxy,
        injectChanges: true,
        open: false,
        files: [
            'assets/**/*.{css,js}'
        ]
    });
}

mix.js('src/js/app.js', 'js');
mix.sass('src/scss/app.scss', 'css');

if (mix.inProduction()) {
    mix.versionHash();
    mix.sourceMaps();
}
