var loading = false;

$(window).scroll(function() {
    if (!loading && $(window).scrollTop() + $(window).height() >= $(document).height() * 0.9) {
        loading = true;
        $.ajax({
            url: '/load-more-photos-explore',
            type: 'get',
            success: function(response) {
                response.data.forEach(function(image) {
                    $('#image-wrapper').append('<a href=""><img src="/assets/img/img-e/' + image.file_location +'"></a>');
                });
                loading = false;
            }
        });
    }
});
