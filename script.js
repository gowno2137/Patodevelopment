$(document).ready(function() {
    var delayInMilliseconds = 1000;
    $(".kup").css("color", "red");
    setTimeout(function() {
        $(".kup").css("color", "white");
        }, delayInMilliseconds);
});