
$(document).ready(function(){
    $("#createForm").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this)[0];
       
        var formData = new FormData(form);
        var url = form.action;
       
        $.ajax({
               type: "POST",
               processData: false,
            contentType: false,
               url: url,
               data:  formData, // serializes the form's elements.
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
