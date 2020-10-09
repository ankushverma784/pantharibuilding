//side bar toogle
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
    	$('#sidebar').toggleClass('active');
    })
});


// data tables
$(document).ready( function () {
	$('#userdatatables').DataTable();

} );


$(document).ready( function () {
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            $('.addimage').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
      }

      $(".uploadprofile").change(function() {
        readURL(this);
      });
});

  function pageRedirect() {
      window.location.href = "mover-profile.php";
    };

    function pageRedirect2() {
      window.location.href = "customer-profile.php";
    };

    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
      console.log( editor );
    } )
    .catch( error => {
      console.error( error );
    } );
