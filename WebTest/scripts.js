// initialize ckeditor
CKEDITOR.replace('body');

// Javascript function to copy image url to clipboard from modal
function copyUrl() {
  var copyText = document.getElementById("post_image_url");
  copyText.select();
  document.execCommand("Copy");

  // replace url with confirm message 
  $('#post_image_url').hide(1000);
  $('#feedback_msg').show();

  // hide modal after 2 seconds
  setTimeout(function(){
          $('#myModal').modal('hide');
          $('#feedback_msg').hide();
          $('#post_image_url').show();
  }, 2000);
}

$(document).ready(function(){
        // When user clicks the 'upload image' button
        $('.upload-img-btn').on('click', function(){
                
                // Add click event on the image upload input
                // field when button is clicked
                $('#image-input').click();


                $(document).on('change', '#image-input', function(e){

                        // Get the selected image and all its properties
                        var image_file = document.getElementById('image-input').files[0];

                        // Initialize the image name
                        var image_name = image_file.name;

                        
                        // determine the image extension and validate image
                        var image_extension = image_name.split('.').pop().toLowerCase();
                        if (jQuery.inArray(image_extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                                alert('That image type is not supported');
                                return;
                        } 

                        // Get the image size. Validate size
                        var image_size = image_file.size;
                        if (image_size > 3000000) {
                                alert('The image size is too big');
                                return;
                        } 


                        // Compile form values from the form to send to the server
                        // In this case, we are taking the image file which 
                        // has key 'post_image' and value 'image_file'
                        var form_data = new FormData();
                        form_data.append('post_image', image_file);
                        form_data.append('uploading_file', 1);

                        // upload image to the server in an ajax call (without reloading the page)
                        $.ajax({
                                url: 'index.php',
                                method: 'POST',
                                data: form_data,
                                contentType: false,
                                cache: false,
                                processData: false,
                                beforeSend : function(){

                                },
                                success : function(data){
                                        // how the pop up modal
                                        $('#myModal').modal('show');

                                        // the server returns a URL of the uploaded image
                                        // show the URL on the popup modal
                                        $('#post_image_url').val(data);
                                }
                        });
                });

        });
});