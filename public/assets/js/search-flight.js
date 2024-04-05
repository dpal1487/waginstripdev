$(document).ready(function() {

    //    If Outbound && Inbound Same

    $("#oneway-btn , #roundtrip-btn, #multicity-btn").change(function() {
        if ($("#multicity-btn").is(':checked')) {
            $("#id_deadlineCalendar").hide();
        } else if ($("#oneway-btn").is(':checked')) {
            $("#type1-deadline").css("display", "none");
            $("div.abddjd").hide();
            // $('input#type1-deadline').attr('name','').attr('value','');
            $("#onetripmsg").show();
            $("#id_deadlineCalendar").prop('disabled', true);
        } else {
            $("#type1-deadline").addClass('date-field').css("display", "block");
            $("#onetripmsg").hide();

        }
    });

    $("#checkreturnradio").click(function() {
        $("#roundtrip-btn").prop('checked', 'checked');
        $("div.abddjd").show();
        $('#oneway i').removeClass('fa-check-circle').addClass('fa-circle-o');
        $('#round i').removeClass('fa-circle-o').addClass('fa-check-circle');
        if ($("#roundtrip-btn").is(':checked')) {
            $("#type1-deadline").addClass('date-field active').css("display", "block");
            $("#onetripmsg").hide();
            $('input#type1ReturnPUT').hide().attr('name', '');
            $(".datebtncloseround").show();

        }
    });

    $(".datebtncloserounde").click(function() {
        $("#oneway-btn").prop('checked', 'checked');
        if ($("#oneway-btn").is(':checked')) {
            $("#type1-deadline").removeClass('date-field').css("display", "none");
            $("#onetripmsg").show();
            $(this).hide();
        }

    });

    $('#select2_departure').change(function() {
        $('select#select2_arrival').select2("open");

    });

    $('#select2_arrival').change(function() {
        $('#type1-start').click();
    });

    //    If Outbound && Inbound Same

    var departure = '';
    var arrival = '';
    $('#select2_arrival, #select2_arrival, #select2_departure').change(function() {

        departure = $('#select2_departure').val();

        arrival = $('#select2_arrival').val();

        if (departure == arrival) {

            $('#main-search-btn').prop('disabled', true);

            $('.city-msg').html("<small class='sameerror'><i class='fa fa-exclamation-triangle'></i>Dep & Arr airports cannot be the same</small>");

        } else {

            $('#main-search-btn').prop('disabled', false);

            $('.city-msg').empty();
        }
    });
    // if Adults && Infant Not Same

    $('#total-travller').text("1 Travelers");
    $('#cabClass').text("Premium Economy");
    $('INPUT:radio[name=noOfAdults], INPUT:radio[name=noOfChilds], INPUT:radio[name=noOfInfants], INPUT:radio[name=cabinClass]').change(function() {
        if ($(this).is(':checked') === true) {
            var valAdt = parseInt($('INPUT:radio[name=noOfAdults]:checked').val());
            // var valAdt = parseInt(optAdt.val());
            var valInf = parseInt($('INPUT:radio[name=noOfInfants]:checked').val());
            // var valInf = parseInt(optInf.val());
            var valChd = parseInt($('INPUT:radio[name=noOfChilds]:checked').val());
            // var valChd = parseInt(optChd.val()); 
            var valTotal = valAdt + valChd;

            var cabinClass = $('INPUT:radio[name=cabinClass]:checked').parent('label').text();

            var totalPass = valTotal + valInf;
            if (valTotal > 9) {
                $('#travller-btn').prop('disabled', true);

                $('.msg-travllers').html(
                    "<small class='text-danger'>More than 9 Passenger's can not travel. </small>"
                );
            } else if (valAdt < valInf) {

                $('#travller-btn').prop('disabled', true);

                $('.msg-travllers').html(
                    "<small class='text-danger'>Number of infants cannot be more than adults</small>"
                );
            } else {
                $('#travller-btn').prop('disabled', false);
                $('.msg-travllers').empty();
                $('.msg-travllers').empty();
                $('#total-travller').text(totalPass + " Travelers");
                $('#cabClass').text(cabinClass);

            }
        }
    });

    // show farey
    $('#select2_departure, #select2_arrival').on("change", function() {
        var depart = $('#select2_departure').find(':selected').text();
        var ariave = $('#select2_arrival').find(':selected').text();
        $('#resentSelct').hide();
        $('#resentSelct2').html("Looking for the cheapest return flights from " + depart + " to " + ariave + " ?");
    });

    $('input:radio[name=trip-type]').change(function() {
        if ($(this).val() == 'oneway') {
            $('#round i').removeClass('fa-check-circle').addClass('fa-circle-o');
            $('#oneway i').removeClass('fa-circle-o').addClass('fa-check-circle');
            $('#multic i').removeClass('fa-check-circle').addClass('fa-circle-o');
            $('input#type1ReturnPUT').hide();
        } else if ($(this).val() == 'roundtrip') {
            $('#oneway i').removeClass('fa-check-circle').addClass('fa-circle-o');
            $('#round i').removeClass('fa-circle-o').addClass('fa-check-circle');
            $('#multic i').removeClass('fa-check-circle').addClass('fa-circle-o');
            // $('input#type1-deadline').hide();
            $('input#type1ReturnPUT').show();
        } else if ($(this).val() == 'multicity') {
            $('#oneway i').removeClass('fa-check-circle').addClass('fa-circle-o');
            $('#round i').removeClass('fa-check-circle').addClass('fa-circle-o');
            $('#multic i').removeClass('fa-circle-o').addClass('fa-check-circle');
        }
    });




});

let cookieContainer = document.querySelector(".cookie-container");
let cookieButton = document.querySelector(".cookie-btn");
if (cookieButton) {
    cookieButton.addEventListener("click", function() {
        cookieContainer.classList.remove("active");
        localStorage.setItem("cookieBannerDisplayed", "true");
        cookies.setItem("maketruetrip.com", "true");
    });
}
setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("active");
    }
}, 2000);