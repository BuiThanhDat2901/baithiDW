$(document).ready(function () {

    const name = $('input[name=name]');
    const email = $('input[name=email]');
    const phone = $('input[name=phone]');
    const feedback = $('textarea[name=feedback]');

    $('form[name=form-create]').submit(function (event) {
        event.preventDefault();

        const data = {
            name: name.val(),
            email: email.val(),
            phone: phone.val(),
            feedback: feedback.val(),
        }
        $.ajax({
            url: 'http://localhost:8888/examDW2/api/processForm.php',
            method: 'POST',
            data: JSON.stringify(data),
            success: function (response) {
                alert('Create success!');
                console.log(response.message);

            },
            error: function (response) {
                alert("Create fail!");
                console.log(response.message);
            }
        });

    });

});