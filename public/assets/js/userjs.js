jQuery(function ($) {
  $(".sidebar-dropdown > a").click(function () {
    $(".sidebar-submenu").slideUp(200);
    if (
      $(this)
        .parent()
        .hasClass("active")
    ) {
      $(".sidebar-dropdown").removeClass("active");
      $(this)
        .parent()
        .removeClass("active");
    } else {
      $(".sidebar-dropdown").removeClass("active");
      $(this)
        .next(".sidebar-submenu")
        .slideDown(200);
      $(this)
        .parent()
        .addClass("active");
    }
  });

  $("#close-sidebar").click(function () {
    $(".page-wrapper").removeClass("toggled");
  });
  $("#show-sidebar").click(function () {
    $(".page-wrapper").addClass("toggled");
  });

  // //update gender
  // $('#GENDER').change(function(){
  //   // e.preventDefault();
  //   var _token = $('meta[name="csrf-token"]').attr('content');
  //   var id = $('#id').val();
  //   var gen = $(this).val();
  //   var URL = "/profile/gender/update";
  //   $.ajax({
  //       url: URL,
  //       type: 'POST',
  //       data: {_token:_token, id:id, gen:gen},
  //       success:function(data){
  //         swal("Gender!", "changed successfully!", "success").then(function(){
  //           location.reload();
  //         });          
  //       },        
  //       error:function(){
  //         swal("Wrong!", "Any error", "error");
  //       }
  //   });
  // });


  // $('#updatePro').submit(function(e){
  //   e.preventDefault();
  //   var formData = $(this).serialize();
  //   // var _token = $('meta[name="csrf-token"]').attr('content');
  //   // var id = $('#id').val();
  //   // var name = $('#name').val();
  //   // var phone = $('#phone').val();
  //   // var img = $('#fileInput').val();
  //   var URL = "/profile/all/update";
  //   $.ajax({
  //     headers: {
  //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //       },
  //     url:URL,
  //     type:'POST',
  //     data:formData,
  //     // data: {_token:_token,id:id, name:name, phone:phone, img:img},
  //     success:function(data){
  //       // console.log(data);
  //       alert('Right')
  //     },
  //     error:function(){
  //       alert('Wrong');
  //     }
  //   });
  // });

  $('#showpass').click(function(){
    $('#passwordSection').show();
    $('#profilePage').hide();
  });

});