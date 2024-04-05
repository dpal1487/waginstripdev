 $(document).ready(function () {
    var gtotalOut;
    var gtotalIn;
    $('INPUT:radio[name="outbound-flights"]').change(function () {
        if ($(this).is(':checked') === true) {
            var row = $(this).closest('.row');
            // var col = row.parent().children().index(row);
            var flight = row.find('.ob-flight').html();
            var depTime = row.find('.ob-dep-time').text();
            var depLocation = row.find('.ob-dep-location').text();
            var durAndLoc = row.find('.ob-dur-loc').html();
            var arrTime = row.find('.ob-arr-time').text();
            var arrTocation = row.find('.ob-arr-location').text();
            var fare = row.find('.ob-fare').text();
            var formDate = row.find('.ob-form-data').html();
        }
        // Data Display On the Page -- ---
        $(".out-bound-data").html("<div class='row'>" +
            "<div class='col-2 col-md-2 col-sm-2'>" + flight + "</div>" +
            "<div class='col-2 col-md-2 col-sm-2 mt-2 text-center'>" +
            "<div class='onwfnt-16 ob-dep-time'>" + depTime + "</div>" +
            "<div class='onwfnt-14 ob-dep-location'>" + depLocation + "</div>" +
            "</div>" +
            "<div class='col-3 col-md-3 col-sm-3 mt-2 text-center'>" + durAndLoc + "</div>" +
            "<div class='col-2 col-md-2 col-sm-2 mt-2 text-center'>" +
            "<div class='onwfnt-16 ob-arr-time'>" + arrTime + "</div>" +
            "<div class='onwfnt-14 ob-arr-location'>" + arrTocation + "</div>" +
            "</div>" +
            "<div class='col-3 col-md-3 col-sm-3 mt-2 bor'>" +
            "<div class='onwfnt-16 ob-fare'>{!! $icon !!}" + fare + "</div>" +
            "<span class='onwfnt-11 text-right'>Details</span>" +
            "<span class='onwfnt-11'>" + formDate + "</span>" +
            "</div>" +
            "</div>");

        gtotalOut = parseInt(fare);

        var total = gtotalOut + gtotalIn;

        $('.total-fare').html("Total {!! $icon !!}" + total);


    });
    setTimeout(function () {
        $('INPUT:radio[name="outbound-flights"]:first').trigger('click');
    }, 2000);
    $('INPUT:radio[name="inbound-flights"]').change(function () {
        if ($(this).is(':checked') === true) {
            var row = $(this).closest('.row');
            // var col = row.parent().children().index(row);
            var flight = row.find('.ib-flight').html();
            var depTime = row.find('.ib-dep-time').text();
            var depLocation = row.find('.ib-dep-location').text();
            var durAndLoc = row.find('.ib-dur-loc').html();
            var arrTime = row.find('.ib-arr-time').text();
            var arrTocation = row.find('.ib-arr-location').text();
            var fare = row.find('.ib-fare').text();
            var formDate = row.find('.ib-form-data').html();
        }
        // Data Display On the Page -- ---
        $(".in-bound-data").html("<div class='row'>" +
            "<div class='col-2 col-md-2 col-sm-2'>" + flight + "</div>" +
            "<div class='col-2 col-md-2 col-sm-2 mt-2 text-center'>" +
            "<div class='onwfnt-16 ob-dep-time'>" + depTime + "</div>" +
            "<div class='onwfnt-14 ob-dep-location'>" + depLocation + "</div>" +
            "</div>" +
            "<div class='col-3 col-md-3 col-sm-3 mt-2 text-center'>" + durAndLoc + "</div>" +
            "<div class='col-2 col-md-2 col-sm-2 mt-2 text-center'>" +
            "<div class='onwfnt-16 ob-arr-time'>" + arrTime + "</div>" +
            "<div class='onwfnt-14 ob-arr-location'>" + arrTocation + "</div>" +
            "</div>" +
            "<div class='col-3 col-md-3 col-sm-3 mt-2 bor'>" +
            "<div class='onwfnt-16 ob-fare'>{!! $icon !!}" + fare + "</div>" +
            "<span class='onwfnt-11 text-right'>Details</span>" +
            "<span class='onwfnt-11'>" + formDate + "</span>" +
            "</div>" +
            "</div>");

        gtotalIn = parseInt(fare);

        var total = gtotalOut + gtotalIn;

        $('.total-fare').html("Total {!! $icon !!}" + total);


    });
    setTimeout(function () {
        $('INPUT:radio[name="inbound-flights"]:first').trigger('click');
    }, 2000);
});