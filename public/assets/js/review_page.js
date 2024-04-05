    $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
       $.ajax({
            type: "GET",
            url:  "/api/geolocationinfo",
            dataType: 'json',
            data: "",
            success: function (data) {
                 if (data.code == 200) {
                     var icon = data.icon;
                     var icon_inr = data.icon_inr;
                     if(icon.trim() != icon_inr.trim()){
                        $("#boxunder").css('display' , 'none');                         
                     }
                }
            },
            complete: function () {
            },
            error: function () {
            }
        });            
    });