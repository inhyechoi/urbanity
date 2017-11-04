$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
       ('header').addClass('.headerTop');
    }
    else {
       ('header').removeClass('.headerTop');
       
    }
});
