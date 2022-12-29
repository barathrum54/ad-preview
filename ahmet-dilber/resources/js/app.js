import './bootstrap';
import './jquery';

//Menu Toggle Script
$(".nav-item.dd").click(function (e) {
    e.preventDefault();
    $(".nav-item.dd").not(this).removeClass("active");
    $(this).hasClass("active") == false ? $(this).addClass("active") : '';
    $(this).find('.dropdown-content').each(function () {
        var menu = $(this);
        var menupos = menu.offset();
        if (menupos.left + menu.width() > $(window).width() - 50) {
            var newpos = -menu.width();
            menu.css({ left: newpos });
        }
    });
});

$(document).click(function (e) {
    var container = $(".nav-item.dd");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.removeClass("active");
    }
});
//jq data-menu click
$(document).on('click', '[data-menu-target]', function (e) {
    e.preventDefault();
    //remove active from all other
    $('[data-menu-target]').not(this).removeClass('active');
    //add active to this
    $(this).hasClass('active') == false ? $(this).addClass('active') : '';
    //get target
    let target = $(this).data('menu-target');
    let targetElement = $('[data-menu="' + target + '"]');

    //remove active from all other
    $('[data-menu]').not(target).removeClass('active');
    // //add active to target
    $(targetElement).hasClass('active') == false ? $(targetElement).addClass('active') : '';
})

//detail page faq accordion
$("[data-faq-accordion]").click(function (e) {
    e.preventDefault();
    $("[data-faq-accordion]").not(this).removeClass('active');
    $(this).toggleClass('active');
});