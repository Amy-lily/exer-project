$(document).ready(function(){

    skrollr.init({
            smoothScrolling: false,
            mobileDeceleration: 0.004
        });
var map1 = new BMap.Map("map1");            // 创建Map实例
var point1 = new BMap.Point(116.517768,39.804809);
map1.centerAndZoom(point1,17);
var marker1 = new BMap.Marker(point1);  // 创建标注
map1.addOverlay(marker1);               // 将标注添加到地图中
marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
map1.enableScrollWheelZoom();                  //启用滚轮放大缩小




//加载第二张地图
var map2 = new BMap.Map("map2");            // 创建Map实例
var point2 = new BMap.Point(113.256826, 23.17894);
map2.centerAndZoom(point2,17);
var marker2 = new BMap.Marker(point2);  // 创建标注
map2.addOverlay(marker2);               // 将标注添加到地图中
marker2.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
map2.enableScrollWheelZoom();                  //启用滚轮放大缩小




//加载第三张地图
var map3 = new BMap.Map("map3");            // 创建Map实例
var point3 = new BMap.Point(118.858617, 31.939268);
map3.centerAndZoom(point3,17);
var marker3 = new BMap.Marker(point3);  // 创建标注
map3.addOverlay(marker3);               // 将标注添加到地图中
marker3.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
map3.enableScrollWheelZoom();                  //启用滚轮放大缩小


})
