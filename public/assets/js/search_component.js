$(document).ready(function() {
    $(window).on("load", function() {
        var triptype = "{{ $segments['triptype'] }}";
        var departDate = "{{ $segments['departDate'] }}";
        var returnDate = "{{ $segments['returnDate'] }}";
        var cabinClass = "{{ $segments['cabinClass'] }}";
        var Adult = parseInt($('input:hidden#travelsnoOfAdults').val());
        var child = parseInt($('input:hidden#travelsnoOfChilds').val());
        var Infrant = parseInt($('input:hidden#travelsnoOfInfants').val());
        var totalPass = Adult + child + Infrant;
        if (triptype == 'oneway') {
            $("#oneway-btn").prop('checked', 'checked');
            if ($("#oneway-btn").is(':checked')) {
                $("#type1-deadline").removeClass('date-field').css("display", "none");
                $("#onetripmsg").show();
                $(this).hide();
                $('#round i').removeClass('fa-check-circle').addClass('fa-circle-o');
                $('#oneway i').removeClass('fa-circle-o').addClass('fa-check-circle');
            }
        } else if (triptype == 'roundtrip') {
            $('input:text#type1-deadline').hide();
            $('input:text#type1-deadline').attr('value', '').attr('name', '');
            $('input:text#type1ReturnPUT').show().attr('value', returnDate);

            $('input#type1ReturnPUT').click(function() {
                $(this).hide().attr('name', '');
                $('input#type1-deadline').show().attr('name', 'returnDate')
            });
        }
        $('input:text#type1Start').hide();
        $('input:text#type1Start').attr('value', '').attr('name', '');
        $('input:text#type1StartPUT').show().attr('value', departDate);
        //    $('#ABCD').show();
        $('input:radio#putTravelClass').prop('checked', 'checked').attr('value', cabinClass);
        $('#total-travller').text(totalPass + " Travelers");
        var cabinClassmatch = $("INPUT:radio[name=cabinClass][value=" + cabinClass + "]").parent(
            'label').text();
        $('#cabClass').text(cabinClassmatch);

    });

    $('input#type1StartPUT').click(function() {
        $(this).hide();
        $('input#type1StartPUT').attr('name', '');
        $('input#type1Start').show().attr('name', 'departDate');

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
            $('span#onetripmsg').hide();
            $('input:text#type1ReturnPUT').show().attr('value', returnDate);
        } else if ($(this).val() == 'multicity') {
            $('#oneway i').removeClass('fa-check-circle').addClass('fa-circle-o');
            $('#round i').removeClass('fa-check-circle').addClass('fa-circle-o');
            $('#multic i').removeClass('fa-circle-o').addClass('fa-check-circle');
        }
    });
});