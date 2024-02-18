$(window).scroll(function(){
    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
        $.ajax({
                'url' : '/load-more-photos-explore',
                'type' : 'GET',
                success: function(response) {
                    response.data.forEach(function(image){
                        $('.image-container').append('<a href="/explore/show='+image.uuid+'"><img src="assets/img/img-e/' + image.file_location +'"></a>')
                    })
            }
        }
    )}
});