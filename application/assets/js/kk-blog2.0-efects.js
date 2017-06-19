
$(document).ready(function(){

    $('#leftUlMenu a').hover(function() {
        $(this).css({'transform' : 'rotate(10deg)'})
    });

    $('#leftUlMenu a').mouseout(function() {
        $(this).css({'transform' : 'rotate(-10deg)'})
    });

    $('#rightUlPosts a').hover(function () {
        $(this).animate({fontSize: "30px"}, 100);
    });

    $('#rightUlPosts a').mouseout(function () {
        $(this).animate({fontSize: "20px"}, 100);
    });

    $('.pagination a'). hover(function () {
        $(this).animate({fontSize: "40px"}, 100);
    });
    $('.pagination a'). mouseout(function () {
        if ($(this).hasClass('activePage') == false) {
            $(this).animate({fontSize: "20px"}, 100);
        }
    });
    $('.theRowUnderTheTitleOfThePost input').on('click',function () {
        if ($(this).val() == 'Big font size') {
            $('p').css({fontSize : 'xx-large'});
            $(this).val('Small font size');
        } else {
            $('p').css({fontSize : 'x-large'});
            $(this).val('Big font size');
        }
    });

});
