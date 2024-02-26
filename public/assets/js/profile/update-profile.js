document.getElementById("picture").addEventListener("change", function(e) {
    var output_image = document.getElementById("output_image");
    var reader = new FileReader();
    reader.onload = function(){
        // output_image.classList.remove('display-none-image-upload');
        var output = document.getElementById('output_image');
        output.src = reader.result;
    }
    reader.readAsDataURL(e.target.files[0]);
});