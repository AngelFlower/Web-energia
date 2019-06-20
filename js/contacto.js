
function send_formu(){
    var url = "localhost:8000/api/customer";
    /*
    var email = document.getElementById('email');
    var name = document.getElementById('InputName');
    var lastname = document.getElementById('InputLastName');
    var subject = document.getElementById('InputSubject');
    var description = document.getElementById('InputDescription');
    var name = document.getElementById('InputName');
    var confirmed_news= 1;
    var client_app_id = 1;

    var crsfToken = $('#token').val();
    /
    var param = {
        '_token'  : $('#token').val(),
        'userid': $(this).children('.clientName').val()
    };

    $.ajax({
        url     :  "{{route('questionDetail')}}",
        type    :  'post',
        dataType:  'json',
        data    :   param,
        success :   function (data) {
            alert('send');
        },
        error   :   function() {
            alert('error');
        }
    });

    */
   $.ajaxSetup({headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content')}  })
   $.ajax({
    url: url,
    type: 'POST',            
    data: { "email": "asdasd"},            
    success: function (response) {
        if(!response.error){
            console.log(response.msg);                    
        } else {
            console.log(response.msg);                    
        }
    }
});

}