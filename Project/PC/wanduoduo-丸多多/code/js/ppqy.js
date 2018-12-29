 $(document).ready(function() {
     $(window).scroll(function() {
         var $top = $(this).scrollTop();
         var myVideo = document.getElementById('video')
             // console.log($top)
         if (1655 >= $top && $top >= 1300 ) {
             myVideo.play();
         } else {
             myVideo.pause();
         }

     });

 })
