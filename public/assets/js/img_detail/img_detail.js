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



    // ----comment-----

    // submit non active
    $(document).ready(function() {
      $('#input-comment').keydown(function(event) {
          if (event.key === 'Enter') {
              event.preventDefault(); 
          }
      });
  });
  
    
  // submit form comment
  $('#input-comment').on('input', function () {
    if ($(this).val().trim().length > 0) {
        $('#btn-submit-icon').removeClass('nonacive-input');
    } else { 
        $('#btn-submit-icon').addClass('nonacive-input');
    }
});

$('#btn-sumbit-comment').click(function() {
  if ($('#input-comment').val().trim().length > 0) {
      var formData = new FormData(formComment);

      $.ajax({
          url:'/explore/comment/store',
          method: 'POST',
          processData: false,
          contentType: false,
          data: formData,
          success: function(response) {
              $('#input-comment').val("");
              $('#input-comment').attr("placeholder", $('#input-comment').attr('placeholder'));
          },
          error: function(response) {
              console.log('error');
          }
      });
  }
});

// time to text
function timeAgo(timestamp){
  const commentDate = moment(timestamp, 'YYYY-MM-DD HH:mm:ss').tz('Asia/Jakarta');
  return commentDate.fromNow();
}


var page = 1; 
var loading = false;

// Fungsi untuk memuat foto
function loadComment() {
    if (!loading) {
        loading = true;
        $.ajax({
            url: '/load-more-comment-explore', 
            type: 'get',
            data: {
              'page' : page,
              'photo' : photo_uuid
            },
            success: function(response) {
                if(response.data.length > 0) {
                    response.data.forEach(function(comment) {
                      const  timestamp = comment.created_at
                      const formattedTime = timeAgo(timestamp);

                        $('#comment-body').append('<div class="comment-body"><div class="image-comment-container"><img class="image-comment" src="/assets/img/profile/'+ comment.user.picture +'" alt=""></div><div class="comment-card-nody"><div><div class="comment-text-head"><h4>Senzi</h4><p class="time-comment">'+ formattedTime +'</p></div><p class="comment-text">'+ comment.body_comment +'</p></div></div></div>');
                    });
                    page++; 
                    loading = false;
                    
                }   
            }
        });
    }
}

$(document).ready(function(){
  loadComment();
  $(window).on('scroll resize', function() {
      if ($(window).scrollTop() + $(window).height() >= $(document).height() * 0.9) {
          loadComment();
      }
  });
})


