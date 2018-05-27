$("#scrol1").click(function() {
    $('html, body').animate({
        scrollTop: $("#header").offset().top
    }, 2000);
    document.getElementById("chkPassport").checked = false;
});
$("#scrol2").click(function() {
    $('html, body').animate({
        scrollTop: $("#services").offset().top
    }, 2000);
    document.getElementById("chkPassport").checked = false;
});
$("#scrol3").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact-us").offset().top
    }, 2000);
    document.getElementById("chkPassport").checked = false;
});
AOS.init({
    duration: 1200,
});

