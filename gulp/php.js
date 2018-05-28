const paths     = require("./_config").paths;

const gulp      = require('gulp');
const copy      = require('gulp-copy');

function buildPhp() {
    return gulp.src(paths.src.php + "*/*.php")
        .pipe(gulp.dest(paths.target.dist.dist));
}

function buildPhpconfig() {
    return gulp.src(paths.src.php + "/config/*.php") // fucking aids does not work
        .pipe(gulp.dest(paths.target.dist.php));
}

function buildPhpFromPages() {
    return gulp.src(paths.src.twig + "pages/*.php")
        .pipe(gulp.dest(paths.target.dist.dist));
}


exports.buildPhp = buildPhp;
exports.buildPhpconfig = buildPhpconfig;
exports.buildPhpFromPages = buildPhpFromPages;
