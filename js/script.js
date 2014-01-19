function sethero (){
    var screenh = $(window).height();
    var screenw = $(window).width();
    if (screenw > 780) {
        $(".hero-unit").css("height", screenh);
        $(".hero-unit").css("margin-bottom", "0");
    } else {
        $(".hero-unit").css("height", "auto");
        $(".hero-unit").css("margin-bottom", "5em");
    }
};

function smoothscroll(){
    
};

$(document).ready( function(){
    sethero();
     $("#more").click(function() {
        var the_id = $(this).attr("href");  
        $('html, body').animate({scrollTop:($(the_id).offset().top)-60}, 'slow');  
        return false;
     });
    
    var toggle_on= false;
    $("#about-toggle").click(function() {
        if (toggle_on == false) {
            $("#about-toggle li").text("Close X");
            toggle_on = true;
        } else {
            $("#about-toggle li").text("UX What ?");
            toggle_on = false;
        }                     
        $('#about-box-content').animate({height: "toggle"}, 320);
    });
    
    $("#nav-toggle").click(function() {
        $('#nav-content').animate({height: "toggle"}, 280);
    });
});

$(window).resize(sethero);