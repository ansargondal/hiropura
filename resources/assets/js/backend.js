$('#toggle_sidebar').click(function () {

    $('#main_content').toggleClass('sidebar_activated');


    $('#privileges_list li ul li').click(function () {
        var list_value = $(this).text();
        $('#privileges_list li a.dropdown-toggle').html(list_value + "<span class='glyphicon glyphicon-arrow-down'></span>");
        $('#privileges_field').val(list_value);


    });


    $('#edit_privileges_list li ul li').click(function () {
        var list_value = $(this).text();
        $('#edit_privileges_list li a.dropdown-toggle').html(list_value + "<span class='glyphicon glyphicon-arrow-down'></span>");
        $('#edit_privileges_field').val(list_value);


    });

    $('#add_admin_modal button[type="submit"]').click(function (evt) {
        evt.preventDefault();

        if ($('#password').val() == "" || $('#confirm_password').val() == "") {
            $('#add_admin_modal p.error').text('Password Must Not Be Empty');
            $('#add_admin_modal p.error').slideDown();
        }

        else if ($('#password').val() === $('#confirm_password').val()) {
            $('#add_admin_modal form').submit();
        }
        else {
            $('#add_admin_modal p.error').text('Your Password Doesn\'t Match. ');
            $('#add_admin_modal p.error').slideDown();
        }
    });
});