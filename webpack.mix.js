const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .js('resources/js/index.js', 'public/js')
    .js('resources/js/slider.js', 'public/js')
    .js('resources/js/quiz_sentence/questions.js', 'public/js/quiz_sentence')
    .js('resources/js/quiz_sentence/script.js', 'public/js/quiz_sentence')
    .js('resources/js/quiz_listening/questions.js', 'public/js/quiz_listening')
    .js('resources/js/quiz_listening/script.js', 'public/js/quiz_listening');