var gulp = require('gulp'),
    sass = require('gulp-sass');

gulp.task('sass', function(){
    return gulp.src('resources/assets/sass/*.sass')
        .pipe(sass())
        .pipe(gulp.dest('public/css'))
});

gulp.task('watch', ['browser-sync', 'sass'], function() {
    gulp.watch('resources/assets/sass/*.sass', ['sass']); // Наблюдение за sass файлами
    // Наблюдение за другими типами файлов
});
