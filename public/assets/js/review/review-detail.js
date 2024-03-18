$(document).ready(function () {
    
    // follow un follow style
        $('#followReview').on('click', function() {
            if ($('#followReview').hasClass('btn-follow-review')) {
                $('#followReview').removeClass('btn-follow-review').addClass('btn-unfollow-review')
                $('#follow-icon').removeClass('bi-person-plus-fill').addClass('bi-person-x-fill')
                $('#follow-text').text('Unfollow');
            }
            else{
                $('#followReview').removeClass('btn-unfollow-review').addClass('btn-follow-review')
                $('#follow-icon').removeClass('bi-person-x-fill').addClass('bi-person-plus-fill')
                $('#follow-text').text('Follow');
            }
        });

    // follow functuon
    var followFromReview = $('#formFollowReview')[0];
    $('#followReview').on('click', function(){

        var formData = new FormData(followFromReview)

        $.ajax({
            url:'/follow/user',
            method: 'POST',
            processData: false,
            contentType: false,
            data: formData
        });

    })



})