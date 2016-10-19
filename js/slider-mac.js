function SLIDERAPP(){
    var slidersControl = $('.slider-control').find('a[data-slide]');
    var screenArr = $('.mac-screen').find('div[data-screen]');
    var textArr = $('.mac-text').find('div[data-text]');
    var count = 0;
    var needToSlide = true;
    var stopClicking = false;

    function slideScreen(count){
        screenArr.filter('[data-screen]').fadeOut(100);
        screenArr.filter('[data-screen="' + count + '"]').delay(300).fadeIn(1000);
    }
    function slideText(count){
        textArr.filter('[data-text]').hide(100);
        textArr.filter('[data-text="' + count + '"]').show(1000);
    }
    function controlKey(count){
        slidersControl.filter('[data-slide]').removeClass('active');
        slidersControl.filter('[data-slide="' + count + '"]').addClass('active');
    }
    function slideTo(count) {
        slideScreen(count);
        slideText(count);
        controlKey(count);
    }
    function slideIterator(){
        if(!needToSlide){
            return;
        }
        var currentItemId = $(screenArr[count]).data('screen');
        slideTo(count);
        count = currentItemId === screenArr.length - 1 ? 0 : currentItemId + 1;
        setTimeout(function (){
            slideIterator();
        }, 8000);
    }
    slideIterator(count);

    $('.slider-control').find('a').on('click', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(stopClicking){
            return;
        }
        stopClicking = true;
        needToSlide = false;
        slideTo($(this).data('slide'));
        setTimeout(function(){
            stopClicking = false;
            console.log(1);
        }, 1300);
    });
}
window.onload = function(){
    SLIDERAPP();
};
