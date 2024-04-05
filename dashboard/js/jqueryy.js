$(function () {
  setTimeout(function () {
    $('.alert').fadeOut('slow');
  }, 5000);


  $('#showpass').click(function () {
    $('#passwordSection').show();
    $('#profilePage').hide();
  });




});


$(document).ready(function () {

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  // $('#HotelForm').submit(function(e){
  //   e.preventDefault();

  //   var data = $(this).serialize();
  //   console.log(data);
  //   var url = "posthotel_offer";

  //   $.ajax({
  //     url:url,
  //     method:'POST',
  //     data:data,
  //     success:function(response){
  //       $("#HotelOffer .close").click();
  //       $('.hotelbtn').hide();
  //       $('#hotelID').show();
  //     },
  //     error:function(error){
  //        console.log(error)
  //     }
  //  });
  // });


  var maxField = 5;
  var wraper = $(".add_field");
  var add_button = $(".add_field_btn");

  var x = 1;
  $(add_button).click(function () {
    // e.preventDefault();
    if (x < maxField) {
      $(wraper).append(`
      <div id="exfld">
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <label for="email"> Summry :</label>
                    <input type="text" class="form-control" placeholder="Summry" name="summry[]" required>
                </div>
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-sm btn-danger remove_field_btn" style="margin-top: 35px;">
                  <i class="fa fa-trash"></i>
                </button>
            </div>
        </div>
      </div>
    `);
      x++;
    }
  });

  $(wraper).on("click", ".remove_field_btn", function () {
    // e.preventDefault(); 
    $("#exfld").remove();
    x--;
  });

  $("select#tripType").change(function(){
    var tripval = $(this).val();
    if(tripval == "roundtrip"){
      $('div#roundTrip').show();
    } else {
      $('div#roundTrip').hide();
    }
  });

  


});


$(document).ready(function () {
  $('.js-example-basic-single').select2();
});