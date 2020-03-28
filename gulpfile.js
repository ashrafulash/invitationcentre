const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');
const uglifycss = require('gulp-uglifycss');
const browserSync = require('browser-sync').create();


function sass_cimpiler() {
  return src('asset/scss/*.scss')
    .pipe(sass())
    .pipe(uglifycss({
        "maxLineLen": 80,
        "uglyComments": true
    }))
    .pipe(dest('asset/src/min-css'))
    .pipe(browserSync.stream());
}

function script(){
    return src('asset/js/*.js')
    .pipe(uglify())
    .pipe(dest('asset/src/min-js'));
}

exports.watch = function() {

watch('asset/scss/*.scss', sass_cimpiler );
watch('asset/js/*.js', script );
watch('asset/scss/**/_*.scss', sass_cimpiler);

};
