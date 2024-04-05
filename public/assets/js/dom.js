//for apend flag of country.

function formatState(state) {
    console.log(state);
    if (!state.id) {
        return state.text;
    }
    var baseUrl = "admin/images/flags";
    var $state = $(
        '<span><img src="' + baseUrl + '/' + state.contryflage.toLowerCase() + '.png"  class="img-flag" /> ' + state.text + '</span>'
    );
    return $state;
};


$(function () {
    $("#itemSearch").select2({
        minimumInputLength: 2,
        templateResult: formatState, //this is for append country flag.
        ajax: {
            url: URL,
            dataType: 'json',
            type: "POST",
            data: function (term) {
                return {
                    term: term
                };
            },
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name + ', ' + item.state.name + ', ' + item.state.coutry.name,
                            id: item.id,
                            contryflage: item.state.coutry.sortname
                        }
                    })
                };
            }

        }
    });
});