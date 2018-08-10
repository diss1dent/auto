var gulp =              require('gulp');
var less =              require('gulp-less');
var sass =              require('gulp-sass');
var browserSync =       require('browser-sync').create();
var header =            require('gulp-header');
var cleanCSS =          require('gulp-clean-css');
var rename =            require("gulp-rename");
var uglify =            require('gulp-uglify');
var autoprefixer =      require('gulp-autoprefixer');
var nunjucksRender =    require('gulp-nunjucks-render');
var concat =            require('gulp-concat');
var merge =             require('merge-stream');
var runSequence =       require('run-sequence');
var sourcemaps =        require('gulp-sourcemaps');
var gulpif =            require('gulp-if');

var pkg = require('./package.json');

// Set the banner content
var banner = ['/*!\n',
    ' * Start Bootstrap - <%= pkg.title %> v<%= pkg.version %> (<%= pkg.homepage %>)\n',
    ' * Copyright 2013-' + (new Date()).getFullYear(), ' <%= pkg.author %>\n',
    ' * Licensed under <%= pkg.license.type %> (<%= pkg.license.url %>)\n',
    ' */\n',
    ''
].join('');

gulp.task('html', function () {
    return gulp.src([
        'app/template/**/*'
    ])
        /*  .pipe(nunjucksRender({
            path: ['app/template/'] // String or Array
        }))*/
        .pipe(gulp.dest('www'))
        .pipe(browserSync.stream());
});

gulp.task('php', function () {
    return gulp.src([
        'app/modules/*.php',
        'app/modules/**/*'
    ])
        .pipe(gulp.dest('www/modules/'))
        .pipe(browserSync.stream());
});

gulp.task('sass', function() {
    return gulp.src('app/scss/main.scss')
        .pipe(sass())
        .pipe(header(banner, { pkg: pkg }))
        .pipe(autoprefixer({
            browsers: ['last 10 versions'],
            cascade: false
        }))
        .pipe(concat('main.min.css'))
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(gulp.dest('www/css'))
        .pipe(browserSync.stream());
});

gulp.task('css', ['sass'], function() {
    return gulp.src(['www/css/main.css'])
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('www/css'))
        .pipe(browserSync.stream());
});

gulp.task('js-libs', function() {
    return gulp.src(['app/js/vendor/**/*'])
        .pipe(concat('libs.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('www/js'))
});

gulp.task('js', function() {
    //var main = gulp.src([
    return gulp.src([
        'app/js/main.js',
        'app/js/contact_me.js'
        ])
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(header(banner, { pkg: pkg }))
        //.pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('www/js'))
        .pipe(browserSync.stream());
/*    var vendor = gulp.src('app/js/vendor/!**!/!*')
        //.pipe(concat('libs.min.js'))
        //.pipe(uglify())
        .pipe(gulp.dest('www/js'));
    return merge(main, vendor);*/
});

gulp.task('images', function() {
    return gulp.src('app/img/**/*')
        .pipe(gulp.dest('www/img'))
});

// Copy vendor libraries from /node_modules into /vendor
gulp.task('copy', function() {
    gulp.src(['node_modules/bootstrap/dist/**/*', '!**/npm.js', '!**/bootstrap-theme.*', '!**/*.map'])
        .pipe(gulp.dest('www/lib/bootstrap'))

    gulp.src(['node_modules/jquery/dist/jquery.js', 'node_modules/jquery/dist/jquery.min.js'])
        .pipe(gulp.dest('www/lib/jquery'))

    gulp.src(['node_modules/tether/dist/js/*.js'])
        .pipe(gulp.dest('www/lib/tether'))

    gulp.src([
            'node_modules/font-awesome/**',
            '!node_modules/font-awesome/**/*.map',
            '!node_modules/font-awesome/.npmignore',
            '!node_modules/font-awesome/*.txt',
            '!node_modules/font-awesome/*.md',
            '!node_modules/font-awesome/*.json'
        ])
        .pipe(gulp.dest('www/lib/font-awesome'))
})

gulp.task('browserSync', function() {
    browserSync.init({
/*        server: {
            baseDir: 'www'
        },*/
        proxy: {
            target: "http://oceanauto.loc"
        }
    })
})

gulp.task('default', ['html', 'php', 'sass', 'css', 'js', 'js-libs', 'copy', 'images']);

gulp.task('dev', ['browserSync', 'php', 'html', 'sass', 'css', 'js', 'js-libs'], function() {
    gulp.watch('app/scss/*.scss', ['sass']);
    gulp.watch('app/css/*.css', ['css']);
    gulp.watch('app/js/*.js', ['js']);
    gulp.watch('app/template/**/*', ['html']);
    gulp.watch('app/modules/**/*.php', ['php']);
});

