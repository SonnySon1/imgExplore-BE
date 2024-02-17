// follow
const button_follow_profile = document.getElementById('button-follow-profile')
const follow_icon = document.getElementById('follow-icon')

button_follow_profile.addEventListener('click', function(){
    if (button_follow_profile.classList.contains('follow-menu-profile-follow')) {
        follow_icon.classList.remove('bi-person-x-fill')
        button_follow_profile.classList.remove('follow-menu-profile-follow')
        follow_icon.classList.add('bi-person-plus-fill')
        button_follow_profile.classList.add('follow-menu-profile')
    }
    else{
        button_follow_profile.classList.remove('follow-menu-profile')
        button_follow_profile.classList.add('follow-menu-profile-follow')

        follow_icon.classList.remove('bi-person-plus-fill')
        follow_icon.classList.add('bi-person-x-fill')
    }
});


var form = $('#followForm')[0];
$('#button-follow-profile').click(function(){
      
    var formData = new FormData(form);
    formData.append('user', $('#data_user').val());

    $.ajax({
      url:'/follow/user',
      method: 'POST',
      processData: false,
      contentType: false,
      data: formData,
      

      success: function(response){    
        // var counterFollow = parseInt($('#counter-follow').text())
        // $('#counter-follow').text(counterFollow + 1);
    },

      error:function(response){
          console.log('error');
      }

    });

  })