var browser={
  versions:function(){
    var u = navigator.userAgent, app = navigator.appVersion;
    return {
      webKit: u.indexOf('AppleWebKit') > -1,
      ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
      android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
      weixin: u.indexOf('MicroMessenger') > -1,
      txnews: u.indexOf('qqnews') > -1,
      sinawb: u.indexOf('weibo') > -1,
      mqq: u.indexOf('QQ') > -1
    };
  }(),

  playability:function(){
    var ua = window.navigator.userAgent;
    var TBS = ua.match(/TBS\/([\d.]+)/);
    var TBS_V0 = '036849'; 
    var TBS_V1 = '036900'; 
    var QQB = ua.match(/MQQBrowser\/([\d.]+)/);
    var QQB_V0 = '7.1'; 
    var QQB_V1 = '7.2'; 
 
    var tbs = {
      "isTBS" : false,  
      "tbsVersion" : 0, 
      "QQBrowserVersion" : 0, 
      "isRightEvent" : false, 
      "useH5Play" : false,   
      "isQQBrowser": false 
    };
    if (TBS) {
      tbs.isTBS = true;
      tbs.tbsVersion = TBS[1];
      if(TBS[1] >= TBS_V1){
        tbs.isRightEvent = true;
      }
      if (TBS[1] >= TBS_V0) {
        tbs.useH5Play = true;
      }
    } else if (QQB) {
      tbs.isQQBrowser = true;
      tbs.isTBS = true;
      tbs.QQVersion = QQB[1];
      if(QQB[1] >= QQB_V1){
        tbs.isRightEvent = true;
      }
      if(QQB[1] >= QQB_V1){
        tbs.useH5Play = true;
      }
    }
    return tbs;
   }(),

  language:(navigator.browserLanguage || navigator.language).toLowerCase()
};


function jsonP(url){
  window.callfn = function(data){
    return data;
  }
  var scriptEl = document.createElement('script');
  scriptEl.src = url + '&t=' + (new Date()).valueOf();
  document.head.appendChild(scriptEl);
  document.head.removeChild(scriptEl);
}


function once(dom, event, callback) {
  var handle = function() {
      callback();
      dom.removeEventListener(event, handle);
  }
  dom.addEventListener(event, handle)
}



export {jsonP, once, browser}