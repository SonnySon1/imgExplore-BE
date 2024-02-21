// follow button
const buttonFollowImgDetail = document.getElementById('button-follow-imgdetail');
const icon_follow_img_detail = document.getElementById('icon-follow-img-detail');
const follow_text_imgdetail = document.getElementById('follow-text-imgdetail');

buttonFollowImgDetail.addEventListener('click', function(){
    if (buttonFollowImgDetail.classList.contains('btn-follow-imgDetail')) {
        buttonFollowImgDetail.classList.remove('btn-follow-imgDetail')
        buttonFollowImgDetail.classList.add('btn-donefollow-imgDetail')
        follow_text_imgdetail.textContent = "Unfollow"
        icon_follow_img_detail.classList.remove('bi-person-plus-fill')
        icon_follow_img_detail.classList.add('bi-person-x-fill')
    }
    else{
        buttonFollowImgDetail.classList.remove('btn-donefollow-imgDetail')
        buttonFollowImgDetail.classList.add('btn-follow-imgDetail')
        follow_text_imgdetail.textContent = "Follow"
        icon_follow_img_detail.classList.remove('bi-person-x-fill')
        icon_follow_img_detail.classList.add('bi-person-plus-fill')
    }
})

// follow function
var form = $('#followFormDetail')[0];
$('#button-follow-imgdetail').click(function(){
      
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


  // like
  $('#btn-favorite').on('click', function () {
    if ($('#btn-favorite').hasClass('bi-star')) {
      $('#btn-favorite').removeClass('bi-star').addClass('bi-star-fill')
    }
    else{
      $('#btn-favorite').removeClass('bi-star-fill').addClass('bi-star')
    }

  })


  var form = $('#formFavorite')[0];
  $('#btn-favorite').click(function(){
        
      var formData = new FormData(form);

      $.ajax({
        url:'/profile/favorite/store',
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