// script.js

$(document).ready(function() {
    $('#profile_picture').change(function() {
        var input = this;
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.profile-picture-preview').html('<img src="' + e.target.result + '">');
        };
        reader.readAsDataURL(input.files[0]);
    });
});
