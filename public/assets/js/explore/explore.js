$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return decodeURI(results[1]) || 0;
    }
}

var page = 1; 
var loading = false;
var category = $.urlParam('category');
var search = $.urlParam('search');
var url = '/load-more-photos-explore?page=' + page + (category ? '&category=' + category : '') + (search ? '&search=' + search : ''); 

// Fungsi untuk memuat foto
function loadPhotos() {
    if (!loading) {
        loading = true;
        $.ajax({
            url: url, 
            type: 'get',
            success: function(response) {
                if(response.data.length > 0) {
                    response.data.forEach(function(image) {
                        $('#image-wrapper').append('<a href="/explore/show=' + image.uuid + '"><img src="/assets/img/img-e/' + image.file_location +'"></a>');
                    });
                    page++; 
                    url = '/load-more-photos-explore?page=' + page + (category ? '&category=' + category : '') + (search ? '&search=' + search : '');
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


// search
// $('#btn-search').on('click', function(){

//     var formDataSearch = new FormData(form);

//     $.ajax({
//         url:'/load-more-photos-explore',
//         type: 'GET',
//         data: {
//             formDataSearch,
//             page
//         },
//         success: function(response) {
//             if(response.data.length > 0) {
                
//                 $('#image-wrapper').empty();

//                 response.data.forEach(function(image) {
//                     $('#image-wrapper').append('<a href="/explore/show=' + image.uuid + '"><img src="/assets/img/img-e/' + image.file_location +'"></a>');
//                 });
                
//                 page++; 
//                 loading = false;
//             }   
//         },

//         error:function(response){
//             console.log('error');
//         }
  
//       });

// })