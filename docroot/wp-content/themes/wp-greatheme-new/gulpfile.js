// load plugins
// Node 10.x.x
// gulp 3.9.1


const gulp = require("gulp");
const gulpsequence = require("gulp-sequence");

const htmlmin = require("gulp-htmlmin");

const sass = require("gulp-sass");
const prefixer = require("gulp-autoprefixer");
const cleancss = require("gulp-clean-css");

const imagemin = require("gulp-imagemin");
const imageminPngquant = require("imagemin-pngquant");
const imageminZopfli = require("imagemin-zopfli");
const imageminMozjpeg = require("imagemin-mozjpeg");

// const concat = require("gulp-concat");
// const babel = require("gulp-babel");
// const rename = require("gulp-rename");
// const uglify = require('gulp-uglify');

const browserSync = require("browser-sync").create();

const reload = browserSync.reload;

const projectpath = 'C:/xampp/htdocs/aulapp/wp-content/themes/wp-greatheme-new';


// Set the browser that you want to supoprt
const overrideBrowserslist = [
  '> 1%',
  'last 2 versions',
  'not dead'
];


// SCSS
gulp.task("sass", function () {
  return gulp.src(
    ["./scss/style.scss"]
  )
  .pipe(sass({outputStyle: "uncompressed"}).on('error', sass.logError))
  .pipe(prefixer(overrideBrowserslist))
  .pipe(gulp.dest("./"));
});


// CSS min
gulp.task("cssmin", function () {
  return (gulp.src(["./style.css"])
  // .pipe(purgecss({
  //  content: ['./temp/**/*.php']
  // }))
  .pipe(cleancss())
  .pipe(gulp.dest("./dist")));
});


// JS concat  
// gulp.task("jsconcat", function () {
//   return gulp.src([
//     "./node_modules/bootstrap/js/src/*"
//   ])
//   .pipe(concat("./bundle.js"))
//   .pipe(gulp.dest("./js"))
// });


// JS minify
// ???


// HTML min 
gulp.task("htmlmin", function () {
  return gulp.src(["./**/*.php", "!./functions.php", "!./inc/*.php", "!dist/**/*.php"]).pipe(htmlmin({
    collapseWhitespace: true,
    removeComments: true,
    minifyCSS: true,
    minifyJS: true,
    minifyURLs: true,
    html5: true,
    ignoreCustomFragments: [/<%[\s\S]*?%>/, /<\?[=|php]?[\s\S]*?\?>/]
  }))
  .pipe(gulp.dest("./dist"));
});


// copy static files
gulp.task("copystatic", function () {
  gulp.src(["./README.md", "./LICENSE", "./package.json", "./style.css", "screenshot.png"]).pipe(gulp.dest("./dist"));
  gulp.src("./assets/fonts/*.{ttf,woff,woff2,eot,svg}").pipe(gulp.dest("./dist/assets/fonts"));
});


// image min
gulp.task("imagemin", function () {
  return gulp.src("./assets/images/*")
  
  .pipe(imagemin([
    imageminPngquant({
      speed: 10, 
      quality: [0.8, 0.9]
    }),

    imageminZopfli({
      more: true, 
      iterations: 15
    }),

    imagemin.gifsicle({interlaced: true, optimizationLevel: 3, colors: 6}),
    imagemin.svgo({
      plugins: [
        {
          removeViewBox: true,
          cleanupIDs: false
        }
      ]
    }),

    imageminMozjpeg({
      progressive: true,
    }),
  ], 

  {verbose: true}))
  .pipe(gulp.dest("./dist/assets"));
});


gulp.task('server', function () {
  browserSync.init({proxy: "http://localhost/aulapp"});
  gulp.watch('./scss/**/*.scss', ['sass']);
  gulp.watch('./style.css').on('change', reload);
  gulp.watch('./*.php').on("change", reload);
});


// Tasks
gulp.task( "dev", gulpsequence( [ 'sass' ], [ 'server' ] ) );
gulp.task( "prod", gulpsequence([ 'sass', 'htmlmin', 'imagemin'], ['cssmin'], 'copystatic'));