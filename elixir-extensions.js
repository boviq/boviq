const gulp = require('gulp');
const htmlmin = require('gulp-htmlmin');
const riot = require('gulp-riot');
const concat = require('gulp-concat');
const Elixir = require('laravel-elixir');
const Task = Elixir.Task;

Elixir.extend('compressHtml', function(message) {
    new Task('compressHtml', function() {
        const opts = {
            collapseWhitespace:    true,
            removeAttributeQuotes: true,
            removeComments:        true,
            minifyJS:              true
        };

        return gulp.src('./storage/framework/views/*')
            .pipe(htmlmin(opts))
            .pipe(gulp.dest('./storage/framework/views/'))
    }).watch('./storage/framework/views/*')
});

Elixir.extend('riot', function(tags, output, dest) {
    new Task('riot', function() {
        return gulp.src(tags)
            .pipe(riot())
            .pipe(concat(output))
            .pipe(gulp.dest(dest));
    }).watch(tags);
});
