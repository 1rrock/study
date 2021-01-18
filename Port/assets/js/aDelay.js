$(function(){
    $(".wrap").removeClass("fadeOut");
    $(".wrap").addClass("fadeIn");
    let site = ['about', 'site', 'script', 'animation', 'contact'];
    let currentINdex = 0;

    $(".click").click(function(e){
        currentINdex++;
        $(".wrap").addClass("fadeOut");
        e.preventDefault();
        setTimeout(function() {
            window.location.href = "http://zxcv1685.dothome.co.kr/Port/component/"+site[currentINdex]+".html#";
        }, 2500);
        if( currentINdex == site.length){
            currentINdex = 0;
        }
    });
});