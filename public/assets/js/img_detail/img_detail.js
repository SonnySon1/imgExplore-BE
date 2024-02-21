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
var formFollowDetail = $('#followFormDetail')[0];
$('#button-follow-imgdetail').click(function(){
      
    var formData = new FormData(formFollowDetail);

    $.ajax({
      url:'/follow/user',
      method: 'POST',
      processData: false,
      contentType: false,
      data: formData,

      error:function(response){
          console.log('error');
      }

    });

})


  // favorite
  $('#btn-favorite').on('click', function () {
    if ($('#btn-favorite').hasClass('bi-star')) {
      $('#btn-favorite').removeClass('bi-star').addClass('bi-star-fill')
      
    }
    else{
      $('#btn-favorite').removeClass('bi-star-fill').addClass('bi-star')
    }

  })


  var formFavorite = $('#formFavorite')[0];
  $('#btn-favorite').click(function(){
        
      var formData = new FormData(formFavorite);

      $.ajax({
        url:'/profile/favorite/store',
        method: 'POST',
        processData: false,
        contentType: false,
        data: formData,
  
        error:function(response){
            console.log('error');
        }
      });
  
    })




    

    // like
    $('#btn-like').on('click', function () {
      var counterLike = parseInt($('#btn-like').text())

      if ($('#btn-like').hasClass('bi-hand-thumbs-up')) {
        $('#btn-like').removeClass('bi-hand-thumbs-up').addClass('bi-hand-thumbs-up-fill')
        $('#btn-like').text(counterLike + 1)
      }
      else{
        $('#btn-like').removeClass('bi-hand-thumbs-up-fill').addClass('bi-hand-thumbs-up')
        $('#btn-like').text(counterLike - 1)
      }
  
    })
    
  var formLike = $('#formLike')[0];
  $('#btn-like').click(function(){
        
      var formData = new FormData(formLike);

      $.ajax({
        url:'/explore/like/store',
        method: 'POST',
        processData: false,
        contentType: false,
        data: formData,
  
        error:function(response){
            console.log('error');
        }
  
      });
  
    })


