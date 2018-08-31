var fs = require('fs');
var path = require("path");
var remotePath = "./dist/static/js/";
var filePath = path.resolve('dist/static/js/');
var fileArr = [];
var fileNameArr = [];
fs.readdir(filePath,function(err,files){
    if(err){
        console.log(err);
        return;
    }
    var count = files.length;
    var results = {};
    files.forEach(function(filename){
        
        fs.stat(path.join(filePath,filename),function(err, stats){
            if (err) throw err;
            if(stats.isFile()){
                if(getdir(filename) == 'js'){
                    
                    var newUrl = remotePath + filename;
                    fileArr.push(newUrl);
                    fileNameArr.push(filename);
                    if(filename.indexOf('app') != -1){
                       ugFn(newUrl, filename);
                    }

                    if(filename.indexOf('index') != -1){
                       ugFn(newUrl, filename);
                    }
                    
                   
                }
             
            }
        });
    });
    
});


function getdir(url){
    var arr = url.split('.');
    var len = arr.length;
    return arr[len-1];
}

function ugFn(newUrl, filename){
  fs.readFile(newUrl, 'utf-8', function (err, data) {
    if (err) {
      console.log(err);
    } 
    else {
      console.log('...start ug...');
      var uglyJsCode = require('./ug/index.js')(data);
      fs.writeFile(remotePath + filename, uglyJsCode, function (err) {
        if (err) throw err;
          console.log('It\'s saved!');
        });
      }
  });
}

