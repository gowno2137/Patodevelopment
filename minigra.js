$(document).ready(function(){
    setInterval(function() {
      $(".czerwony").animate({left: Math.floor(Math.random()*1000)});
      $(".czerwony").animate({top: Math.floor(Math.random()*1000)});
    }, 1000);
    setInterval(function() {
        $(".taki").animate({left: Math.floor(Math.random()*1000)});
        $(".taki").animate({top: Math.floor(Math.random()*1000)});
    }, 1000);
        });
  