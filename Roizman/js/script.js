
$(".yarmus").hover(function() {
    $(".announce").addClass("jpg11");
}, function() {
    $(".announce").removeClass("jpg11");
});

$(".masha").hover(function() {
    $(".announce").addClass("jpg7");
}, function() {
    $(".announce").removeClass("jpg7");
});

$(".goldenboy").hover(function() {
    $(".announce").addClass("jpg8");
}, function() {
    $(".announce").removeClass("jpg8");
});

$(".answer").hover(function() {
    $(".announce").addClass("jpg10");
}, function() {
    $(".announce").removeClass("jpg10");
});


$(window).resize(function() {
    if ($(window).width() > 768 ) {
        $('.oneblock').css( {'display': 'inline'});
    }
});


$(".fademenu").click(function() {

/*  $(".first").toggleClass("heightcontrol");    */

    $(".oneblock").slideToggle();

   /* $(".firstbutton").slideToggle();
    $(".secondbutton").slideToggle();
    $(".top__menu").toggleClass("displaytoggle"); */
});