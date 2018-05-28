const paths     = require("./_config").paths;

const gulp      = require('gulp');
const copy      = require('gulp-copy');

function buildPHP() {
    return gulp
        .src('src/php/**/*.{php}')
        .pipe(gulp.dest('dist'));
}

exports.buildPHP = buildPHP;
