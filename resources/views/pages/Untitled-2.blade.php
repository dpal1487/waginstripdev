<div class="card content-hotel" id="accordion">
    <div class="card-header" id="headingOne">
        <div class="fontsizehotel14">ROOMS 1 </div>
        <div class="fnt10">ADULTS 1</div>
        <button type="button" class="btn btn-sm btn-primary float-right htlarrowclass"
            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
            aria-controls="collapseOne">
            <i class="fa fa-arrow-down"></i>
        </button>
    </div>
    <input type="hidden" name="room" value="1">
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
        data-parent="#accordion">
        <div class="fnt10">ADULTS(12y+)</div>
        <div class="card">
            <div class="card-body">
                <label class="rdocon bshadow">
                    <input type="radio" checked="checked" name="adult"
                        value="1">
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
                    <input type="radio" checked="checked" name="child"
                        value="0">
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
        <div class="fnt10">CHILREN(2y - 12y)</div>
        <div class="card">
            <div class="card-body">
                <label class="rdocon">
                    <input type="radio" checked="checked" name="child"
                        value="0">
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


    <div class="input_fields_wrap"> </div>
    <div class="card-footer clearfix">
        <button type="button"
            class="btn btn-sm btn-outline-primary float-left add_field_button"> + ADD
            ANOTHER
            ROOM</button>
        <button type="button" onclick="togglePopupHotel()"
            class="btn-sm btn-primary float-right">
            Done </button>
    </div>
</div>