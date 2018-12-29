 $(function(){
        //3d
        $('#slide3d').slideCarsousel({slideType:'3d',indicatorEvent:'mouseover'});
       $.fn.slideCarsousel.defaultSetting = {
	        slideInterval :'slideInterval', // 定时器名称
	        isAutoChange :true, // true or false 是否自动播放
	        direction : 5000, //  间隔时间
	        callbackFunc:null, // 如果不为空，会执行该回调函数
	        indicatorEvent:'click', // 指示器事件，支持 click or mouseover 
	        slideType:'3d' //  轮播类型 2d 或者 3d
		}
    });