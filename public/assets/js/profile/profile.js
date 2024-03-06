// follow
const button_follow_profile = document.getElementById('button-follow-profile')
const follow_icon = document.getElementById('follow-icon')

if (button_follow_profile !== null) {
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
}


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



// load photo post
var page = 1; 
var loading = false;
var uuid = window.uuid;


// Fungsi untuk memuat foto
function loadPhotosByUser() {
    if (!loading) {
        loading = true;
        $.ajax({
            url: '/load-more-photos-user', 
            type: 'get',
            data: {
              'page' : page,
              'uuid' : uuid
            },
            success: function(response) {
                if(response.data.length > 0) {
                    response.data.forEach(function(image) {
                        $('#posts_user').append('<a href="/explore/show=' + image.uuid + '"><img src="assets/img/img-e/'+ image.file_location + '" alt=""></a>');
                    });
                    page++; 
                    loading = false;
                }
            }
        });
    }
}


loadPhotosByUser();
$(window).on('scroll resize', function() {
    if ($(window).scrollTop() + $(window).height() >= $(document).height() * 0.9) {
        loadPhotosByUser();
    }
});

