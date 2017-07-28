
//jquery for gallery
$(function () {
    $(".img-gallery").hover(function () {
        $(".img-gallery").css("opacity", "0.5");
        $(this).css("opacity", "1");
    }, function () {
        $(".img-gallery").css("opacity", "1");
    });
});