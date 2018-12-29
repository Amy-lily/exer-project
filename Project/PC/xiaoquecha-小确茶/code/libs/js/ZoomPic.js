function ZoomPic()

{

    this.initialize.apply(this, arguments)

}

ZoomPic.prototype =

    {

        initialize: function(id)

        {

            var _this = this;

            this.wrap = typeof id === "string" ? document.getElementById(id) : id;

            this.oUl = this.wrap.getElementsByTagName("ul")[0];

            this.aLi = this.wrap.getElementsByTagName("li");

            this.indicator = this.wrap.getElementsByTagName('div')[0];

            this.aInd = this.wrap.getElementsByTagName("a"); //小圆点

            this.prev = this.wrap.getElementsByTagName("span")[0];

            this.next = this.wrap.getElementsByTagName("span")[1];

            this.timer = 2000;

            this.aSort = [];

            this.iCenter = 3;

            this._doPrev = function() {
                return _this.doPrev.apply(_this)
            };

            this._doNext = function() {
                return _this.doNext.apply(_this)
            };

            this.options = [

                { width: 280, height: 420, top: 90, left: 70, zIndex: 1 },

                { width: 320, height: 480, top: 60, left: 150, zIndex: 2 },

                { width: 360, height: 540, top: 30, left: 230, zIndex: 3 },

                { width: 400, height: 600, top: 0, left: 310, zIndex: 4 },

                { width: 360, height: 540, top: 30, left: 430, zIndex: 3 },

                { width: 320, height: 480, top: 60, left: 550, zIndex: 2 },

                { width: 280, height: 420, top: 90, left: 670, zIndex: 1 },


            ];

            for (var i = 0; i < this.aLi.length; i++) this.aSort[i] = this.aLi[i];

            this.aSort.unshift(this.aSort.pop());

            this.setUp();

            this.addEvent(this.prev, "click", this._doPrev);

            this.addEvent(this.next, "click", this._doNext);

            this.doImgClick();
            //自己添加 
            this.doClick();

            this.timer = setInterval(function()

                {

                    _this.doNext()

                }, 3000);

            this.wrap.onmouseover = function()

            {

                clearInterval(_this.timer)

            };

            this.wrap.onmouseout = function()

            {

                _this.timer = setInterval(function()

                    {

                        _this.doNext()

                    }, 3000);

            }

        },

        doPrev: function()

        {
            // unshift  在数组前添加一个元素,并返回新的长度
            // pop删除并返回数组的最后一个元素
            //将删除的最后一个放在第一个位置
            this.aSort.unshift(this.aSort.pop());

            this.setUp()

        },

        doNext: function()

        {
            //shift 删除数组的第一个元素,并支架
            //将第一个元素放在最后一个元素的位置
            this.aSort.push(this.aSort.shift());

            this.setUp()

        },

        doImgClick: function()

        {

            var _this = this;

            for (var i = 0; i < this.aSort.length; i++)


            {

                this.aSort[i].onclick = function()

                {
                    if (this.index > _this.iCenter)

                    {
                        for (var i = 0; i < this.index - _this.iCenter; i++) _this.aSort.push(_this.aSort.shift());

                        _this.setUp()

                    } else if (this.index < _this.iCenter)

                    {

                        for (var i = 0; i < _this.iCenter - this.index; i++) _this.aSort.unshift(_this.aSort.pop());

                        _this.setUp()

                    }

                }

            }

        },
        // 自己添加
        doClick: function()

        {

            var _this = this;

            $('.indicator').off().on('click', function() {
                var _index = $(this).index();
                var _cur = $('a.selected').index();
                if (_index > _cur) {
                    for (var i = 0; i < _index - _cur; i++) _this.aSort.push(_this.aSort.shift());
                    _this.setUp()
                } else if (_index < _cur) {
                    for (var i = 0; i < _cur - _index; i++) _this.aSort.unshift(_this.aSort.pop());
                    _this.setUp()

                }
            })

        },
        setUp: function()

        {

            var _this = this;

            var i = 0;

            for (i = 0; i < this.aSort.length; i++) this.oUl.appendChild(this.aSort[i]);


            $('.indicator').removeClass('selected').eq(parseInt($('.focus-wrapper li:eq(' + (_this.iCenter - 1) + ') img').attr('class')) - 1).addClass('selected');

            for (i = 0; i < this.aSort.length; i++)

            {

                this.aSort[i].index = i;

                if (i < 7)

                {

                    this.css(this.aSort[i], "display", "block");
                    this.doMove(this.aSort[i], this.options[i], function()

                        {

                            _this.doMove(_this.aSort[_this.iCenter].getElementsByTagName("img")[0], { opacity: 850 }, function()

                                {

                                    _this.doMove(_this.aSort[_this.iCenter].getElementsByTagName("img")[0], { opacity: 100 }, function()

                                        {

                                            _this.aSort[_this.iCenter].onmouseover = function()

                                            {

                                                _this.doMove(this.getElementsByTagName("div")[0], { bottom: 0 })
                                            };

                                            _this.aSort[_this.iCenter].onmouseout = function()

                                            {

                                                _this.doMove(this.getElementsByTagName("div")[0], { bottom: -100 })

                                            }

                                        })

                                })

                        });

                } else

                {

                    this.css(this.aSort[i], "display", "none");

                    this.css(this.aSort[i], "width", 0);

                    this.css(this.aSort[i], "height", 0);

                    this.css(this.aSort[i], "top", 37);

                    this.css(this.aSort[i], "left", this.oUl.offsetWidth / 2)

                }

                if (i < this.iCenter || i > this.iCenter)

                {

                    this.css(this.aSort[i].getElementsByTagName("img")[0], "opacity", 100)

                    this.aSort[i].onmouseover = function()

                    {

                        _this.doMove(this.getElementsByTagName("img")[0], { opacity: 100 })

                    };

                    this.aSort[i].onmouseout = function()

                    {

                        _this.doMove(this.getElementsByTagName("img")[0], { opacity: 100 })

                    };

                    this.aSort[i].onmouseout();

                } else

                {

                    this.aSort[i].onmouseover = this.aSort[i].onmouseout = null

                }

            }

        },

        addEvent: function(oElement, sEventType, fnHandler)

        {

            return oElement.addEventListener ? oElement.addEventListener(sEventType, fnHandler, false) : oElement.attachEvent("on" + sEventType, fnHandler)

        },

        css: function(oElement, attr, value)

        {

            if (arguments.length == 2)

            {

                return oElement.currentStyle ? oElement.currentStyle[attr] : getComputedStyle(oElement, null)[attr]

            } else if (arguments.length == 3)

            {
                // console.log(attr);
                switch (attr)

                {

                    case "width":

                    case "height":

                    case "top":

                    case "left":

                    case "bottom":

                        oElement.style[attr] = value + "px";


                        break;

                    case "opacity":

                        oElement.style.filter = "alpha(opacity=" + value + ")";

                        oElement.style.opacity = value / 100;

                        break;

                    default:

                        oElement.style[attr] = value;

                        break

                }

            }

        },

        doMove: function(oElement, oAttr, fnCallBack)

        {

            var _this = this;

            clearInterval(oElement.timer);

            oElement.timer = setInterval(function()

                {

                    var bStop = true;

                    for (var property in oAttr)

                    {

                        var iCur = parseFloat(_this.css(oElement, property));


                        property == "opacity" && (iCur = parseInt(iCur.toFixed(2) * 100));

                        var iSpeed = (oAttr[property] - iCur) / 5;

                        iSpeed = iSpeed > 0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);



                        if (iCur != oAttr[property])

                        {

                            bStop = false;

                            _this.css(oElement, property, iCur + iSpeed)

                        }

                    }

                    if (bStop)

                    {

                        // clearInterval(oElement.timer);

                        fnCallBack && fnCallBack.apply(_this, arguments)

                    }

                }, 30)

        }

    };

window.onload = function()

{

    new ZoomPic("focus_Box");

};