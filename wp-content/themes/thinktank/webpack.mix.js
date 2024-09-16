const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const autoprefixer = require('autoprefixer');

mix.setPublicPath('dist');

mix.js('resources/assets/scripts/main.js', 'scripts');

mix.sass('resources/assets/styles/main.scss', 'styles')
  .options({
    postCss: [
      tailwindcss('./tailwind.config.js'),
      autoprefixer(),
    ],
  });

mix.options({
  processCssUrls: false,
});

mix.copyDirectory('resources/assets/images', 'dist/images')


mix.autoload({
  jquery: ['$', 'window.jQuery'],
});


mix.sourceMaps(false, 'source-map')
   .version();