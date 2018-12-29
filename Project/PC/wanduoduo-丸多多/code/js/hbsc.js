$(document).ready(function() {
    function gif1() {
        $(".hbsc-gif1").attr("src", "./images/hbsc-gif1.gif");
    }

    function gif2() {
        $(".hbsc-gif2").attr("src", "./images/hbsc-gif2.gif");
    }

    function gif3() {
        $(".hbsc-gif3").attr("src", "./images/hbsc-gif3.gif");
    }

    function jpg1() {
        $(".hbsc-gif1").attr("src", "./images/hbsc-jpg1.jpg");
    }

    function jpg2() {
        $(".hbsc-gif2").attr("src", "./images/hbsc-jpg2.jpg");
    }

    function jpg3() {
        $(".hbsc-gif3").attr("src", "./images/hbsc-jpg3.jpg");
    }
    $(".hbsc-gif1").hover(function() {
        gif1();
    }, function() {
        jpg1();
    });


    $(".hbsc-gif2").hover(function() {
        gif2();
    }, function() {
        jpg2();
    });
    $(".hbsc-gif3").hover(function() {
        gif3();
    }, function() {
        jpg3();
    });


    function fn99() {
        gif1();
        setTimeout(function() {
            jpg1();
        }, 3000);
        setTimeout(function() {
            gif2();
        }, 3000);
        setTimeout(function() {
            jpg2();
        }, 6000);
        setTimeout(function() {
            gif3();
        }, 6000);
        setTimeout(function() {
            jpg3();
        }, 7500);
        setTimeout(function() {
            $(".hbsc-hyz").addClass('puffIn');
            $(".hbsc-hyz").css({ "opacity": "1" });
        }, 7500);
    }
    var hasShowed = false;
    $(window).scroll(function() {
        var a = document.getElementsByClassName("hbsc-gif1")[0].offsetTop;
        var a = $(window).scrollTop();


        if (a >= 1100 && a <= 2300 && !hasShowed) {
            hasShowed = true;
            setTimeout(fn99, 100);
        }


    });

    // 柱形图
    var myChart = echarts.init(document.getElementById('main', 'halloween'));
    option = {
        backgroundColor: '#000a19',
        tooltip: {},
        label: {
            textStyle: {
                color: 'rgba(255, 255, 255, 0.3)'
            }
        },
        color: ['#000a19'],
        itemStyle: {
            // 点的颜色。
            color: '#eeeeee'
        },
        legend: {
            // data: ['销量']
        },
        xAxis: {
            splitLine: { show: false },
            splitArea: { show: false },
            data: ["2013", "2014", "2015", "2016", "2017", "2018"],
            axisTick: { //去掉刻度线
                show: false
            },
            axisLine: {
                lineStyle: {
                    color: '#fff',
                    width: 0, //这里是坐标轴的宽度,可以去掉
                }
            }
        },
        yAxis: {
            show: false,
            splitLine: { show: false }, //去掉网格
            splitArea: { show: false }, //不保存网格区域
            axisTick: { //去掉刻度线
                show: false
            },
        },
        series: [{
            name: '',
            type: 'bar',
            data: [25, 40, 55, 70, 85, 100],
            barWidth: 30
        }]
    };

    var zMoved = false;
    $(window).scroll(function() {
        var a = document.getElementById("main").offsetTop;
        var a = $(window).scrollTop();
        // console.log(a)

        if (a >= 300 && a <= 1000 && !zMoved) {
            zMoved = true;
            myChart.setOption(option);
        }


    });


    // 饼形图
    var bChart = echarts.init(document.getElementById('bmain'));
    boption = {
        tooltip: {
            // trigger: 'item',
            // formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            // data: ['直接访问', '邮件营销', '联盟广告', '视频广告', '搜索引擎']
        },
        series: [{
            name: '',
            type: 'pie',
            radius: ['50%', '70%'],
            center: ['50%', '60%'],
            data: [{
                    value: 150,
                    name: '',
                    itemStyle: {
                        color: '#75d9d8'
                    }
                },
                {
                    value: 300,
                    name: '',
                    itemStyle: {
                        color: '#dfdb6e'
                    }
                },
                {
                    value: 300,
                    name: '',
                    itemStyle: {
                        color: '#7dd698'
                    }
                },
                {
                    value: 250,
                    name: '',
                    itemStyle: {
                        color: '#e97a7a'
                    }
                },
            ],
            itemStyle: {
                color: '#c23531', //设置扇形的颜色 
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                }
            },
            labelLine: {
                lineStyle: {
                    color: 'rgba(255, 255, 255, 0)'
                }
            }
        }]
    };



    var bMoved = false;
    $(window).scroll(function() {
        var a = document.getElementById("bmain").offsetTop;
        var a = $(window).scrollTop();

        if (a >= 300 && a <= 1000 && !bMoved) {
            bMoved = true;
            bChart.setOption(boption);
        }
    });
   
})