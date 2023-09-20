$(document).ready(() => {
    $('.success-alert').fadeOut(5000);
})
$(document).ready(() => {
    $('.danger-alert').fadeOut(5000);
})


$('#reload-captcha').click(function() {

    $.get('/reload-captcha', function(data) {
      $('#captcha-image').attr('src', data);
    });
  
  });