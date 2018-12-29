import render from '../tpl/index.art';
import $ from 'n-zepto';
import Swiper from 'swiper/dist/js/swiper.jquery.min.js';
import { swiperAnimateCache, swiperAnimate } from './swiper.animate.js';
import AlloyFinger from 'alloyfinger';
import { getArrByAttr, getDataArr, setNavActive, jsonP } from './utils.js';
import token from './token.js';

import "../css/reset.css";
import "../css/user-animate.css";
import "swiper/dist/css/swiper.min.css";
import "../css/index.css";
import { share } from "./share.js";
import shareInfo from "./shareinfo.js";
import mergeImages from "merge-images";




const data = {};
const html = render(data);
$(function() {
  
  share({
    shareURL: shareInfo.shareURL,
    title: shareInfo.app.title,
    desc: shareInfo.app.desc,
    imgUrl: shareInfo.app.imgUrl
  });
  BJ_REPORT.info('h5:1');
  var scrollPosition = [
    self.pageXOffset ||
      document.documentElement.scrollLeft ||
      document.body.scrollLeft,
    self.pageYOffset ||
      document.documentElement.scrollTop ||
      document.body.scrollTop
  ];
  var html = jQuery("html");
  html.data("scroll-position", scrollPosition);
  html.data("previous-overflow", html.css("overflow"));
  html.css("overflow", "hidden");
  window.scrollTo(scrollPosition[0], scrollPosition[1]);

  //加载页自动获取屏幕高度
  var loader = new resLoader({
    resources: [
      "http://gif.cnnjidc.com/yidiandian/slide1-gif.gif",
      "http://gif.cnnjidc.com/yidiandian/slide2-gif.gif",
      "http://gif.cnnjidc.com/yidiandian/slide3-gif.gif",
      "http://gif.cnnjidc.com/yidiandian/slide4-gif.gif",
      "http://gif.cnnjidc.com/yidiandian/slide5-gif.gif",
      "http://gif.cnnjidc.com/yidiandian/start-test.gif",
      "http://gif.cnnjidc.com/yidiandian/index-gif.gif", 
      "http://p9.qhimg.com/t01b4ff03b72c7dc6c7.jpg",
      "http://p2.qhimg.com/t01dd90dfbec92074d0.jpg",
      "http://p7.qhimg.com/t01cfec6d87cde457c5.jpg",
      "http://p9.qhimg.com/t01943ced462da67833.jpg",
      "http://p0.qhimg.com/t01943ced462da67833.jpg",
      "http://p2.qhimg.com/t01ed1438874f940dc0.jpg",
      "http://p9.qhimg.com/t01b4ff03b72c7dc6c7.jpg",
      "http://p2.qhimg.com/t01dd90dfbec92074d0.jpg",
      "http://p7.qhimg.com/t01cfec6d87cde457c5.jpg",
      "http://p9.qhimg.com/t01943ced462da67833.jpg",
      "http://p0.qhimg.com/t01943ced462da67833.jpg",
      "http://p6.qhimg.com/t01aa15a7ba7ccb49a7.jpg",
      "http://p8.qhimg.com/t010f1e8badf1134376.jpg",
      "http://p8.qhimg.com/t01cf37ea915533a032.jpg",
      "http://p3.qhimg.com/t0193d8a3963e1803e9.jpg",     
    ],
    onStart: function(total) {},
    onProgress: function(current, total) {
      var percent = (current / total) * 100;
      var num = Math.floor(percent);
      $('.progressbar').css('width', num + '%');
      $(".index-num").text(num + "%");
    },
    onComplete: function(total) {
      $(".index-warp").hide();
      $(".container").show();
      var html = jQuery("html");
      var scrollPosition = html.data("scroll-position");
      html.css("overflow", html.data("previous-overflow"));
      window.scrollTo(scrollPosition[0], scrollPosition[1]);
    }
  });
  loader.start();
//   输入用户名
  $(".name").focus(function() {
    $(".input-word").hide();
  });

  $(".start").click(function() {
    if($(".name").val() == ''){
        alert('请输入您的姓名');
        return false;
    }else{
        // sessionStorage.setItem('uname',$(".name").val());
        // $(".swiper-container").show();

        $(".index-warp").hide();
        sessionStorage.setItem("uname", $(".name").val());
        swiper.slideTo(1, 600, true);
        $(".swiper-container").show();
        return false;
    }
   
  });

  var dataIndexArr = getArrByAttr(".btn", "data-index");
  var swiperLength = $(".swiper-slide").length;
  var data = getDataArr(dataIndexArr, swiperLength);
  var resAns = [];
  // 选择答案
  $('.anslist').off('click').on('click', function(){
      $(this).children(".chose").addClass('active').parent().siblings().children(".chose").removeClass('active');    
      resAns.push($(this).attr('data-ans'));
      resAns =  unique(resAns);
      sessionStorage.setItem('resAns',JSON.stringify(resAns));  
      if(swiper.activeIndex == 5){
        // 姓名 
        $(".ansname").html(sessionStorage.getItem('uname'));
        var nNum = parseInt(Math.random()*resAns.length);
        $('.ansres').attr('src', './static/images/' + resAns[nNum] + '.png');
        var im = $(".resbg")[0];
        var wid = im.width;
        var hei = im.height;
        var can = document.createElement('canvas');
        var ctx = can.getContext("2d");
        ctx.width=wid;
        ctx.height=hei;        
        ctx.fillStyle = "#ffffff"; //填充背景色
        ctx.font = "bold 42px 微软雅黑"; //设置字体颜色 
        var mm = ctx.measureText($("div.ansname").text()).width; //获取文本宽度
        ctx.fillText($("div.ansname").text(), 0, 50);
        var condata = can.toDataURL("image/png");
        mergeImages([
            { src: $("img.resbg")[0].src},
            { src: $("img.ansnamebox")[0].src,x:wid*0.06,y:hei*0.1},
            { src: $("img.ansres")[0].src,x:wid*0.06,y:hei*0.1  },
            { src: $("img.anscode")[0].src,x:wid*0.06,y:hei*0.1 },
            { src: condata,x:(wid- mm)/2,y:hei*0.11},
        ]).then(b64 => document.getElementById("myCanvas").src = b64);
      }
      setTimeout(() => {
        swiper.slideTo(swiper.activeIndex+1, 800, true);
      }, 200);
      

  })
  // 分享朋友 圉
  $(".ans-btn2").click(function(){
    $('.opa').show();
    $('.share').show();
  })
  $('.opa').click(function(){
    $(this).hide()
  })


var swiper = new Swiper(".swiper-container", {
  // direction : 'vertical',
  noSwiping: true,
  noSwipingClass: 'stop-swiping',
  pagination: '.swiper-pagination',
  paginationClickable: true,
  speed: 500,
  effect:"fade",
  fade: {
    crossFade: true,
  },
  onInit: function(swiper) {
      swiperAnimateCache(swiper);
      swiperAnimate(swiper);
  },
  onSlideChangeEnd: function(swiper) {
      swiperAnimate(swiper);
  }, 
  observer: true, //修改swiper自己或子元素时，自动初始化swiper，主要是这两行
  observeParents: true //修改swiper的父元素时，自动初始化swiper



});
    // 数组去重
    function unique(array) {
      var r = [];
      for (var i = 0; i < array.length; i++) {
          for (var j = i + 1; j < array.length; j++) {
              if (array[i] === array[j]) {
                  j = ++i;
              }
          }
          r.push(array[i])
      }
      return r;
  }


  /* Music */
  var ids = document.getElementById('media');

    function play() {
        ids.play();
        document.removeEventListener("touchstart", play, false);
    }

    var af = new AlloyFinger('#btn', {
        tap: function(e) {
            if (ids.paused) {
                $(this).removeClass('off').addClass('on');
                ids.play();
            } else {
                $(this).removeClass('on').addClass('off');
                ids.pause();
            }
            e.stopPropagation();
        },

    });

    document.addEventListener('touchstart', play, false);
    document.addEventListener("WeixinJSBridgeReady", function() {
        ids.play();
    }, false);

    jsonP(token); //验证，必写
});

if (typeof document === "object") {
  document.body.innerHTML = html;
}

export default render;
