// parallax
$(window).on('load', function () {
    $('.name-himatika').addClass('name-go');
    $('.nav-nav').addClass('nav-nav-go');
});

$(window).scroll(function () {
    var wScroll = $(this).scrollTop();
    if (wScroll > $('.about').offset().top - 500) {
        $('.ah1').addClass('ah1-go');
        $('.ap').addClass('ap-go');
        $('.aimg').addClass('aimg-go');
    }

});

// TO DIV
$('.page-scroll').on('click', function (e) {

    // ambil isi href
    var tujuan = $(this).attr('href');
    // tangkap elemen ybs
    var elemenTujuan = $(tujuan);

    // pindahkan scroll
    $('body').animate({
        scrollTop: elemenTujuan.offset().top
    }, 2000);

    // $('html, body').animate({
    //     scrollTop: $("#myDiv").offset().top
    // }, 2000);

    e.preventDefault();

});