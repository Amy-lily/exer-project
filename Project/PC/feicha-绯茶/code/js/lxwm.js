$(document).ready(function() {

    skrollr.init({
        smoothScrolling: false,
        mobileDeceleration: 0.004
    });
    var map1 = new BMap.Map("map1"); // 创建Map实例
    var point1 = new BMap.Point(113.452473, 23.111372);
    map1.centerAndZoom(point1, 17);
    var marker1 = new BMap.Marker(point1); // 创建标注
    map1.addOverlay(marker1); // 将标注添加到地图中
    marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map1.enableScrollWheelZoom(); //启用滚轮放大缩小




    //加载第二张地图
	var map2 = new BMap.Map("map2");
    var point2 = new BMap.Point(116.564916, 39.781213);
    map2.centerAndZoom(point2, 17);
    var marker2 = new BMap.Marker(point2);
    map2.addOverlay(marker2);
    marker2.setAnimation(BMAP_ANIMATION_BOUNCE);
    map2.enableScrollWheelZoom();



    //加载第三张地图
    var map3 = new BMap.Map("map3");
    var point3 = new BMap.Point(104.060672, 30.684407);
    map3.centerAndZoom(point3, 17);
    var marker3 = new BMap.Marker(point3);
    map3.addOverlay(marker3);
    marker3.setAnimation(BMAP_ANIMATION_BOUNCE);
    map3.enableScrollWheelZoom();

    //加载第四张地图
    var map4 = new BMap.Map("map4");
    var point4 = new BMap.Point(118.864284, 31.967256);
    map4.centerAndZoom(point4, 17);
    var marker4 = new BMap.Marker(point4);
    map4.addOverlay(marker4);
    marker4.setAnimation(BMAP_ANIMATION_BOUNCE);
    map4.enableScrollWheelZoom();


})