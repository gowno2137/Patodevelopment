$(document).ready(function() {
    let isRed = false;
    setInterval(function() {
        $(".kup").css("color", isRed ? 'red' : 'white');
        isRed = !isRed;
    }, 500);
});