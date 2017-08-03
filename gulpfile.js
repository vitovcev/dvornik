var gulp = require('gulp'),
    sass = require('gulp-sass');

gulp.task('sass', function(){
    return gulp.src('resources/assets/sass/style.sass')
        .pipe(sass())
        .pipe(gulp.dest('public/css'));
});