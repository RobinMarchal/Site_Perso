$(document).ready(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.tap-target').tapTarget();
    $('.scrollspy').scrollSpy({
        throttle: 1,
        scrollOffset: 100,
    });
    $('a.box').on('click', function(evt){
        evt.preventDefault(); 
        var target = $(this).attr('href');

        $('html, body').stop()
        .animate({scrollTop: $(target).offset().top}, 1000 );
    });
});
