$(document).ready(function () {

    $(window).scroll(function() {

        var verticalScroll = $(this).scrollTop();

        if(verticalScroll >= 450) {

            $('.funtimes').addClass('animated bounceInDown');
        }

    });
    
    
}); 

