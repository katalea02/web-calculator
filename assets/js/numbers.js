$(document).ready(function(){
    var counter = 0;
    $('.digits').on('click', function(){
       if (counter % 2 == 0) {
           $("input[type='number'][name='number1']").val($(this).html());
           counter++;
       } else {
           $("input[type='number'][name='number2']").val($(this).html());
           counter++;
       }
    });

    var value = $('.result').text();
    if(value.trim() == '' || value == null ) {
        $('.result').hide();
    }

});