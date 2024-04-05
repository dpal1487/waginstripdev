$(document).ready(function () {
    var max_fields = 8; //maximum input boxes allowed
    var wrapper = $(".input_fields_wrap"); //Fields wrapper
    var add_button = $(".add_field_button"); //Add button ID

    var x = 2; //initlal text box count
    $(add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            //text box increment
            $(wrapper).append(`
            <div id="exfld">
            <div class="card-header" id="headingRoom`+ x +`">
            <div class="fontsizehotel14"> <button type="button" class="btn btn-sm btn-danger remove_field" style="font-size: 10px;"> <i class="fa fa-trash"></i> </button> | ROOMS `+ x +` </div>
            <div class="fnt10">ADULTS 1</div>
                <button type="button" class="btn btn-sm btn-primary float-right htlarrowclass collapsed" data-toggle="collapse"
                    data-target="#collapseRoom`+ x +`" aria-expanded="false" aria-controls="collapseRoom`+ x +`">
                    <i class="fa fa-arrow-down"></i>
                </button>
            </div>
            <div id="collapseRoom`+ x +`" class="collapse" aria-labelledby="headingRoom`+ x +`"
                data-parent="#accordion">
                <div class="fnt10">ADULTS(12y+)</div>
                <div class="card">
                    <div class="card-body">
                        <label class="rdocon bshadow">
                            <input type="radio" name="adult" value="1">
                            <span class="checkmark">1</span>
                        </label>
                        <label class="rdocon bshadow">
                            <input type="radio" name="adult" value="2">
                            <span class="checkmark">2</span>
                        </label>
                        <label class="rdocon bshadow">
                            <input type="radio" name="adult" value="3">
                            <span class="checkmark">3</span>
                        </label>
                        <label class="rdocon bshadow">
                            <input type="radio" name="adult" value="4">
                            <span class="checkmark">4</span>
                        </label>
                        <label class="rdocon bshadow">
                            <input type="radio" name="adult" value="5">
                            <span class="checkmark">5</span>
                        </label>
                        <label class="rdocon bshadow">
                            <input type="radio" name="adult" value="6">
                            <span class="checkmark">6</span>
                        </label>
                        <label class="rdocon bshadow">
                            <input type="radio" name="adult" value="7">
                            <span class="checkmark">7</span>
                        </label>
                        <label class="rdocon bshadow">
                            <input type="radio" name="adult" value="8">
                            <span class="checkmark">8</span>
                        </label>
                    </div>
                </div>
                <div class="fnt10">CHILREN(2y - 12y)</div>
                <div class="card">
                    <div class="card-body">
                        <label class="rdocon">
                            <input type="radio" name="child" value="0">
                            <span class="checkmark">0</span>
                        </label>
                        <label class="rdocon">
                            <input type="radio" name="child" value="1">
                            <span class="checkmark">1</span>
                        </label>
                        <label class="rdocon">
                            <input type="radio" name="child" value="2">
                            <span class="checkmark">2</span>
                        </label>
                        <label class="rdocon">
                            <input type="radio" name="child" value="3">
                            <span class="checkmark">3</span>
                        </label>
                        <label class="rdocon">
                            <input type="radio" name="child" value="4">
                            <span class="checkmark">4</span>
                        </label>
                    </div>
                </div>
            </div>       
            </div>
        `); //add input box
            x++;
        }
    });

    $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
        e.preventDefault(); $('#exfld').remove(); x--;
    })
});

function togglePopupHotel() {
    $(".content-hotel").toggle();
}