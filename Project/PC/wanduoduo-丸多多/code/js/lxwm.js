$(document).ready(function() {
    // 
    function num() {
        (() => {
            function InitParam(obj) {
                let that = this;
                this.obj = obj || {};
                this.boxId = document.getElementById(this.obj.boxId || 'num');
                this.endNum = this.obj.endNum || parseInt(this.boxId.innerHTML);
                this.startNum = this.obj.startNum || this.endNum - 1000;
                this.countRange = this.obj.countRange || 1000;
                this.numRange = this.obj.numRange || 8;
                this.delayTime = this.obj.delayTime || 50;
                this.itmer = this.obj.itmer || null;

                this.changeNum = function() {
                    if (that.startNum <= that.endNum) {
                        that.boxId.innerHTML = that.startNum;
                        that.startNum = that.startNum + that.numRange;

                        that.itmer = setTimeout(arguments.callee, that.delayTime);
                    } else {
                        clearTimeout(that.itmer);
                    }
                }
            }
            window.init = function(obj) {
                return new InitParam(obj);
            }
        })()

        init({
            boxId: 'num', //盒子
            endNum: 163, //结束数，可以是秒表结束时间
            startNum: 99, //开始数，可以是秒表开始时间
            numRange: 2, //两数每次的变化量，如果为1，可以作为秒表基础单位
            delayTime: 100, //延迟时间，如果为1000为一秒执行一次
        }).changeNum();
    }

    var hasShowed = false;

    $(window).scroll(function() {
        var a = $(window).scrollTop();


        if (a >= 100 && !hasShowed) {
            hasShowed = true;
            num();
        }


    });





    skrollr.init({
        smoothScrolling: false,
        mobileDeceleration: 0.004
    });
    var map1 = new BMap.Map("map1"); // 创建Map实例
    var point1 = new BMap.Point(116.517706, 39.804878);
    map1.centerAndZoom(point1, 17);
    var marker1 = new BMap.Marker(point1); // 创建标注
    map1.addOverlay(marker1); // 将标注添加到地图中
    marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map1.enableScrollWheelZoom(); //启用滚轮放大缩小




    //加载第二张地图
    var map2 = new BMap.Map("map2"); // 创建Map实例
    var point2 = new BMap.Point(118.829983, 31.922404);
    map2.centerAndZoom(point2, 17);
    var marker2 = new BMap.Marker(point2); // 创建标注
    map2.addOverlay(marker2); // 将标注添加到地图中
    marker2.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map2.enableScrollWheelZoom(); //启用滚轮放大缩小




    //加载第三张地图
    var map3 = new BMap.Map("map3"); // 创建Map实例
    var point3 = new BMap.Point(113.271241, 23.207563);
    map3.centerAndZoom(point3, 17);
    var marker3 = new BMap.Marker(point3); // 创建标注
    map3.addOverlay(marker3); // 将标注添加到地图中
    marker3.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map3.enableScrollWheelZoom(); //启用滚轮放大缩小

    $(".list2-box2 .bj").click(function() {
        $(".list2-box2 .bj").addClass("active");
        $(".list2-box2 .js").removeClass("active");
        $(".list2-box2 .gz").removeClass("active");
        $(".list2-box1 .bd li:nth-child(1)").css({ "display": "block" })
        $(".list2-box1 .bd li:nth-child(2)").css({ "display": "none" })
        $(".list2-box1 .bd li:nth-child(3)").css({ "display": "none" })
    })
    $(".list2-box2 .js").click(function() {
        $(".list2-box2 .bj").removeClass("active");
        $(".list2-box2 .js").addClass("active");
        $(".list2-box2 .gz").removeClass("active");
        $(".list2-box1 .bd li:nth-child(1)").css({ "display": "none" })
        $(".list2-box1 .bd li:nth-child(2)").css({ "display": "block" })
        $(".list2-box1 .bd li:nth-child(3)").css({ "display": "none" })
    })
    $(".list2-box2 .gz").click(function() {
        $(".list2-box2 .bj").removeClass("active");
        $(".list2-box2 .js").removeClass("active");
        $(".list2-box2 .gz").addClass("active");
        $(".list2-box1 .bd li:nth-child(1)").css({ "display": "none" })
        $(".list2-box1 .bd li:nth-child(2)").css({ "display": "none" })
        $(".list2-box1 .bd li:nth-child(3)").css({ "display": "block" })
    })







})
