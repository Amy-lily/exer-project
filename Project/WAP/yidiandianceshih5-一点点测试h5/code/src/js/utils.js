function getArrByAttr(cls, attr){
  var tmpArr = [];
  $(cls).each(function(i, el){
    tmpArr[i] = $(el).attr(attr);
  })
  return tmpArr;
}

function getDataArr(dataArr, swiperLength){
  var tmpArr = [];
  var tmpNum = 0;
  for(var i = 0; i < swiperLength; i++){
    tmpArr[i] = 0;
    for(var j = 0; j < dataArr.length; j++){
      tmpNum = (j == dataArr.length - 1) ? swiperLength : dataArr[j+1];//如果是最后一个，则使用最后一个的值
      if(i >= parseInt(dataArr[j]) && i < tmpNum ){
        tmpArr[i] = j;
      }
    }
  }
  return tmpArr;
}

function setNavActive(elCls, activeCls, index) {
  $(elCls).eq(index).addClass(activeCls).siblings().removeClass(activeCls);
}


function jsonP(url){
 window.callfn = function(data){
    return data;
  }
  var scriptEl = document.createElement('script');
  scriptEl.src = url + '&t=' + (new Date()).valueOf();
  document.head.appendChild(scriptEl);
  document.head.removeChild(scriptEl);
}
 

export {getArrByAttr, getDataArr, setNavActive, jsonP}


