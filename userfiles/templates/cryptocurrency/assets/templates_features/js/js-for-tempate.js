//Add class for navigation when scroll

$(function () {
    $(document).scroll(function () {
        var $nav = $(".main .navigation-holder.not-transparent section.header-background");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});
