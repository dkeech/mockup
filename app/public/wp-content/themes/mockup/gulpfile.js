const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const cleanCSS = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");
const sourcemaps = require("gulp-sourcemaps");
const browserSync = require("browser-sync").create();

// Compile SCSS to CSS, minify CSS, and write sourcemaps
function styles() {
  return gulp
    .src("./scss/**/*.scss") // Update with the path to your SCSS files
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: ".min" }))
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest("./css")) // Update with the path to your CSS output directory
    .pipe(browserSync.stream());
}
exports.styles = styles;
// Minify JavaScript and write sourcemaps
function scripts() {
  return gulp
    .src(["./js/src/*.js", "!./js/**/*.min.js"])
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(rename({ suffix: ".min" }))
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest("./js/minified")) // Update with the path to your minified JS output directory
    .pipe(browserSync.stream());
}

// Watch files
function watch() {
  browserSync.init({
    proxy: "mockup.local", // Update with your local development URL
  });
  gulp.watch("./scss/**/*.scss", styles); // Update paths as needed
  gulp.watch("./js/**/*.js", scripts); // Update paths as needed
  gulp.watch("**/*.php").on("change", browserSync.reload); // Watching PHP files for changes
}

// Default Gulp task
exports.default = gulp.series(styles, scripts, watch);
