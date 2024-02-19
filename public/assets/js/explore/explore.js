var page = 1; 
var loading = false;

// Fungsi untuk memuat foto
function loadPhotos() {
    if (!loading) {
        loading = true;
        $.ajax({
            url: '/load-more-photos-explore?page=' + page, 
            type: 'get',
            success: function(response) {
                if(response.data.length > 0) {
                    response.data.forEach(function(image) {
                        $('#image-wrapper').append('<a href="/explore/show=' + image.uuid + '"><img src="/assets/img/img-e/' + image.file_location +'"></a>');
                    });
                    page++; 
                    loading = false;
                }
            }
        });
    }
}


loadPhotos();
$(window).on('scroll resize', function() {
    if ($(window).scrollTop() + $(window).height() >= $(document).height() * 0.9) {
        loadPhotos();
    }
});
