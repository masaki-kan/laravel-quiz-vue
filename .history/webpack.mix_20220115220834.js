let mix = require('laravel-mix');

mix.js('resources/js/home.js', 'public/js')
  .js('resources/js/quiz.js', 'public/js')
  .js('resources/js/chart.js', 'public/js')
  .js('resources/js/app.js', 'public/js') // 追加
    .sass('resources/sass/app.scss', 'public/css', {
      implementation: require('dart-sass')
    });

mix.browserSync({
  files: [
    "public/**/*.*"
  ],
  proxy: "http://localhost:8000"
});
