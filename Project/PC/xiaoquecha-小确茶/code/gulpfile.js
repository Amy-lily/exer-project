var gulp = require('gulp');
var concat = require('gulp-concat');                            //合并文件
var clean = require('gulp-clean');                              // 清理文件插件  
var minifyCss = require('gulp-clean-css');                     //- 压缩CSS为一行；
var uglifyJs = require('gulp-uglify');                          //压缩js
var rev = require('gulp-rev');                                  //- 对文件名加MD5后缀
var revCollector = require('gulp-rev-collector');               //- 路径替换
var gulpSequence = require('gulp-sequence');                    //队列方式执行任务 


//dist文件夹只删除 文件 不删除文件夹，防止删除掉.svn,根据项目动态调整文件后缀
var cleanFiles = ['dist/**/*.js', 'dist/**/*.css',
'dist/**/*.jpg','dist/**/*.gif','dist/**/*.png',
'dist/*.shtml','dist/**/*.html',
'dist/**/*.mp4','rev/**/*.json'];

gulp.task('css', function(){
  return gulp.src('./css/*.css')
         .pipe(minifyCss())
         .pipe(rev())
         .pipe(gulp.dest('./dist/css'))
         .pipe(rev.manifest())
         .pipe(gulp.dest('./rev/css'));
         
});


gulp.task('js', function(){
  return gulp.src('./js/*.js')
         .pipe(uglifyJs())
         .pipe(rev())
         .pipe(gulp.dest('./dist/js'))
         .pipe(rev.manifest())
         .pipe(gulp.dest('./rev/js'));
});


gulp.task('images', function(){
  return gulp.src(['./images/*'])
         .pipe(rev())
         .pipe(gulp.dest('./dist/images'))
         .pipe(rev.manifest())
         .pipe(gulp.dest('./rev/images'));
});


gulp.task('rev-css-images', function(){
  return gulp.src(['rev/**/*.json', './dist/css/*.css'])
         .pipe(revCollector())
         .pipe(gulp.dest('dist/css')); 
});


gulp.task('rev', function(){
  return gulp.src(['rev/**/*.json', './*.shtml'])
         .pipe(revCollector({
              replaceReved : true
            }

           )
          )
         .pipe(gulp.dest('dist')); 
})

gulp.task('move-libs', function(){
  return gulp.src('./libs/**')
         .pipe(gulp.dest('dist/libs')); 
});


gulp.task('rev-inc', function(){
  return gulp.src(['rev/**/*.json', './inc/**'])
         .pipe(revCollector())
         .pipe(gulp.dest('dist/inc/')); 
})






//清空目标文件夹缓存
gulp.task('clean',function(){
    //read参数为false表示不读取文件的内容
  return gulp.src(cleanFiles, {read: false})
        .pipe(clean());    
});


gulp.task('default', gulpSequence('clean','css', 'js', 'images', 'rev-css-images','rev', 'rev-inc', 'move-libs'));