$(document).ready(function () {
    $('.radio-btn-outbound').change(function () {
        if ($(this).is(':checked') === true) {
            var row = $(this).closest('.row');

            var outform = row.find(".outbound-form-data-display").html();

            var outseg = row.find(".outbound-segment-data").html();

            var outbag = row.find(".outbound-bagg-data").html();

            var rowkey = $(row).attr('id');

            $('form[name='+ rowkey +'] .outbound_form_datas').html(outform); 

            $('#round-trip-Information'+ rowkey+' .segment-outbound').html(outseg);

            $('#round-trip-Baggage'+ rowkey+' .segment-bagg-outbound').html(outbag);

        }
    });


    $('.radio-btn-inbound').change(function () {
        if ($(this).is(':checked') === true) {
            var row = $(this).closest('.row');

            var rowkey = $(row).attr('id');

            var inform = row.find(".inbound-form-data-display").html();

            var inseg = row.find(".inbound-segment-data").html();

            var inbag = row.find(".inbound-bagg-data").html();

            $('form[name='+ rowkey +'] .inbound_form_datas').html(inform);

            $('#round-trip-Information'+ rowkey+' .segment-inbound').html(inseg);

            $('#round-trip-Baggage'+ rowkey+' .segment-bagg-inbound').html(inbag);


        }
    });
});
