var gulp = require('gulp');
var scssToCss = require('gulp-sass');
var notify = require('gulp-notify');
var cssAutoprefixer = require('gulp-autoprefixer');

var notifyError = function(error) {
    console.log(error.message);
    notify({
        title : error.plugin + ' failed.',
        message : error.message
    }).write(error);

    this.emit('end');
};

gulp.task('build', function(){
    return gulp.src('css/new_beta.scss')
        .pipe(scssToCss().on('error', notifyError))
        .pipe(cssAutoprefixer())
        .pipe(gulp.dest('css/'));
});

gulp.task('watch', function(){
    gulp.watch('css/new_beta.scss', ['build']);
});

gulp.task('default', ['build', 'watch']);
