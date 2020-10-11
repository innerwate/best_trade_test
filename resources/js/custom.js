
$(document).ready(function(){
    $('.show_more_button').click(function(e){
        $(this).parent('.crud_buttons').siblings('.options').toggleClass('hide');
    })
    $("#createForm").submit(function(e) {
        e.preventDefault(); 
        var form = $(this)[0];
       
        var formData = new FormData(form);
        var url = form.action;
       
        $.ajax({
               type: "POST",
               processData: false,
            contentType: false,
               url: url,
               data:  formData, 
               success: function(data)
               {
                  if(data.message === 'Success'){
                      alert('Product was successfully created')
                  }
                  else{
                      alert('Something wrong');
                  }
               }
             });
    });
})
