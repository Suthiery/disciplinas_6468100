let mix = require('laravel-mix');

mix.styles([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'resources/assets/css/app.css',
],'public/assets/app.css');   
mix.js([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.js',
        'resources/assets/js/app.js',
], 'public/assets/app.js');

