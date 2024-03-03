// button action
$('.follow-form button').on('click', function () {
    var button = $(this);
    var textfollow = button.find('.text-follow-followers');
    if (button.hasClass('btn-follow-followers')) {
      button.removeClass('btn-follow-followers').addClass('btn-unfolow-followers')
      textfollow.text("Unfollow")
    }
    else{
      button.removeClass('btn-unfolow-followers').addClass('btn-follow-followers')
      textfollow.text("Follow")
      
    }
  })

//   follow process
var form = $('#followersFrom')[0];
$('.follow-form button').click(function(){
    var formId = $(this).closest('form').attr('id');
    var form = $('#' + formId)[0];

    var formData = new FormData(form);

    $.ajax({
      url:'/follow/user',
      method: 'POST',
      processData: false,
      contentType: false,
      data: formData,
      

      success: function(response){    
        // var counterFollow = parseInt($('#counter-follow').text())
        // $('#counter-follow').text(counterFollow + 1);
        console.log('follow success');

    },

      error:function(response){
          console.log('error');
      }

    });

  })