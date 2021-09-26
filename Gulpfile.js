var gulp = require('gulp'), // Gulp JS
    cleanCSS = require('gulp-clean-css'), // Склейка файлов
    sass = require('gulp-sass')(require('sass')),
    watch = require('gulp-watch');

const paths = {
    styles: './assets/css'
};

//css tasks
gulp.task('styles', function (done) {
    gulp.src(paths.styles + '/main.scss')
        .pipe(sass())
		.pipe(cleanCSS())
        .pipe(gulp.dest(paths.styles+'/min'));

    done();
});

gulp.task('watch', function() {
    gulp.watch(paths.styles + '/*.scss', gulp.series('styles'));
});
