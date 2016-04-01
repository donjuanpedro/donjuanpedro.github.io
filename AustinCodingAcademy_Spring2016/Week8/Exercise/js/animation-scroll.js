$(document).ready(function () {
    
    $(window).scroll(function () {
        
        var verticalScroll = $(this).scrollTop();
        
        if (verticalScroll >= 200) {
            
            $('.my_sandwich').addClass('animated flip');
            
        }
        
        console.log(verticalScroll);
        
    });
                     
    $(window).scroll(function () {
        
        var verticalScroll = $(this).scrollTop();
        
        if (verticalScroll >= 1000) {
            
            $('#my_1').addClass('animated flip');
            $('#my_1').removeClass('hide_me');
            $('#my_2').addClass('animated flip');
            $('#my_2').removeClass('hide_me');
            $('#my_3').addClass('animated flip');
            $('#my_3').removeClass('hide_me');
            $('#my_4').addClass('animated flip');
            $('#my_4').removeClass('hide_me');
            
        }
        
        
    });
    
    $(window).scroll(function () {
        
        var verticalScroll = $(this).scrollTop();
        
        if (verticalScroll >= 1300) {
            
            $('.my_shake').addClass('animated flip');
            
        }
    });
    
});