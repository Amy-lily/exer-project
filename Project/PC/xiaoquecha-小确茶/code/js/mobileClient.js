function mobileClient () {
	var str=window.top.location.search;
	var gourl=window.location.pathname;
	host = window.location.host;
	murl=host.replace(/www/,'wap')
	if (str.indexOf('?pc')==-1)
	{
		var $nav = navigator.userAgent;
		if($nav.match(/(iPhone|iPod|Android|ios|iPad|Linux;)/i)){
			if(window.location.host == host){			
				location.href = 'http://'+murl+gourl+str;
			}
		}
	}
}
mobileClient();
