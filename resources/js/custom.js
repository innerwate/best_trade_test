
$(document).ready(function () {
    $('.show_more_button').click(function (e) {
        $(this).parent('.crud_buttons').siblings('.options').toggleClass('hide');
    })
    $('.delete_btn').click(function (e) {
        let product_id = $(this).attr('data-id');
        let url = '/delete/'+product_id;
        $.ajax({
            type: "DELETE",
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: product_id,
            success: function (data) {
                if (data.message === 'Successfully') {
                  
                    if (!alert('Product was successfully deleted')) {
                        window.location.reload();
                    }
                }
                else {
                    alert('Something wrong');
                }
            }
        });
    })
   
    $("#createForm").submit(function (e) {
        e.preventDefault();
        var form = $(this)[0];
        var formData = new FormData(form);
        var url = form.action;
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            url: url,
            data: formData,
            success: function (data) {
                if (data.message === 'Success') {
                    alert('Product was successfully created')
                }
                else {
                    alert('Something wrong');
                }
            }
        });
    });
    $("#updateForm").submit(function (e) {
        e.preventDefault();
        var form = $(this)[0];
        var formData = new FormData(form);
        var url = form.action;
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            url: url,
            data: formData,
            success: function (data) {
                if (data.message === 'Success') {
                    alert('Product was successfully updated')
                }
                else {
                    alert('Something wrong');
                }
            }
        });
    });
})
