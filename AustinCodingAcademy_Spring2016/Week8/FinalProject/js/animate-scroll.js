$(document).ready(function () {

    $(window).scroll(function() {

        var verticalScroll = $(this).scrollTop();

        if(verticalScroll >= 200) {

            $('#pancakes').addClass('animated flipInX infinite');
        }

    });
    
    $(window).scroll(function() {

        var verticalScroll = $(this).scrollTop();

        if(verticalScroll >= 200) {

            $('#my_jello').addClass('animated jello infinite');
        }

    });
    
}); 

