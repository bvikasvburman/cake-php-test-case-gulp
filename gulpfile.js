var gulp = require('gulp') ;
var shell = require('gulp-shell');
var notify = require('gulp-notify');


gulp.task("testing", function(){

    return gulp.src('')

        .pipe(shell([
            'phpunit',
        ]))
    
        .on('error', notify.onError({
            title: "Alarm Alarm! Tests failing",
            message: "<%= error.message %>"
        }))
    
        .pipe(notify({
            title: "Go go go!",
            message: 'Everything is alright, go forward bastard!'
        })
    );
});


gulp.task("watch", function(){
	gulp.watch(['tests/TestCase/**/*.php', 'App/Model/**/*.php'], ['testing']);
});

gulp.task('default', ['testing', 'watch']);

