import render from '../tpl/index.art';
import $ from 'n-zepto';
import Swiper from 'swiper/dist/js/swiper.jquery.min.js';
import { swiperAnimateCache, swiperAnimate } from './swiper.animate.js';
import AlloyFinger from 'alloyfinger';
import { getArrByAttr, getDataArr, jsonP } from './utils.js';
import token from './token.js';

import '../css/reset.css';
import '../css/user-animate.css';
import 'swiper/dist/css/swiper.min.css';
import '../css/index.css';
import { share } from './share.js';
import shareInfo from './shareinfo.js';

const data = {};
const html = render(data);

$(function () {
  share({
    shareURL: shareInfo.shareURL,
    title: shareInfo.app.title,
    desc: shareInfo.app.desc,
    imgUrl: shareInfo.app.imgUrl
  });
  BJ_REPORT.info('vi:1');
  var dataIndexArr = getArrByAttr('.btn', 'data-index');
  var swiperLength = $('.swiper-slide').length;
  var data = getDataArr(dataIndexArr, swiperLength);
  var swiper = new Swiper('.swiper-container', {
    lazyLoading: true,
    lazyLoadingInPrevNext: true,
    lazyLoadingInPrevNextAmount: 2,
    lazyLoadingOnTransitionStart: true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    direction: 'vertical',
    speed: 600,
    nextButton: '.swiper-button-next',
    onInit: function (swiper) {
      swiperAnimateCache(swiper);
      swiperAnimate(swiper);
      if (swiper.activeIndex > 2 && swiper.activeIndex < swiper.slides.length) {
        $('.nav-wrap').show();
      }
      else {
        $('.nav-wrap').hide();
      }
    },
    onSlideChangeEnd: function (swiper) {
      if ( swiper.activeIndex == swiper.slides.length-1) {
        $(".jt").hide();
      }else{
        $(".jt").show();
      }
      if (swiper.activeIndex > 2 && swiper.activeIndex < swiper.slides.length) {
        $('.nav-wrap').show();
      }
      else {
        $('.nav-wrap').hide();
      }
      swiperAnimate(swiper);
      BJ_REPORT.info('vi:' + (swiper.activeIndex + 1));
    },

    onSlideChangeStart: function (swiper) {
      if (swiper.activeIndex > 2 && swiper.activeIndex < swiper.slides.length) {
        $('.nav-wrap').show();
      }
      else {
        $('.nav-wrap').hide();
      }
    }
  });

  function goToSlide(obj, index) {
    obj.slideTo(index, 1000, true);
  };

  $('.nav-wrap').click(function () {
    goToSlide(swiper, 2);
    BJ_REPORT.info('vi:useNav');
  });
  // 风格理念SI---目录1
  $(".slide3-si-btn1").click(function () {
    goToSlide(swiper, 3);
  })
  // LOGO释义 
  $(".slide4-btn1").click(function(){
    goToSlide(swiper, 4);
  })
  // 品牌形象 
  $(".slide4-btn2").click(function(){
    goToSlide(swiper, 5);
  })
  // 氛围营造
  $(".slide4-btn3").click(function(){
    goToSlide(swiper, 6);
  })


  // 空间环境SI---目录2
  $(".slide3-si-btn2").click(function () {
    goToSlide(swiper, 7);
  })
  // 局部设计
  $(".slide8-btn1").click(function(){
    goToSlide(swiper, 8);
  })
  // 合理布局
  $(".slide8-btn2").click(function(){
    goToSlide(swiper, 9);
  })
  // 模块装修
  $(".slide8-btn3").click(function(){
    goToSlide(swiper, 10);
  })


  // 店型展示SI---目录3
  $(".slide3-si-btn3").click(function () {
    goToSlide(swiper, 11);
  })
  // 企业店
  $('.slide12-btn1').click(function(){
    goToSlide(swiper, 12);
  })
  // 标准店
  $('.slide12-btn2').click(function(){
    goToSlide(swiper, 13);
  })
  // 旗舰店
  $('.slide12-btn3').click(function(){
    goToSlide(swiper, 14);
  })


  // 装饰展示VI---目录4
  $(".slide3-vi-btn").click(function () {
    goToSlide(swiper, 15);
  })
  // 餐具VI
  $('.slide16-btn1').click(function(){
    goToSlide(swiper,16)
  })
  // 形象VI
  $('.slide16-btn2').click(function(){
    goToSlide(swiper,17)
  })
  // 服装VI
  $('.slide16-btn3').click(function(){
    goToSlide(swiper,18)
  })
  // 宣传VI
  $('.slide16-btn4').click(function(){
    goToSlide(swiper,19)
  })
  /* Music */
  var ids = document.getElementById('media');
  function play() {
    ids.play();
    document.removeEventListener("touchstart", play, false);
  }

  var af = new AlloyFinger('#btn', {
    tap: function (e) {
      if (ids.paused) {
        $(this).removeClass('off').addClass('on');
        $("#pic").removeClass('image');
        ids.play();
      } else {
        $("#pic").addClass('image');
        $(this).removeClass('on').addClass('off');
        ids.pause();
      }
      e.stopPropagation();
    },

  });

  document.addEventListener('touchstart', play, false);
  document.addEventListener("WeixinJSBridgeReady", function () {
    ids.play();
  }, false);

  jsonP(token); //验证，必写

});


if (typeof document === 'object') {
  document.body.innerHTML = html;
}

export default render;