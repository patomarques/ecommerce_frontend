var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');

//task default gulp
gulp.task('default', ['sass', 'watch']);

gulp.task('sass', function(){
    return gulp.src('sass/commerce10.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('css'));
});

gulp.task('watch', function(){
    gulp.watch('sass/*.scss', ['sass']);
});