const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const browserSync = require("browser-sync").create();

// Compile SASS files into CSS
gulp.task("sass", function () {
  return gulp
    .src(["scss/*.scss"])
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("css"))
    .pipe(browserSync.stream());
});

// Watch & Serve
gulp.task(
  "serve",
  gulp.series("sass", function () {
    browserSync.init({
      proxy: "mockup.local", // Update this with your local development URL
    });

    gulp.watch(["scss/*.scss"], gulp.series("sass"));
    gulp.watch(["**/*.php"]).on("change", browserSync.reload);
  })
);

// Default task
gulp.task("default", gulp.series("serve"));
