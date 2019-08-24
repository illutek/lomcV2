/**
 * Created by stefan on 05.01.2019.
 *
 *
 */

/* jshint node: true */
"use strict";

const gulp = require("gulp"),
  prettyError = require("gulp-prettyerror"),
  watch = require("gulp-watch"),
  prefixer = require("gulp-autoprefixer"),
  uglify = require("gulp-uglify"),
  del = require("del"),
  sass = require("gulp-sass"),
  sourcemaps = require("gulp-sourcemaps"),
  cleancss = require("gulp-clean-css"),
  imagemin = require("gulp-imagemin"),
  runSequence = require('run-sequence'),
  babel = require("gulp-babel");

/**
 * Variables
 *
 */
const path = {
  dist: {
    twig: "dist/templates/",
    php: "dist/templates/",
    yml: "dist/",
    theme: "dist",
    js: "dist/js/",
    css: "dist/css/",
    img: "dist/images/",
    fonts: "dist/fonts/",
    png: "dist"
  },
  src: {
    twig: "templates/**/*.twig",
    php: "templates/**/*.php",
    yml: "*.yml",
    theme: "*.theme",
    js: "js/**/*.js",
    style: "sass/styles.scss",
    img: "images/**/*.*",
    fonts: "fonts/**/*.*",
    png: "*.png"
  },
  watch: {
    twig: "templates/**/*.twig",
    php: "templates/**/*.php",
    yml: "*.yml",
    theme: "*.theme",
    js: "js/**/*.js",
    style: "sass/**/*.scss",
    img: "images/**/*.*",
    fonts: "fonts/**/*.*"
  },
  clean: "./dist"
};

/**
 * clean task
 *
 */
gulp.task("clean", function() {
  return del(['dist']);
});

/**
 * task
 *
 */

gulp.task("twig:dist", function() {
  gulp.src(path.src.twig).pipe(gulp.dest(path.dist.twig));
});

gulp.task("php:dist", function() {
  gulp.src(path.src.php).pipe(gulp.dest(path.dist.php));
});

gulp.task("yml:dist", function() {
  gulp.src(path.src.yml).pipe(gulp.dest(path.dist.yml));
});

gulp.task("theme:dist", function() {
  gulp.src(path.src.theme).pipe(gulp.dest(path.dist.theme));
});

gulp.task("js:dist", function() {
  gulp
    .src(path.src.js)
    .pipe(prettyError())
    .pipe(sourcemaps.init())
    .pipe(
      babel({
        presets: ["es2015"]
      })
    )
    .pipe(uglify())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(path.dist.js));
});

gulp.task("style:dist", function() {
  gulp
    .src(path.src.style)
    .pipe(sass())
    .pipe(
      prefixer({
        browsers: ["last 2 versions"],
        cascade: false
      })
    )
    .pipe(cleancss({ compatibility: "ie9" }))
    .pipe(gulp.dest(path.dist.css));
});

gulp.task("img:dist", function() {
  gulp
    .src(path.src.img)
    .pipe(imagemin([
      imagemin.optipng({optimizationLevel: 5})
    ]))
    .pipe(gulp.dest(path.dist.img));
});

gulp.task("fonts:dist", function() {
  gulp.src(path.src.fonts).pipe(gulp.dest(path.dist.fonts));
});

gulp.task("png:dist", function() {
  gulp.src(path.src.png).pipe(gulp.dest(path.dist.png));
});

gulp.task("dist", [
  "twig:dist",
  "php:dist",
  "yml:dist",
  "theme:dist",
  "js:dist",
  "style:dist",
  "fonts:dist",
  "img:dist",
  "png:dist"
]);

/**
 * deploy
 * 
 * Gulp 4
 * gulp.task('deploy', gulp.series('clean', 'dist'));
 * 
 * For now with gulp 3 used run-sequence
 */
// 

gulp.task('deploy', function(done) {
  runSequence('clean', 'dist', function() {
    done();
  });
});

/**
 * sass task
 *
 */

gulp.task("style:sass", function() {
  gulp
    .src(path.src.style)
    .pipe(prettyError())
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        sourceMap: true,
        errLogToConsole: true
      })
    )
    .pipe(
      prefixer({
        browsers: ["last 2 versions"],
        cascade: false
      })
    )
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest("css"));
});

gulp.task("watch", function() {
    watch([path.watch.style], function(event, cb) {
      gulp.start("style:sass");
    });
  });
  
  gulp.task("default", ["style:sass", "watch"]);
