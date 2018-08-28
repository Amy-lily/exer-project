//jsonp方法

var jsonp = function(url, data, callback) {
  var cbName = 'callback_' + new Date().getTime();
  var queryString = url.indexOf('?') == -1 ? '?' : '&';
  for (var k in data) {
    queryString += k + '=' + data[k] + '&';
  }
  queryString += 'callback=' + cbName;
  var ele = document.createElement('script');
  ele.src = url + queryString;
  window[cbName] = function(data) {
    callback(data);
    document.body.removeChild(ele);
  };
  document.body.appendChild(ele);
}




//微信分享
function share(options) {
    let shareDebug = options.debug || false ;
    let time = (new Date()).valueOf();
    let locaUrl = '?urlname=' + location.href.split('#')[0].replace(/\&/g, "%26").replace(/\?/g, "%3F");
    jsonp(options.shareURL + locaUrl + "&time=" + time, null, function(data) {
        wx.config({
            debug: shareDebug,
            appId: data.appId,
            timestamp: data.timestamp,
            nonceStr: data.nonceStr,
            signature: data.signature,
            jsApiList: [
                'checkJsApi',
                'onMenuShareTimeline',
                'onMenuShareAppMessage',
                'onMenuShareQQ',
                'onMenuShareWeibo'
            ]
        });
    })
    wx.ready(function() {
        let locationUrl = "";
        wx.checkJsApi({
            jsApiList: [
                'checkJsApi',
                'onMenuShareTimeline',
                'onMenuShareAppMessage',
                'onMenuShareQQ',
                'onMenuShareWeibo'
            ]
        });

        function hashChangeFire() {
            locationUrl = location.href;
        }
        //url变化监听器
        if (('onhashchange' in window) && ((typeof document.documentMode === 'undefined') || document.documentMode == 8)) {
            window.onhashchange = hashChangeFire;
            var shareInfo = {
                title: options.title,
                desc: options.desc,
                link: locationUrl,
                imgUrl: options.imgUrl
            }
            wx.onMenuShareAppMessage(shareInfo);
            wx.onMenuShareTimeline(shareInfo);
            wx.onMenuShareWeibo(shareInfo);
            wx.onMenuShareQQ(shareInfo);
            wx.error(function(res) {
                if(debug){
                    alert('wx.error: '+JSON.stringify(res));
                }
            });
        } else {
            setInterval(function() {
                var ischanged = isHashChanged();
                if (ischanged) {
                    hashChangeFire();
                }
            }, 150);
        }
    });
}

export { share }
