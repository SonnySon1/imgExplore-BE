const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .js('node_modules/moment/min/moment.min.js', 'public/js');
