$(function () { 
    $(window).scroll(function () {
        if ($(this).scrollTop() > 70) { 
            $('.navbar .navbar-brand img').attr('src','content/img/logo-small.png');
        }
        if ($(this).scrollTop() < 70) { 
            $('.navbar .navbar-brand img').attr('src','content/img/logo.png');
        }
    })
})