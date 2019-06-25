"use strict";

const gulp = require("gulp");

//load plugins
const autoprefixer = require("gulp-autoprefixer");
const browsersync = require("browser-sync").create();
const eslint = require("gulp-eslint");
const notify = require('gulp-notify');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const sass = require("gulp-sass");

// BrowserSync
function browserSync(done) {
    browsersync.init({
        proxy: "localhost/sidecar" //url of site
    });
    done();
}

// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}

// CSS Task
function css() {
    return gulp
    .src("./scss/**/*.scss")
    .pipe(sass().on('error', function (err) {
        notify({
            title: 'CSS error'
        }).write(err.line + ' : ' + err.message);
        return this.emit('end');
    }))
    .pipe(autoprefixer({
        browsers: ["ie >= 9", "ie_mob >= 10", "ff >= 30", "chrome >= 34", "safari >= 7", "opera >= 23", "ios >= 7", "android >= 4.4", "bb >= 10"],
        cascade: false
    }))
    .pipe(gulp.dest("./"))
    .pipe(browsersync.stream());
}

// Lint scripts
function scriptsLint() {
return gulp
    .src(["./assets/js/**/*", "./gulpfile.js"])
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(eslint.failAfterError());
}

// Transpile, concatenate and minify scripts
function scripts() {
    return (
    gulp
        .src(['assets/js/library/*.js', 'assets/js/script/*.js'])
        .pipe(concat('main.js'))
        .pipe(uglify().on('error', function (err) {
            notify({
                title: 'Javascript error'
            }).write(err.line + ' : ' + err.message);
            return this.emit('end');
        }))
        .pipe(gulp.dest('./'))
        .pipe(browsersync.stream())
    );
}

// Watch files
function watchFiles() {
    gulp.watch("./scss/**/*", css);
    gulp.watch("./assets/js/**/*", scripts);
    gulp.watch(
        [
          "**/*.php",
          "./scss/**/*",
          "./assets/js",
          "./assets/images/**/*"
        ],browserSyncReload
    )
}

// define complex tasks
const js = gulp.series(scriptsLint, scripts);
const watch = gulp.parallel(watchFiles, browserSync);

// export tasks
exports.css = css;
exports.js = js;
exports.watch = watch;
exports.default = watch;