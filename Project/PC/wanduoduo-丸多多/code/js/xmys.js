 $(document).ready(function() {
     function fn1() {
         $('.box1 img').attr("src", "./images/1.gif");
     }

     function fn11() {
         $('.box1 img').attr("src", "./images/1.jpg");
     }

     function fn2() {
         $('.box2 img').attr("src", "./images/2.gif");
     }

     function fn22() {
         $('.box2 img').attr("src", "./images/2.jpg");
     }

     function fn3() {
         $('.box3 img').attr("src", "./images/3.gif");
     }

     function fn33() {
         $('.box3 img').attr("src", "./images/3.jpg");
     }

     $(".box1").hover(function() {
         fn1();
     }, function() {
         fn11();
     })
     $(".box2").hover(function() {
         fn2();
     }, function() {
         fn22();
     })
     $(".box3").hover(function() {
         fn3();
     }, function() {
         fn33();
     })

     var hasShowed = true;

     function fn99() {
         fn1();
         setTimeout(function() {
             fn11();
         }, 3000);
         setTimeout(function() {
             fn2();
         }, 3000);
         setTimeout(function() {
             fn22();
         }, 6000);
         setTimeout(function() {
             fn3();
         }, 6000);
         setTimeout(function() {
             fn33();
         }, 9000);
     }
     $(window).scroll(function() {
         var a = document.getElementById("box").offsetTop;
         console.log(a)
         if (a >= $(window).scrollTop() && a < ($(window).scrollTop() + $(window).height() - "850")) {
             // console.log("div在可视范围");

             if (hasShowed) {
                 setTimeout(fn99, 100);
                 hasShowed = false;
             } else {}
         }

     });

 })
