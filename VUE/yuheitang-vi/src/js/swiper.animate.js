var effect = null;

function swiperAnimateCache() {
  var allBoxes = window.document.documentElement.querySelectorAll(".ani");
  for (var i = 0; i < allBoxes.length; i++) {
    if(allBoxes[i].attributes["style"]){
      allBoxes[i].setAttribute("swiper-animate-style-cache", allBoxes[i].attributes["style"].value);
    }else{
      allBoxes[i].setAttribute("swiper-animate-style-cache", " ");
      allBoxes[i].style.visibility = "hidden";
    }
  } 
}

function swiperAnimate(a) {
  clearSwiperAnimate();
  var b = a.slides[a.activeIndex].querySelectorAll(".ani");
  for (var i = 0; i < b.length; i++) {

    b[i].style.visibility = "visible";
    
    if(b[i].attributes["swiper-animate-effect"]){
      effect = b[i].attributes["swiper-animate-effect"].value;
    }else{
      effect = "";
    }

    b[i].className = b[i].className + "  " + effect + " " + "animated";
 
    var style = b[i].attributes["style"].value;
    var duration = null;
    if(b[i].attributes["swiper-animate-duration"]){
      duration = b[i].attributes["swiper-animate-duration"].value;
    }else{
      duration =  "";
    }
    duration && (style = style + "animation-duration:" + duration + ";-webkit-animation-duration:" + duration + ";");
    
    var delay = null;
    if(b[i].attributes["swiper-animate-delay"]){
      delay = b[i].attributes["swiper-animate-delay"].value;
    }else{
      delay = "";
    }

    delay && (style = style + "animation-delay:" + delay + ";-webkit-animation-delay:" + delay + ";");
    b[i].setAttribute("style", style);
  }
}

function clearSwiperAnimate() {
  var allBoxes = window.document.documentElement.querySelectorAll(".ani");
  for (var i = 0;i < allBoxes.length; i++) {
    allBoxes[i].attributes["swiper-animate-style-cache"] && allBoxes[i].setAttribute("style", allBoxes[i].attributes["swiper-animate-style-cache"].value);
    allBoxes[i].style.visibility = "hidden";
    allBoxes[i].className = allBoxes[i].className.replace("animated", " ");
    allBoxes[i].attributes["swiper-animate-effect"] && (effect = allBoxes[i].attributes["swiper-animate-effect"].value, allBoxes[i].className = allBoxes[i].className.replace(effect, " "));
  }

}
export {
  swiperAnimateCache, swiperAnimate, clearSwiperAnimate
};
// module.exports = {
//   swiperAnimateCache : swiperAnimateCache,
//   swiperAnimate : swiperAnimate,
//   clearSwiperAnimate : clearSwiperAnimate
// }