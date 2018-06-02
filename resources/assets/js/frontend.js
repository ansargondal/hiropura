$(document).ready(function () {

    new WOW().init();

    $('header .navbar-nav').localScroll();
    $('footer .container .row a').localScroll();

    $('#categories_list li ul li').click(function () {
        var list_value = $(this).text();
        $('#categories_list li a.dropdown-toggle').html(list_value + "<span class='glyphicon glyphicon-arrow-down'></span>");
        $('#categories_field').val(list_value);

        $('#intro_section form').submit();

    });


    /*rules carousel settings*/

    $('#my_carousel').carousel({
        pause: true,
        interval: false
    });


    $('#create_ad_modal form button').click(function (evt) {
        evt.preventDefault();

        if ($('#agree_checkbox').is(':checked')) {
            $('#create_ad_modal .rules_container').slideUp();
            $('#create_ad_modal .ad_post_container').slideDown();
        }
        else {
            $('#create_ad_modal p.error').slideDown();
        }


    });

    $('[data-toggle="popover"]').popover();

    $('#ad_post_categories_list li ul li').click(function () {
        var list_value = $(this).text();
        $('#ad_post_categories_list li a.dropdown-toggle').html(list_value + "<span class='glyphicon glyphicon-arrow-down'></span>");
        $('#ad_post_categories_field').val(list_value);
    });


    $('#sign_up_form button').click(function (evt) {
        evt.preventDefault();

        if ($('#password').val() == "" || $('#confirm_password').val() == "") {
            $('#sign_up_form p.error').text('Password Must Not Be Empty');
            $('#sign_up_form p.error').slideDown();
        }

        else if ($('#password').val() === $('#confirm_password').val()) {
            $('#sign_up_form').submit();
        }
        else {
            $('#sign_up_form p.error').text('Your Password Doesn\'t Match.');
            $('#sign_up_form p.error').slideDown();
        }
    });

    $('#toggle_sidebar').click(function () {

        $('#main_content').toggleClass('sidebar_activated');

    });

   
    $('#post_categories_list li ul li').click(function () {
        var list_value = $(this).text();
        $('#post_categories_list li a.dropdown-toggle').html(list_value + "<span class='glyphicon glyphicon-arrow-down'></span>");
        $('#post_categories_field').val(list_value);
    });


});

window.onload = function () {

    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        let target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
};
