<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>   
          <style>
          .select2-container--default .select2-selection--single {
                            display: block;
                            padding: 5px;
                            color: #495057;
                            background-color: #fff;
                            background-clip: padding-box;
                            border: 1px solid #ced4da;
                            border-radius: 0.25rem;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                        }

                        .select2-container--default .select2-selection--single .select2-selection__rendered {
                            line-height: 1.5;
                        }

                        .select2-container--default .select2-selection--single {
                            font-size: 16px;
                            font-weight: 400;
                            width: 170px;
                            height: calc(1.5em + 0.75rem + 2px);
                        }

        </style>
        <div class="row" >
            <div class="container">
                <div class="card fadshoww">
                    <div class="card-header fnt20">
                        <i class="fa fa-user-circle-o"></i>
                        <span class="spaceicon">Traveller Details </span>
                    </div>

                  

                    @php
                        use App\Http\Controllers\Airline\AirportiatacodesController;
                        use App\Models\Country;
                        
                        $originCountry = AirportiatacodesController::getCountry($originCountry);
                        $destinationCountry = AirportiatacodesController::getCountry($destinationCountry);
                    @endphp

                    {{-- Adults Form Section Start --}}
                    
                    @for ($i = 1; $i <= $travellers['noOfAdults']; $i++)
                    
                        <div class="container pb-10">
                            <div class="searchtitle pt-10 pb-10">ADULT</div>
                            <div id="adult-section{{ $i }}" class="pt-10 pb-10">
                                <div class="card fadshoww">
                                    <div class="card-body">
                                        {{-- <div data-toggle="collapse" data-target="#demo{{$i}}">
                                          <input type="checkbox"
                                              class="form-check-input checkboxx" value="" />
                                          <span class="font-20 marginleft-30"> Mr First Name
                                              Last Name</span>
                                          <span class="float-right font-20">
                                              <i class="fa fa-arrow-circle-down"
                                                  aria-hidden="true"></i>
                                          </span>
                                      </div> --}}
                                        {{-- <div id="demo{{$i}}" class="collapse pt-20"> --}}
                                        
                                        <div id="adult-body{{ $i }}" class="pt-20">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <span class="searchtitle"> Title
                                                        </span>
                                                        <select name="adultTitle[]"
                                                            class="form-control adultTitle{{ $i }}" required>
                                                            <option value="" selected disabled>Select</option>
                                                            <option value="Mr">MR</option>
                                                            <option value="MS">MS</option>
                                                            <option value="MRS">Mrs</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div>
                                                    <input type="hidden" name="adultGender[]" class="adultGender{{ $i }}"  value="" />
                                                </div>

                                                <script>
                                                    $(document).ready(function() {
                                                        
                                                        $('.adultTitle{{ $i }}').change(function() {
                                                                var title = $(".adultTitle{{ $i }} option:selected").val();
                                                                if (title === "MR") {
                                                                    $(".adultGender{{ $i }}").val("Male");
                                                                } else if (title === "MS") {
                                                                    $(".adultGender{{ $i }}").val("Female");
                                                                } else if (title === "MRS") {
                                                                    $(".adultGender{{ $i }}").val("Female");
                                                                }
                                                        });
                                                    });
                                                </script>
                                               
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <span class="searchtitle">
                                                            First Name & (middle name, if any)
                                                        </span>
                                                        <input type="text" name="adultFirstName[]"
                                                            class="form-control" placeholder="First Name" required
                                                            data-parsley-pattern="^[a-z A-Z]+$" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <span class="searchtitle">Last Name
                                                        </span>
                                                        <input type="text" name="adultLastName[]" class="form-control"
                                                            placeholder="Last Name" data-parsley-minlength="3"
                                                            data-parsley-pattern="^[a-z A-Z]+$" required />
                                                    </div>
                                                    <span class="b-10 float-right" data-toggle="collapse"
                                                        data-target="#Frequentflyer{{ $i }}"
                                                        style="font-size: 10px;"><i class="fa fa-plus"
                                                            aria-hidden="true"></i>
                                                        Frequent flyer number and Meal preference (optional)</span>
                                                </div>
                                            </div>
                                                @if ($originCountry != $destinationCountry)
                                                <div class="row " style="display: flex; align-items: end;">  
                                                    <div class="col-sm-3" style="margin-top: 24px;">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                Nationality
                                                            </span>
                                                            <select name="adultNationality[]"
                                                                class="form-control Nationality" required>
                                                                <option value="IN" selected >India</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <!--<div class="form-group" style="margin-top: 24px; margin-left: 56px;">-->
                                                        <!--    <span class="searchtitle">-->
                                                        <!--        DOB (MM/DD/YYYY)-->
                                                        <!--    </span>-->
                                                        <!--    <input type="date" name="adultDOB[]" class="form-control"-->
                                                        <!--        placeholder="DOB (MM/DD/YYYY)" min="1945-01-01" max="2012-01-01" required />-->
                                                        <!--</div>-->
                                                        <span class="searchtitle">DOB(MM/DD/YYYY)</span>
                                                        
                                                        <div class="pexpiryflexdiv form-group d-flex">
                                                            <select onchange="setdob('{{$i}}');set_date_range(this.value , '{{$i}}');" id="dob_month{{$i}}" class="pt-1 pb-1">
                                                                <!--<option value="0">Month</option>-->
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                            <select onchange="setdob('{{$i}}')" id="dob_day{{$i}}" class="pt-1 pb-1">
                                                                <!--<option>Day</option>-->
                                                                @for($m = 1; $m <= 31; $m++)
                                                                    @if($m < 10)
                                                                        <option value="{{$m}}">{{$m}}</option>
                                                                    @else
                                                                        <option value="{{$m}}">{{$m}}</option>
                                                                    @endif
                                                                @endfor
                                                            </select>
                                                           <?php
                                                                $hun_years = date('Y' , strtotime("-100 years"));
                                                                $cuur_year = date('Y');
                                                           ?>
                                                            <select onchange="setdob('{{$i}}')" id="dob_year{{$i}}" class="pt-1 pb-1">
                                                                <!--<option value="0">Year</option>-->
                                                                @for($l = $hun_years; $l <= $cuur_year; $l++)
                                                                    <option value="{{$l}}">{{$l}}</option>
                                                                @endfor
                                                            </select>
                                                            <input type="hidden" name="adultDOB[]" value="{{$hun_years}}-01-01" id="dob_actual{{$i}}" required />

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <span class="searchtitle">Passport Expiry Date</span>
                                                        <div class="pexpiryflexdiv form-group d-flex">
                                                            <select onchange="setexpiry('{{$i}}');set_date_range_expiry(this.value , '{{$i}}');" id="pass_month{{$i}}" class="pt-1 pb-1">
                                                                <!--<option value="0">Month</option>-->
                                                                <option value="01">January</option>
                                                                <option value="02">February</option>
                                                                <option value="03">March</option>
                                                                <option value="04">April</option>
                                                                <option value="05">May</option>
                                                                <option value="06">June</option>
                                                                <option value="07">July</option>
                                                                <option value="08">August</option>
                                                                <option value="09">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                            <select onchange="setexpiry('{{$i}}')" id="pass_day{{$i}}" class="pt-1 pb-1">
                                                                <!--<option>Day</option>-->
                                                                @for($l = 1; $l <= 31; $l++)
                                                                    @if($l < 10)
                                                                        <option value="0{{$l}}">0{{$l}}</option>
                                                                    @else
                                                                        <option value="{{$l}}">{{$l}}</option>
                                                                    @endif
                                                                @endfor
                                                            </select>
                                                            <?php
                                                                $curr =  date('Y');
                                                                $plus_10 = date('Y' , strtotime("+10 years"));
                                                            ?>
                                                            <select id="pass_year{{$i}}" onchange="setexpiry('{{$i}}')" class="pt-1 pb-1">
                                                                <!--<option value="0">Year</option>-->
                                                                @for($j = $curr; $j <= $plus_10; $j++)
                                                                    <option value="{{$j}}">{{$j}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                        
                                                        <!--<div class="form-group">-->
                                                        <!--    <span class="searchtitle">-->
                                                        <!--        Passport Expiry Date (MM/DD/YYYY)-->
                                                        <!--    </span>-->
                                                        <!--    <input type="date" name="adultPED[]" class="form-control"-->
                                                        <!--        placeholder="Expiry Date (MM/DD/YYYY)"  required />-->
                                                        <!--</div>-->
                                                    <input type="hidden" id="pass_actual{{$i}}" value="{{$curr}}-01-01" name="adultPED[]" >
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                Passport Issuing Country
                                                            </span>
                                                            <select name="adultIssuingCountry[]"
                                                                class="form-control IssuingCountry" required>
                                                                <option value="IN" selected >India</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                Passport Number
                                                            </span>
                                                            <input type="text" name="adultPassportNo[]"
                                                                class="form-control" placeholder="Passport Number"
                                                                required />
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            
                                        </div>
                                        <div id="adult-frequent{{ $i }}" class="collapse">
                                            <div class="row">
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <span class="searchtitle">Frequent Flyer no. </span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Frequent flyer no." />
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <span class="searchtitle">
                                                            Airline
                                                        </span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Airline" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <span class="searchtitle"> Meal
                                                            Preference </span>
                                                        <select name="" class="form-control">
                                                            <option value="Select Meal Preference">
                                                                Select Meal Preference
                                                            </option>
                                                            <option value="Vegetarian Hindu Meal">
                                                                Vegetarian Hindu Meal
                                                            </option>
                                                            <option value="Baby Meal">Baby
                                                                Meal
                                                            </option>
                                                            <option value="Hindu ( Non Vegetarian) Meal">
                                                                Hindu ( Non Vegetarian) Meal
                                                            </option>
                                                            <option value="Kosher Meal">
                                                                Kosher
                                                                Meal</option>
                                                            <option value="Moslem Meal">
                                                                Moslem
                                                                Meal</option>
                                                            <option value="Vegetarian Jain Meal">
                                                                Vegetarian Jain Meal
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="pt-10">
                              <button type="button" class="btn btn-sm btn-outline-secondary"
                                  onclick="addSection(this)">
                                  <i class="fa fa-plus" aria-hidden="true"></i> Add ADULT
                              </button>
                          </div> --}}
                        </div>
                    @endfor
                    {{-- Adults Form Section End --}}
                    <div class="borderbotum"></div>
                    {{-- Childs Form Section Start --}}
                    @if ($travellers['noOfChilds'] > 0)
                        @for ($i = 1; $i <= $travellers['noOfChilds']; $i++)
                            <div class="container pb-10">
                                <div class="searchtitle pt-10 pb-10">CHILD</div>
                                <div id="child-section" class="pt-10 pb-10">
                                    <div class="card fadshoww">
                                        <div class="card-body">
                                            {{-- <div data-toggle="collapse" data-target="#demo">
                                          <input type="checkbox"
                                              class="form-check-input checkboxx"
                                              value="" />
                                          <span class="font-20 marginleft-30"> Mr
                                              First Name
                                              Last Name</span>
                                          <span class="float-right font-20">
                                              <i class="fa fa-arrow-circle-down"
                                                  aria-hidden="true"></i>
                                          </span>
                                      </div> --}}
                                            {{-- <div id="demo" class="collapse pt-20"> --}}
                                            <div id="child-body" class="pt-20">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <span class="searchtitle"> Title
                                                            </span>
                                                            <select name="childTitle[]" class="form-control" required>
                                                                <option value="" hidden>Title</option>
                                                                <option value="MISS">Miss</option>
                                                                <option value="MSTR">Master</option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <input type="hidden" name="childGender[]" class="childGender{{ $i }}"  value="" />
                                                        </div>
                                                        <script>
                                                            $(document).ready(function() {
        
                                                                $('.childTitle{{ $i }}').change(function() {
                                                                        var title = $(".childTitle{{ $i }} option:selected").val();
                                                                        if (title === "MSTR") {
                                                                            $(".childGender{{ $i }}").val("Male");
                                                                        } else if (title === "MISS") {
                                                                            $(".childGender{{ $i }}").val("Female");
                                                                        } 
                                                                });
                                                            });
                                                        </script>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                First Name & (middle name, if any)
                                                            </span>
                                                            <input type="text" name="childFirstName[]"
                                                                class="form-control" placeholder="First Name"
                                                                required />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <span class="searchtitle"> Last
                                                                Name
                                                            </span>
                                                            <input type="text" name="childLastName[]"
                                                                class="form-control" placeholder="Last Name"
                                                                data-parsley-minlength="3"
                                                                data-parsley-pattern="^[a-z A-Z]+$" required />
                                                        </div>
                                                        <span class="b-10 float-right" data-toggle="collapse"
                                                            data-target="#Frequentflyer" style="font-size: 10px;"><i
                                                                class="fa fa-plus" aria-hidden="true"></i>
                                                            Frequent flyer number and Meal preference (optional)</span>
                                                    </div>
                                                    @php
                                                        $toDay = date('y-m-d');
                                                        $minDate = date('Y-m-d', strtotime($jurneyDate . ' -4020 days'));
                                                        $maxDate = date('Y-m-d', strtotime($toDay . ' -721 days'));
                                                        // dd($maxDate) ;
                                                    @endphp
                                                    <div class="col-sm-6 offset-col-sm-6">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                DOB (MM-DD-YYYY)
                                                            </span>
                                                            <input type="date" name="childDOB[]" class="form-control"
                                                                placeholder="DOB (MM/DD/YYYY)" min="<?php echo $minDate; ?>"
                                                                max="<?php echo $maxDate; ?>"
                                                                data-parsley-required-message="Please enter Child DOB"
                                                                required />
                                                        </div>
                                                    </div>
                                                    @if ($originCountry != $destinationCountry)
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <span class="searchtitle">
                                                                    Nationality
                                                                </span>
                                                                <select name="childNationality[]"
                                                                    class="form-control Nationality">
                                                                    <option value="IN" selected >India</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <span class="searchtitle">
                                                                    Passport Expiry Date (MM/DD/YYYY)
                                                                </span>
                                                                <input type="date" name="childPED[]"
                                                                    class="form-control"
                                                                    placeholder="Expiry Date (MM/DD/YYYY)" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <span class="searchtitle">
                                                                    Passport Issuing Country
                                                                </span>
                                                                <select name="childIssuingCountry[]"
                                                                    class="form-control Nationality">
                                                                    <option value="IN" selected >India</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="form-group">
                                                                <span class="searchtitle">
                                                                    Passport No
                                                                </span>
                                                                <input type="text" name="childPassportNo[]"
                                                                    class="form-control" placeholder="Passport Number" />
                                                            </div>
                                                        </div>
                                                        
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="child-frequent" class="collapse">
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                Frequent flyer no. </span>
                                                            <input type="text" class="form-control"
                                                                placeholder="Frequent flyer no." />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                Airline
                                                            </span>
                                                            <input type="text" class="form-control"
                                                                placeholder="Airline" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                Meal
                                                                Preference </span>
                                                            <select name="" class="form-control">
                                                                <option value="Select Meal Preference">
                                                                    Select Meal Preference
                                                                </option>
                                                                <option value="Vegetarian Hindu Meal">
                                                                    Vegetarian Hindu Meal
                                                                </option>
                                                                <option value="Baby Meal">
                                                                    Baby
                                                                    Meal
                                                                </option>
                                                                <option value="Hindu ( Non Vegetarian) Meal">
                                                                    Hindu ( Non Vegetarian)
                                                                    Meal
                                                                </option>
                                                                <option value="Kosher Meal">
                                                                    Kosher
                                                                    Meal</option>
                                                                <option value="Moslem Meal">
                                                                    Moslem
                                                                    Meal</option>
                                                                <option value="Vegetarian Jain Meal">
                                                                    Vegetarian Jain Meal
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="pt-10">
                                  <button type="button"
                                      class="btn btn-sm btn-outline-secondary"
                                      onclick="addSection(this)">
                                      <i class="fa fa-plus" aria-hidden="true"></i> Add
                                      CHILD
                                  </button>
                              </div> --}}
                            </div>
                        @endfor
                    @endif
                    <div class="borderbotum"></div>
                    {{-- Childs Form Section End --}}
                    @if ($travellers['noOfInfants'] > 0)
                        @for ($i = 1; $i <= $travellers['noOfInfants']; $i++)
                            <div class="container pb-10">
                                <div class="searchtitle pt-10 pb-10">INFANTS</div>
                                <div id="infant-section" class="pt-10 pb-10">
                                    <div class="card fadshoww">
                                        <div class="card-body">
                                            {{-- <div data-toggle="collapse" data-target="#demo">
                                                    <input type="checkbox"
                                                        class="form-check-input checkboxx"
                                                        value="" />
                                                    <span class="font-20 marginleft-30"> Mr
                                                        First Name
                                                        Last Name</span>
                                                    <span class="float-right font-20">
                                                        <i class="fa fa-arrow-circle-down"
                                                            aria-hidden="true"></i>
                                                    </span>
                                                </div> --}}
                                            {{-- <div id="infants{{$i}}" class="collapse pt-20"> --}}
                                            <div id="infants-body{{ $i }}" class="pt-20">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <span class="searchtitle"> Title
                                                            </span>
                                                            <select name="infantTitle[]" class="form-control"
                                                                required>
                                                                <option value="" hidden>Title</option>
                                                                <option value="MISS">Miss</option>
                                                                <option value="MSTR">Master</option>
                                                            </select>
                                                        </div>

                                                        <div>
                                                            <input type="hidden" name="infantGender[]" class="infantGender{{ $i }}"  value="" />
                                                        </div>
        
                                                        <script>
                                                            $(document).ready(function() {
        
                                                                $('.infantTitle{{ $i }}').change(function() {
                                                                        var title = $(".infantTitle{{ $i }} option:selected").val();
                                                                        if (title === "MSTR") {
                                                                            $(".infantGender{{ $i }}").val("Male");
                                                                        } else if (title === "MISS") {
                                                                            $(".infantGender{{ $i }}").val("Female");
                                                                        } 
                                                                });
                                                            });
                                                        </script>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                First Name & (middle name, if any)
                                                            </span>
                                                            <input type="text" name="infantFirstName[]"
                                                                class="form-control" placeholder="First Name"
                                                                required data-parsley-minlength="3"
                                                                data-parsley-pattern="^[a-z A-Z]+$" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <span class="searchtitle"> Last
                                                                Name
                                                            </span>
                                                            <input type="text" name="infantLastName[]"
                                                                class="form-control" placeholder="Last Name"
                                                                data-parsley-minlength="3"
                                                                data-parsley-pattern="^[a-z A-Z]+$" required />
                                                        </div>
                                                        <span class="b-10 float-right" data-toggle="collapse"
                                                            data-target="#Frequentflyer" style="font-size: 10px;"><i
                                                                class="fa fa-plus" aria-hidden="true"></i>
                                                            Frequent flyer number and Meal
                                                            preference
                                                            (optional)</span>
                                                    </div>
                                                    @php
                                                        $toDay = date('y-m-d');
                                                        $minDate = date('Y-m-d', strtotime($jurneyDate . ' -720 days'));
                                                        $maxDate = date('Y-m-d', strtotime($toDay . ' -1 days'));
                                                        // dd($maxDate) ;
                                                    @endphp
                                                    <div class="col-sm-6 offset-col-sm-6">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                DOB (MM-DD-YYYY)
                                                            </span>
                                                            <input type="date" name="infantDOB[]"
                                                                class="form-control" placeholder="DOB (MM/DD/YYYY)"
                                                                min="<?php echo $minDate; ?>" max="<?php echo $maxDate; ?>"
                                                                data-parsley-required-message="Please enter Infant DOB"
                                                                required />
                                                        </div>
                                                    </div>
                                                    @if ($originCountry != $destinationCountry)
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <span class="searchtitle">Nationality</span>
                                                                <select name="infantNationality[]"
                                                                    class="form-control Nationality">
                                                                    <option value="IN" selected >India</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <span class="searchtitle">
                                                                    Passport Expiry Date (MM/DD/YYYY)
                                                                </span>
                                                                <input type="date" name="infantPED[]"
                                                                    class="form-control"
                                                                    placeholder="Expiry Date (MM/DD/YYYY)" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <span class="searchtitle">Passport Issuing
                                                                    Country</span>
                                                                <select name="infantIssuingCountry[]"
                                                                    class="form-control Nationality">
                                                                    <option value="IN" selected >India</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <span class="searchtitle">
                                                                    Passport No
                                                                </span>
                                                                <input type="text" name="infantPassportNo[]"
                                                                    class="form-control"
                                                                    placeholder="Passport Number" />
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="infants-frequent{{ $i }}" class="collapse">
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                Frequent
                                                                flyer no. </span>
                                                            <input type="text" class="form-control"
                                                                placeholder="Frequent flyer no." />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                Airline
                                                            </span>
                                                            <input type="text" class="form-control"
                                                                placeholder="Airline" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <span class="searchtitle">
                                                                Meal
                                                                Preference </span>
                                                            <select name="" class="form-control">
                                                                <option value="Select Meal Preference">
                                                                    Select Meal Preference
                                                                </option>
                                                                <option value="Vegetarian Hindu Meal">
                                                                    Vegetarian Hindu Meal
                                                                </option>
                                                                <option value="Baby Meal">
                                                                    Baby
                                                                    Meal
                                                                </option>
                                                                <option value="Hindu ( Non Vegetarian) Meal">
                                                                    Hindu ( Non Vegetarian)
                                                                    Meal
                                                                </option>
                                                                <option value="Kosher Meal">
                                                                    Kosher
                                                                    Meal</option>
                                                                <option value="Moslem Meal">
                                                                    Moslem
                                                                    Meal</option>
                                                                <option value="Vegetarian Jain Meal">
                                                                    Vegetarian Jain Meal
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="pt-10">
                                       <button type="button"
                                          class="btn btn-sm btn-outline-secondary"
                                          onclick="addSection(this)">
                                          <i class="fa fa-plus" aria-hidden="true"></i> Add
                                          INFANT
                                      </button> 
                                  </div> --}}
                            </div>
                        @endfor
                    @endif

                    <div class="container pb-10">
                        <div class="searchtitle pt-10 pb-10">Contact Details</div>
                        <div id="adult-section{{ $i }}" class="pt-10 pb-10">
                            <div class="card fadshoww">
                                <div class="card-body">
                                    {{-- <div data-toggle="collapse" data-target="#demo{{$i}}">
                                      <input type="checkbox"
                                          class="form-check-input checkboxx" value="" />
                                      <span class="font-20 marginleft-30"> Mr First Name
                                          Last Name</span>
                                      <span class="float-right font-20">
                                          <i class="fa fa-arrow-circle-down"
                                              aria-hidden="true"></i>
                                      </span>
                                  </div> --}}
                                    {{-- <div id="demo{{$i}}" class="collapse pt-20"> --}}
                                    <div id="adult-body{{ $i }}" class="pt-20">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="searchtitle"> Country Code</label><br>
                                                    <select name="countryCode{{ $i }}"
                                                        class="countryCode" required>
                                                        <option value="+91" selected >India(+91)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <label class="searchtitle">
                                                        Mobile
                                                    </label>
                                                    <input type="text" name="phoneNumber" class="form-control"
                                                        placeholder="Enter Mobile" required data-parsley-type='number'
                                                        data-parsley-maxlength="10" data-parsley-minlength="10" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="searchtitle"> Email</label>
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Enter Email" required data-parsley-type='email' />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="adult-frequent{{ $i }}" class="collapse">
                                        <div class="row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <span class="searchtitle">
                                                        Frequent Flyer no. </span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Frequent flyer no." />
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <span class="searchtitle">
                                                        Airline
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Airline" />
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <span class="searchtitle"> Meal Preference </span>
                                                    <select name="" class="form-control">
                                                        <option value="Select Meal Preference">
                                                            Select Meal Preference
                                                        </option>
                                                        <option value="Vegetarian Hindu Meal">
                                                            Vegetarian Hindu Meal
                                                        </option>
                                                        <option value="Baby Meal">Baby
                                                            Meal
                                                        </option>
                                                        <option value="Hindu ( Non Vegetarian) Meal">
                                                            Hindu ( Non Vegetarian) Meal
                                                        </option>
                                                        <option value="Kosher Meal">
                                                            Kosher
                                                            Meal</option>
                                                        <option value="Moslem Meal">
                                                            Moslem
                                                            Meal</option>
                                                        <option value="Vegetarian Jain Meal">
                                                            Vegetarian Jain Meal
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="pt-10">
                          <button type="button" class="btn btn-sm btn-outline-secondary"
                              onclick="addSection(this)">
                              <i class="fa fa-plus" aria-hidden="true"></i> Add ADULT
                          </button>
                      </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-10">
           {{--Commented by jagdish <a id="travller-btn" type="submit" name="traveller-bnt" class="btn btn-primary continueres-btn">
                CONTINUE </a> end comment--}}
                
                
                <button   type="submit" name="traveller-bnt" class="btn btn-primary continueres-btn" style="width: 100%;">
                CONTINUE </button>
        </div>

        <script>
            function set_date_range(val , row){
                var year = $("#dob_year"+row).val();
                var month = $("#dob_month"+row).val();
                if(val &&  year != '' && year != 0){
                    var str = year+'-'+month;
                    console.log(month); console.log(year);
                    var days = new Date(year, month, 0).getDate();
                    var html = '';
                    console.log(days);
                    for(var i = 1; i<= parseInt(days); i++){
                        html += '<option value="'+i+'">'+i+'</option>';
                    }
                    if(html !=''){
                        console.log(html);
                        console.log($("#dob_day"+row).val());
                        $("#dob_day"+row).html(html);
                    }
                }
            }
            function setdob(row){
                var year = $("#dob_year"+row).val();
                var month = $("#dob_month"+row).val();
                var date = $("#dob_day"+row).val();
                var value = '';
                if(year != '' && month != '' && date != '' && year != undefined && date != undefined && month != undefined){  
                    value += year+'-'+month+'-'+date;
                    $("#dob_actual"+row).val(value);
                }
                if(value != ''){
                    
                }
            }
            function set_date_range_expiry(val , row){
                var year = $("#pass_year"+row).val();
                var month = $("#pass_month"+row).val();
                if(val &&  year != '' && year != 0){
                    var str = year+'-'+month;
                    console.log(month); console.log(year);
                    var days = new Date(year, month, 0).getDate();
                    var html = '';
                    console.log(days);
                    for(var i = 1; i<= parseInt(days); i++){
                        html += '<option value="'+i+'">'+i+'</option>';
                    }
                    if(html !=''){
                        console.log(html);
                        console.log($("#pass_day"+row).val());
                        $("#pass_day"+row).html(html);
                    }
                }
            }
            function setexpiry(row){
                var year = $("#pass_year"+row).val();
                var month = $("#pass_month"+row).val();
                var date = $("#pass_day"+row).val();
                var value = '';
                if(year != '' && month != '' && date != '' && year != undefined && date != undefined && month != undefined){  
                    value += year+'-'+month+'-'+date;
                    $("#pass_actual"+row).val(value);
                }
                if(value != ''){
                    
                }
            }            
            $(document).ready(function() {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $(".countryCode").select2({
                    ajax: {
                        url: "/api/country-code",
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            return {
                                _token: CSRF_TOKEN,
                                search: params.term // search term
                            };
                        },
                        processResults: function(response) {
                            return {
                                results: response
                            };
                        },
                        cache: true
                    }
                });


                $(".Nationality, .IssuingCountry").select2({
                    ajax: {
                        url: "/api/country-iso",
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            return {
                                _token: CSRF_TOKEN,
                                search: params.term // search term
                            };
                        },
                        processResults: function(response) {
                            return {
                                results: response
                            };
                        },
                        cache: true
                    }
                });
                
                const datePicker = document.getElementById("datepicker");
               const currentDate = new Date();
                const futureDate = new Date(currentDate.getFullYear() + 10, currentDate.getMonth(), currentDate.getDate());
               const formattedDate = futureDate.toISOString().substring(0, 10);
               datePicker.value = formattedDate;
               datePicker.min = currentDate.toISOString().substring(0, 10);
               datePicker.max = futureDate.toISOString().substring(0, 10);
                
                // Use datepicker on the date inputs
                // $("input[type=date]").datepicker({
                //   dateFormat: 'dd-mm-yy',
                //   changeMonth: true
                //   onSelect: function(dateText, inst) {
                //     $(inst).val(dateText); // Write the value in the input
                //   }
                // });
                
                // // Code below to avoid the classic date-picker
                // $("input[type=date]").on('click', function() {
                //   return false;
                // });
            })
        </script>
