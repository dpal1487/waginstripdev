@extends('layouts.master')
@section('title', 'Wagnistrip')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
@section('body')
@php
    use App\Models\Agent\Agent;
    $Agent = Session()->get("Agent");
    if($Agent != null){
        $mail = $Agent->email;
        $Agent = Agent::where('email', '=', $mail)->first();
        $Charge = 50;
    }else{
        $Charge = 177;
    }
    $icon = !empty(__('common.'.$code)) ? __('common.'.$code) : '';
    $icon_inr = !empty(__('common.INR')) ? __('common.INR') : '';
@endphp
    <!-- DESKTOP VIEW START -->
  
    <section class="bgcolor pt-6p"> 
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-4 col-sm-6">
                    <span class="h22">Review your booking</span>
                </div>
                <div class="col-8 col-md-8 col-sm-6">
                    <div class="progress">
                        <div class="progress-bar bg-success border-right" style="width:25%">
                            Flight selected
                        </div>
                        <div class="progress-bar bg-success border-right" style="width:25%">
                            Review
                        </div>
                        <div class="progress-bar bg-light text-dark border-right" style="width:25%">
                            Traveller Details
                        </div>
                        <div class="progress-bar bg-light text-dark" style="width:25%">
                            Make Payment
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                {{-- Fare Rules Section Start --}}
                <div class="col-sm-4 pt-20">
                    <h5 class="responsivetexttitle">Fare Summary</h5>
                    @if ($travellers['noOfAdults'] != 0 && $travellers['noOfChilds'] == 0 && $travellers['noOfInfants'] == 0)
                        {{-- Data at Start --}}
                        <div class="boxunder p-2">
                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Base Fare
                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">
                                        {{ ($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['PaxType']??''). '(' . ($travellers['noOfAdults']??'') . 'X' }} 
                                        {!! $icon !!}
                                        {{ (ceil($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['BaseFare']*$cvalue)??'') . ')' }}
                                    </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}
                                        @if(isset($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]))
                                        {{ ((int) ceil(($travellers['noOfAdults'] * (int) $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['BaseFare'])*$cvalue) ?? '') ?? ''}}</span>
                                        @else
                                        {{ ((int) ceil(($travellers['noOfAdults'] * (int) $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'])*$cvalue) ?? '') ?? ''}}</span>
                                        @endif
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Fee & Surcharges
                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">Total Fee & Surcharges : </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}
                                        @if(isset($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]))
                                        {{ (int) ceil(($travellers['noOfAdults'] * (int) ($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['TotalTax']+$Charge))*$cvalue)??'' }}</span>
                                        @else
                                        {{ (int) ceil(($travellers['noOfAdults'] * (int) $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo']+$Charge)*$cvalue) ??'' }}</span>
                                       @endif
                                </div>
                                
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Other Services
                                </div>
                                
                                <div  class="collapse show">
                                    <div class="form-check ">
                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                      <label class="form-check-label" for="flexCheckChecked">
                                        Charity 
                                      </label>
                                    <span class="float-right fontsize-17">{!! $icon !!} <span id="ChaAm">10</span></span>
                                    </div>
                                </div>
                            <div class="border-bottom"></div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">Discount </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}  <span id="DisAm">0</span></span>
                                </div>
                            <div class="border-bottom"></div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">Convenience fee </span>
                                    <span class="float-right fontsize-17">{!! $icon !!} 0</span>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="owstitle pb-10" data-toggle="collapse" data-target="#price1">
                                    <span class="fontsize-22"> Total Amount</span>
                                    <span class="fontsize-22 float-right"> {!! $icon !!}
                                        @if(!isset($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]))
                                          <script>window.location = "/Flight-not-available";</script>
                                          <?php exit; ?>
                                        @endif
                                        @php 
                                            if(!isset($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0])){
                                              echo `<script>window.location = "/Flight-not-available";</script>`;
                                              exit;
                                            }
                                            $total_fare = (($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['Total']['Fare'])+((int) $travellers['noOfAdults']*$Charge));
                                        @endphp
                                        <span id="TotalFare">
                                        {{ ceil(($total_fare+10)*$cvalue) }}
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                    @elseif($travellers['noOfAdults'] != 0 && $travellers['noOfChilds'] != 0 &&
                        $travellers['noOfInfants'] == 0)
                        {{-- Data start --}}
                        <div class="boxunder p-2">

                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Base Fare</div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">
                                        {{ $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['PaxType'] . '(' . $travellers['noOfAdults'] . 'X' }}
                                        {!! $icon !!}
                                        {{ ceil($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['BaseFare']*$cvalue) . ')' }}
                                    </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}
                                        {{ (int) ceil(($travellers['noOfAdults'] * (int) $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['BaseFare'])*$cvalue) }}</span>
                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">
                                        {{ $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][1]['PaxType'] . '(' . $travellers['noOfChilds'] . 'X' }}
                                        {!! $icon !!}
                                        {{ ceil($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][1]['BaseFare']*$cvalue) . ')' }}
                                    </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}
                                        {{ (int) ceil(($travellers['noOfChilds'] * (int) $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][1]['BaseFare'])*$cvalue) }}</span>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Fee & Surcharges

                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">Total Fee & Surcharges : </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}

                                    @php 
                                        $total_fare = array_sum([($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['Total']['FuelSurcharge'])+((int) $travellers['noOfAdults'] * $Charge)+((int) $travellers['noOfChilds'] * $Charge), $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['Total']['OtherTax']]);
                                    @endphp
                                    <span id="TotalFare">
                                        {{ ceil(($total_fare+10)*$cvalue) }}
                                    </span>
                                  </span>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Other Services</div>
                                <div  class="collapse show">
                                <div class="form-check ">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                  <label class="form-check-label" for="flexCheckChecked"> Charity </label>
                                    <span class="float-right fontsize-17">{!! $icon !!} <span id="ChaAm">10</span></span>
                                </div>
                                </div>
                                 <div id="price" class="collapse show">
                                    <span class="font-14">Discount </span>
                                    <span class="float-right fontsize-17">{!! $icon !!} <span id="DisAm">0</span></span>
                                </div> 
                                <div id="price" class="collapse show">
                                    <span class="font-14">Convenience fee </span>
                                    <span class="float-right fontsize-17">{!! $icon !!} 0</span>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="owstitle pb-10" data-toggle="collapse" data-target="#price1">
                                    <span class="fontsize-22"> Total Amount</span>
                                    <span class="fontsize-22 float-right"> {!! $icon !!}
                                        {{ ceil(($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['Total']['Fare']) +((int) $travellers['noOfAdults'] * $Charge)+((int) $travellers['noOfChilds'] * $Charge)) }} </span>

                                </div>
                            </div>
                        </div>

                    @elseif($travellers['noOfAdults'] != 0 && $travellers['noOfChilds'] == 0 &&
                        $travellers['noOfInfants'] != 0)

                        {{-- Data start --}}
                        <div class="boxunder p-2">

                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Base Fare

                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">
                                        {{ $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['PaxType'] . '(' . $travellers['noOfAdults'] . 'X' }}
                                        {!! $icon !!}
                                        {{ ceil($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['BaseFare']*$cvalue) . ')' }}
                                    </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}
                                        {{ (int) ceil(($travellers['noOfAdults'] * (int) $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['BaseFare'])*$cvalue) }}</span>
                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">
                                        {{ $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][1]['PaxType'] . '(' . $travellers['noOfInfants'] . 'X' }}
                                        {!! $icon !!}
                                        {{ ceil($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][1]['BaseFare']*$cvalue) . ')' }}
                                    </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}
                                        {{ (int) ceil(($travellers['noOfInfants'] * (int) $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][1]['BaseFare'])*$cvalue) }}</span>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Fee & Surcharges

                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">Total Fee & Surcharges : </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}
                                    @php 
                                        $total_fare = array_sum([($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['Total']['FuelSurcharge'])+((int) $travellers['noOfAdults'] * $Charge), $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['Total']['OtherTax']]);
                                    @endphp
                                    <span id="TotalFare">
                                        {{ ceil(($total_fare+10)*$cvalue) }}
                                    </span>
                                    </span>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Other Services</div>
                                {{--<div id="price" class="collapse show">
                                    <span class="font-14">Charity </span>
                                    <span class="float-right fontsize-17">{!! $icon !!} 0</span>
                                </div> --}}
                                 <div  class="collapse show">
                                <div class="form-check ">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Charity 
                                  </label>
                                <span class="float-right fontsize-17">{!! $icon !!} <span id="ChaAm">10</span></span>
                                  
                                </div>
                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">Discount </span>
                                    <span class="float-right fontsize-17">{!! $icon !!} <span id="DisAm">0</span></span>
                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">Convenience fee </span>
                                    <span class="float-right fontsize-17">{!! $icon !!} 0</span>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="owstitle pb-10" data-toggle="collapse" data-target="#price1">
                                    <span class="fontsize-22"> Total Amount</span>
                                    <span class="fontsize-22 float-right"> {!! $icon !!}
                                        {{ ceil($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['Total']['Fare'] +((int) $travellers['noOfAdults'] * $Charge)*$cvalue)}}</span>

                                </div>
                            </div>
                        </div>

                    @elseif($travellers['noOfAdults'] != 0 && $travellers['noOfChilds'] != 0 && $travellers['noOfInfants'] != 0)

                        {{-- Data start --}}
                        <div class="boxunder p-2">

                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Base Fare

                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">
                                        {{ $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['PaxType'] . '(' . $travellers['noOfAdults'] . 'X' }}
                                        {!! $icon !!}
                                        {{ $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['BaseFare'] . ')' }}
                                    </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}
                                        {{ (int) ceil(($travellers['noOfAdults'] * (int) $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][0]['BaseFare'])*$cvalue) }}</span>
                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">
                                        {{ $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][1]['PaxType'] . '(' . $travellers['noOfChilds'] . 'X' }}
                                        {!! $icon !!}
                                        {{ ceil($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][1]['BaseFare'])*$cvalue . ')' }}
                                    </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}
                                        {{ (int) ceil(($travellers['noOfChilds'] * (int) $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][1]['BaseFare'])*$cvalue) }}</span>
                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">
                                        {{ $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][2]['PaxType'] . '(' . $travellers['noOfInfants'] . 'X' }}
                                        {!! $icon !!}
                                        {{ ceil($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][2]['BaseFare']*$cvalue) . ')' }}
                                    </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}
                                        {{ (int) ceil(($travellers['noOfInfants'] * (int) $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['FareBreakDowns']['FareBreakDown'][2]['BaseFare'])*$cvalue) }}</span>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Fee & Surcharges

                                </div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">Total Fee & Surcharges : </span>
                                    <span class="float-right fontsize-17">{!! $icon !!}
                                    @php 
                                        $tot_cus = array_sum([($response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['Total']['FuelSurcharge'])+((int) $travellers['noOfChilds'] * $Charge)+((int) $travellers['noOfAdults'] * $Charge), $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['Total']['OtherTax']]);
                                    @endphp
                                        {{ ceil($tot_cus*$cvalue) }}</span>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="fontsize-17 pb-10" data-toggle="collapse" data-target="#price">Other Services

                                </div>
                                <div class="borderbotum"></div>
                                <div  class="collapse show">
                                <div class="form-check ">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Charity 
                                  </label>
                                <span class="float-right fontsize-17">{!! $icon !!} <span id="ChaAm">10</span></span>
                                  
                                </div>
                                </div>
                                <div class="borderbotum"></div>
                                 <div id="price" class="collapse show">
                                    <span class="font-14">Discount </span>
                                    <span class="float-right fontsize-17">{!! $icon !!} <span id="DisAm">0</span></span>
                                </div>
                                <div class="borderbotum"></div>
                                <div id="price" class="collapse show">
                                    <span class="font-14">Convenience fee </span>
                                    <span class="float-right fontsize-17">{!! $icon !!} 0</span>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="ranjepp">
                                <div class="owstitle pb-10" data-toggle="collapse" data-target="#price1">
                                    <span class="fontsize-22"> Total Amount</span>
                                    <span class="fontsize-22 float-right"> {!! $icon !!}
                                        
                                    @php 
                                        $total_fare = $response['AirPricingResponse'][0]['PricingInfos']['PricingInfo'][0]['Total']['Fare'] +((int) $travellers['noOfChilds'] * $Charge)+((int) $travellers['noOfAdults'] * $Charge);
                                        $total_fare = ceil($total_fare*$cvalue);
                                    @endphp
                                    <span id="TotalFare">
                                        {{ $total_fare+10 }}
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                    @endif

                    <div class="pb-10"></div>
                   {{--  <div class="boxunder">
                       <div class="ranjepp">
                            <div class="onwfnt-11"><i class=""></i> Cancellation Fees Apply</div>
                            <p class="onwfnt-11">For cancellation please contact. <i class="fa fa-phone"> 08069145571</i> 
                                 </p>
                            <span class="onewflydetbtn"> VIEW POLICY </span>
                            <span class="onwfnt-11 float-right">
                                
                            </span>
                        </div>
                    </div> --}}
                    <?php  
                    $heading =  'HOT DEALS';
                    $text  = 'Use this coupon and get Rs 50 instant discount on your flight booking.';
                    ?>
                    <div class="pb-10"></div>
                    <div class="boxunder" id="boxunder">
                        <div class="card-header fontsize-22 bg-info">{{ $icon == $icon_inr ? $heading : '' }}</div>
                        <div class="ranjepp">
                            <div class="form-check">
                                @if($icon == $icon_inr)
                              <input class="form-check-input radio-toolbar" type="radio" name="DisAmou" id="flexRadioDefault1" value="Yes">
                              @endif
                              <label class="form-check-label" for="flexRadioDefault1">
                               <b id="DisText">
                                   {{$icon == $icon_inr ? $text : ''  }}
                               </b> 
                              </label>
                            </div>
                            <div id="remove-btn"class="form-check ">
                                @if($icon == $icon_inr)
                              <input class="form-check-input radio-toolbar" type="radio" name="DisAmou" id="flexRadioDefault2" value="No" checked>
                              @endif
                              <label class="form-check-label" for="flexRadioDefault2">
                                {{ $icon == $icon_inr ? 'Remove' : '' }}
                              </label>
                            </div>
                            {{-- <div class="owstitle"> <i class="fa fa-tag"></i> FLYFLASH</div>
                            <p class="onwfnt-11">Use this code to get special discount of {!! $icon !!} 350 for you</p>
                            <div class="borderbotum"></div>
                            <div class="owstitle"> <i class="fa fa-tag"></i> FLYFLASH</div>
                            <p class="onwfnt-11">Use this code to get special discount of {!! $icon !!} 350 for you</p>
                            <div class="borderbotum"></div>
                            <div class="owstitle"> <i class="fa fa-tag"></i> FLYFLASH</div>
                            <p class="onwfnt-11">Use this code to get special discount of {!! $icon !!} 350 for you</p>
                            <div class="borderbotum"></div>
                            <div class="owstitle"> <i class="fa fa-tag"></i> FLYFLASH</div>
                            <p class="onwfnt-11">Use this code to get special discount of {!! $icon !!} 350 for you</p>
                            <div class="borderbotum"></div>--}}
                        </div>
                        @if($Agent != null)
                            <script>
                            
                            setTimeout(() => {
                                $('#boxunder').remove();
                            }, 800);
                            
                            </script>
                        @endif
                    </div>
                    
                </div>
                {{-- Fare Rules Section End --}}
                <div class="col-sm-8 pt-20 pb-20">
                    @php
                        use App\Http\Controllers\Airline\AirportiatacodesController;
                    @endphp
                    {{-- <div class="scrollfix"> --}}
                    <h4 class="responsivetexttitle">Itinerary</h4>
                    @if (isset($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]) && isset($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]) && !isset($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][2]))
                        @php
                            $originCountry = $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['AirportCode'];
                            $destinationCountry = $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Destination']['AirportCode'];
                            $jurneyDate = getDateFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['DateTime']);
                            $SessionID = $SessionID;
                            $ReferenceNo = $response['ReferenceNo'];
                            $Key = $response['Key'];
                            $Provider = $response['AirPricingResponse'][0]['Provider'];
                            $GalFlight = $response['AirPricingResponse'][0]['Itineraries']['Itinerary'];
                        @endphp
                        <div class="pb-10">
                            <div class="boxunder">
                                <div class="row">
                                    <div class="col-7 col-md-7 col-sm-6">
                                        <span class="bg-dark px-3 rounded-right text-light fnt40">DEPART</span>
                                        <span class="dpf">
                                            <span
                                                class="fontsize-22">{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['AirportCode'] . '-' . $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Destination']['AirportCode'] }}
                                                | <small
                                                    class="owstitle">{{ getDateFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['DateTime']) }}</small>
                                            </span><br>
                                            <span class="owstitle"> 1-Stop</span> |
                                                {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Duration'] }}</span>
                                        </span>
                                    </div>
                                    <div class="col-5 col-md-5 col-sm-6">
                                        <div class="float-right ranjepp">
                                            <span class="prebtn marginright-20"> Cancellation Fees Apply </span>
                                            <span class="fontsize-22 text-center"> Fare Rules </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="borderbotum"></div>
                            @php
                            $img=$response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Code'];
                            @endphp
                            <input type="hidden" id="imgtype" value='$img' name="image">

                                <div class="row ranjepp py-3">
                                    <div class="col-2 col-md-2 col-sm-2">
                                        <img src="{{ asset('assets/images/flight/' . $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Code']) }}.png"
                                            alt="flight" class="imgonewayw">
                                        <div class="owstitle1">
                                            {{  $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Name'] }}
                                        </div>
                                        <div class="owstitle">
                                            {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Code'] . '-' . $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Identification'] }}
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-3 col-sm-3">
                                        <div class="fontsize-22">
                                            {{getTimeFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['DateTime'])}}
                                        </div>

                                        <span
                                            class="onwfnt-22 font-weight-bold">{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['CityName'] }}</span>
                                        <div class="owstitle">
                                            {{ getDateFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['DateTime']) }}
                                        </div>
                                        <div class="onwfnt-11 colorgrey">
                                            {{ AirportiatacodesController::getAirport($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['AirportCode']) }}
                                        </div>
                                        <div class="onwfnt-11 colorgrey">Terminal
                                            {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['Terminal'] ?? '' }}
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2 col-sm-2 text-center pt-4">
                                        <div style="margin-left: -40px;">
                                            <div class="owstitle-22">
                                                {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Duration'] }}
                                            </div>
                                            <div class="borderbotum"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-3 col-sm-3">
                                        <div class="fontsize-22">
                                            {{ getTimeFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['DateTime']) }}
                                        </div>
                                        <span
                                            class="onwfnt-22 font-weight-bold">{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['CityName'] }}</span>
                                        <div class="owstitle">
                                            {{ getDateFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['DateTime']) }}
                                        </div>

                                        <div class="onwfnt-11 colorgrey">
                                            {{ AirportiatacodesController::getAirport($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['AirportCode']) }}
                                        </div>
                                        <div class="onwfnt-11 colorgrey">Terminal
                                            {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['Terminal'] ?? '' }}
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2 col-sm-2">
                                        <span class="owstitle mb-2">Fare Type</span>
                                        <button type="button" class="btn-sm btn btn-outline-success btnressaver">SAVER</button>
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-12 col_sm-121">
                                    <div class="borderbotum-2"></div>
                                    <div class="borderraduesround">
                                        {{getTimeDff_formated( $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['DateTime'] , $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Origin']['DateTime'])}} {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['CityName'] }}
                                    </div>
                                </div>
                                
                                
                                <div class="row ranjepp py-3">
                                    <div class="col-2 col-md-2 col-sm-2">
                                        <img src="{{ asset('assets/images/flight/' . $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['AirLine']['Code']) }}.png"
                                            alt="flight" class="imgonewayw">
                                        <div class="owstitle1">
                                            {{  $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Name'] }}
                                        </div>
                                        <div class="owstitle">
                                            {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['AirLine']['Code'] . '-' . $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['AirLine']['Identification'] }}
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-3 col-sm-3">
                                        <div class="fontsize-22">
                                            {{ getTimeFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Origin']['DateTime']) }}
                                        </div>
                                        <span
                                            class="onwfnt-22 font-weight-bold">{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Origin']['CityName'] }}</span>
                                        <div class="owstitle">
                                            {{ getDateFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Origin']['DateTime']) }}
                                        </div>

                                        <div class="onwfnt-11 colorgrey">
                                            {{ AirportiatacodesController::getAirport($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Origin']['AirportCode']) }}
                                        </div>
                                        <div class="onwfnt-11 colorgrey">Terminal
                                            {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Origin']['Terminal'] ?? '' }}
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2 col-sm-2 text-center pt-4">
                                        <div style="margin-left: -40px;">
                                            <div class="owstitle-22">
                                                {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Duration'] }}
                                            </div>
                                            <div class="borderbotum"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-3 col-sm-3">
                                        <div class="fontsize-22">
                                            {{ getTimeFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Destination']['DateTime']) }}
                                        </div>
                                        <span
                                            class="onwfnt-22 font-weight-bold">{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Destination']['CityName'] }}</span>
                                            
                                        <div class="owstitle">
                                            {{ getDateFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Destination']['DateTime']) }}
                                        </div>

                                        <div class="onwfnt-11 colorgrey">
                                            {{ AirportiatacodesController::getAirport($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Destination']['AirportCode']) }}
                                        </div>
                                        <div class="onwfnt-11 colorgrey">Terminal
                                            {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]['Destination']['Terminal'] ?? '' }}
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2 col-sm-2">
                                        <span class="owstitle mb-2">Fare Type</span>
                                        <button type="button" class="btn-sm btn btn-outline-success btnressaver">SAVER</button>
                                    </div>
                                </div>

                                <div class="borderbotum"></div>
                                <div class="row ranjepp">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr class="onwfnt-11">
                                                <th>BAGGAGE</th>
                                                <th>CHECK IN</th>
                                                <th>CABIN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="onwfnt-11">
                                                <td>ADULT</td>
                                                <td>{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CheckIn'] != 0 ? $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CheckIn'] . 'KG' : $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CheckInPiece'] . 'PC' }}
                                                </td>
                                                <td>{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['Cabin'] != 0 ? $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['Cabin'] . 'KG' : $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CabinPiece'] . 'PC' }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @elseif (isset($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]) &&
                        !isset($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][1]) &&
                        !isset($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][2]))

                        @php
                            $originCountry = $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['AirportCode'];
                            $destinationCountry = $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['AirportCode'];
                            $jurneyDate = getDateFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['DateTime']);
                            $SessionID = $SessionID;
                            $ReferenceNo = $response['ReferenceNo'];
                            $Key = $response['Key'];
                            $Provider = $response['AirPricingResponse'][0]['Provider'];
                            $GalFlight = $response['AirPricingResponse'][0]['Itineraries']['Itinerary'];
                        @endphp
                        <div class="pb-10">
                            <div class="boxunder">
                                <div class="row">

                                    <div class="col-7 col-md-7 col-sm-6">
                                        <span class="bg-dark px-3 rounded-right text-light fnt40">DEPART</span>
                                        <span class="dpf">
                                            <span
                                                class="fontsize-22">{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['AirportCode'] . '-' . $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['AirportCode'] }}
                                                | <small
                                                    class="owstitle">{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['DateTime'] }}</small>
                                            </span><br>
                                            <span class="owstitle"> Non-Stop |
                                                {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Duration'] }}</span>
                                        </span>
                                    </div>
                                    <div class="col-5 col-md-5 col-sm-6">
                                        <div class="float-right ranjepp">
                                            <span class="prebtn marginright-20"> Cancellation Fees Apply </span>
                                            <span class="fontsize-22"> Fare Rules </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="borderbotum"></div>

                                <div class="row ranjepp py-3">
                                    <div class="col-2 col-md-2 col-sm-2">
                                        <img src="{{ asset('assets/images/flight/' . $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Code']) }}.png"
                                            alt="flight" class="imgonewayw">
                                           
                                        <div class="owstitle1">
                                            {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Name'] }}
                                        </div>
                                        <div class="owstitle">
                                            {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Code'] . '-' . $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Identification'] }}
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-3 col-sm-3">
                                        <div class="fontsize-22">
                                            {{ getTimeFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['DateTime']) }}
                                        </div>
                                        <span
                                            class="onwfnt-22 font-weight-bold">{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['CityName'] }}</span>
                                        <div class="owstitle">
                                            {{ getDateFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['DateTime']) }}
                                        </div>

                                        <div class="onwfnt-11 colorgrey">
                                            {{ AirportiatacodesController::getAirport($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['AirportCode']) }}
                                        </div>
                                        <div class="onwfnt-11 colorgrey">Terminal
                                            {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['Terminal'] ?? '' }}
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2 col-sm-2 text-center pt-4">
                                        <div style="margin-left: -40px;">
                                            <div class="owstitle-22">
                                                {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Duration'] }}
                                            </div>
                                            <div class="borderbotum"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-3 col-sm-3">
                                        <div class="fontsize-22">
                                            {{ getTimeFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['DateTime']) }}
                                        </div>
                                        <span
                                            class="onwfnt-22 font-weight-bold">{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['CityName'] }}</span>
                                        <div class="owstitle">
                                            {{ getDateFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['DateTime']) }}
                                        </div>

                                        <div class="onwfnt-11 colorgrey">
                                            {{ AirportiatacodesController::getAirport($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['AirportCode']) }}
                                        </div>
                                        <div class="onwfnt-11 colorgrey">Terminal
                                            {{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['Terminal'] ?? '' }}
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2 col-sm-2">
                                        <span class="owstitle mb-2">Fare Type</span>
                                        <button type="button" class="btn-sm btn btn-outline-success btnressaver">SAVER</button>
                                    </div>
                                </div>

                                <div class="borderbotum"></div>
                                <div class="row ranjepp">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr class="onwfnt-11">
                                                <th>BAGGAGE</th>
                                                <th>CHECK IN</th>
                                                <th>CABIN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="onwfnt-11">
                                                <td>ADULT</td>
                                                <td>{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CheckIn'] != 0 ? ($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CheckIn']) . 'KG' : $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CheckInPiece'] . 'PC' }}
                                                </td>
                                                <td>{{ $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['Cabin'] != 0 ? $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['Cabin'] . 'KG' : $response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Baggage']['Allowance']['CabinPiece'] . 'PC' }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="container">
                            <div id="information" class="collapse p-10">
                                <div class="boxunder p-10 bgpolicy">
                                    <h4 class="restitleof">Important Information</h4>
                                    <h6 class="restitleof"> <i class="fa fa-info-circle textcolorinfo"></i> Mandatory
                                        check-list for passengers </h6>
                                    <ul class="onwfnt-11">
                                        <li>Vaccination requirements : None.</li>
                                        <li>COVID test requirements : Non-vaccinated passengers entering the
                                            state from Maharashtra and Kerala must carry a negative RT-PCR test
                                            report with a sample taken within 72 hours before arrival. RT-PCR
                                            Test timeline starts from the swab collection time. Negative RT-PCR
                                            test report is not required for passengers travelling from other
                                            states.</li>
                                        <li>Passengers travelling to the state might not be allowed to board
                                            their flights if they are not carrying a valid test report.</li>
                                        <li>Pre-registration or e-Pass requirements : Download and update
                                            Aarogya Setu app</li>
                                        <li>Quarantine Guidelines : None</li>
                                        <li>Destination Restrictions : A lockdown is in effect at the moment,
                                            however, flight operations remain unaffected during this time.
                                            Please check the latest state guidelines before travelling.</li>
                                        <li>Remember to web check-in before arriving at the airport; carry a
                                            printed or soft copy of the boarding pass.</li>
                                        <li>Please reach at least 2 hours prior to flight departure.</li>
                                        <li>The latest DGCA guidelines state that it is compulsory to wear a
                                            mask that covers the nose and mouth properly while at the airport
                                            and on the flight. Any lapse might result in de-boarding. Know More
                                        </li>
                                        <li>Remember to download the baggage tag(s) and affix it on your bag(s).
                                        </li>
                                    </ul>
                                    <h6 class="restitleof"> <i class="fa fa-info-circle textcolorinfo"></i> State
                                        Guidelines </h6>
                                    <ul class="onwfnt-11">
                                        <li>Check the detailed list of travel guidelines issued by Indian States
                                            and UTs.Know More</li>
                                    </ul>
                                    <h6 class="restitleof"> <i class="fa fa-info-circle textcolorinfo"></i> Baggage
                                        information </h6>
                                    <ul class="onwfnt-11">
                                        <li>Carry no more than 1 check-in baggage and 1 hand baggage per passenger.
                                            Additional pieces of Baggage will be subject to additional charges per piece in
                                            addition to the excess baggage charges.</li>
                                    </ul>
                                    <h6 class="restitleof"> <i class="fa fa-info-circle textcolorinfo"></i> A Note on
                                        Guidelines </h6>
                                    <ul class="onwfnt-11">
                                        <li>Disclaimer: The information provided above is only for ready reference and
                                            convenience of customers, and may not be exhaustive. We strongly recommend that
                                            you check the full text of the guidelines issued by the State Governments before
                                            travelling. Wagnistrip accepts no liability in this regard.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-left" id="booking-btn-section" class="collapse in ">
                        <button id="booking-btn" type="button" class="btn btn-primary continueres-btn" data-toggle="collapse"
                            data-toggle="collapse in" style="margin-left: 10px; width: 97.5%;"> CONTINUE</button>
                    </div>
                    {{-- Travller Form Data Start --}}
                    <div id="traveller-section" class="collapse pb-20">
                        <form id="main-form" action="{{ route('galelio-traveller-details') }}" method="post" data-parsley-validate>
                            @csrf
                            <input type="hidden" name="GalFlight" value="{{ json_encode($GalFlight??'', true) }}">
                            <input type="hidden" name="travellers" value="{{ json_encode($travellers, true) }}">
                            <input type="hidden" name="SessionID" value="{{ $SessionID }}">
                            <input type="hidden" name="ReferenceNo" value="{{ $ReferenceNo }}">
                            <input type="hidden" name="Provider" value="{{ $Provider }}">
                            <input type="hidden" name="Key" value="{{ $Key }}">
                            
                            <input type="hidden" name="code" value="{{$response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Code']}}">
                            <input type="hidden" name="time1" value="{{ getTimeFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['DateTime']) }}">
                            <input type="hidden" name="time2" value="{{ getTimeFormat($response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['DateTime']) }}">
                            <input type="hidden" name="city1" value="{{$response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Origin']['CityName']}}">
                            <input type="hidden" name="city2" value="{{$response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Destination']['CityName']}}">
                            <input type="hidden" name="delay" value="{{$response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['Duration']}}">
                            <input type="hidden" name="stop" value="{{$response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['StopCount']}}">
                            <input type="hidden" name="otherInformations" value="{{$response['AirPricingResponse'][0]['Itineraries']['Itinerary'][0]['AirLine']['Code']}}">
                            <input type="hidden" id="Chari"name="Chari">
                            <input type="hidden" id="textDis"name="textDis" value="no">
                            <input type="hidden" name="trip" value="Oneway">
                            @php
                                session(['total_fare'=>$total_fare]);
                            @endphp
                            <input type="hidden" name="fare" value="{{ $total_fare }}">
                            <br>
                           {{-- <span class="searchtitle">Enter code*</span>
                            <input type="text" name="Code" class="form-control" placeholder="Enter code" value="{{ $total_fare }}" />
                            <br> --}}
                            <x-flight.travellerform :travellers="$travellers" :originCountry="$originCountry"
                                :destinationCountry="$destinationCountry" :jurneyDate="$jurneyDate" />
                        </form>
                        
                    </div>
                    {{-- Travller Form Data End --}}

                    {{-- </div> --}}
                </div>

            </div>
        </div>
    </section>
    </div>
    <!-- DESKTOP VIEW END -->

         <!-- FLIGHT MOBILE VIEW START -->
         <x-mobile-menu />
        <!-- FLIGHT MOBILE VIEW END -->
        <div class="dpnr">
            <x-footer />
        </div>
        <div class="ddn">
            <x-mobilefooter />
        </div>

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/userstyle.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
@stop
@section('script')
    
    <script src="{{asset('assets/js/review_page.js')}}"></script>
    
    <script>
    $(document).ready(function(){
         var inricon = "{{!empty(__('common.INR')) ? __('common.INR') : ''}}";
          var icon = "{{!empty($icon) ? $icon : ''}}";
        if(inricon.trim() != icon.trim()){
            $("#boxunder").css('display' , 'none');
        }
    });    
      $(document).ready(function () {
           $('#travller-btn').on('click',function(){
            $('#main-form').submit();
        });
        
    let checkbox = document.getElementById("flexCheckChecked");
    let DisAmBox = document.getElementById("flexRadioDefault1");
    let DisText = document.getElementById("DisText");
    let text = document.getElementById("Chari");
    let textDis = document.getElementById("textDis");
    let TotalFare = document.getElementById("TotalFare");
    let ChaAm = document.getElementById("ChaAm");
    let DisAm = document.getElementById("DisAm");
    let removrBtn = document.getElementById("remove-btn");
      checkbox.addEventListener( "change", () => {
            // console.log(TotalFare , TotalFare.innerText);
         if ( checkbox.checked ) {
            text.value = "yes";
            TotalFare.innerText = parseInt(TotalFare.innerText) +10;
            ChaAm.innerText = parseInt(ChaAm.innerText) +10;
         } else {
            text.value = "no";
            TotalFare.innerText = parseInt(TotalFare.innerText) - 10;
            ChaAm.innerText = parseInt(ChaAm.innerText) - 10;
         }
      });
      
        removrBtn.style.display= "none";
      $('input[name=DisAmou]').on('change',function () {
          let Disvalue = $(this).filter(':checked').val();
          if ( Disvalue == 'Yes' ) {
            textDis.value = "yes";
            DisAm.innerText = parseInt(DisAm.innerText) +50;
            TotalFare.innerText = parseInt(TotalFare.innerText) - 50;
            DisText.innerText = "Congratulations! Promo Discount of Rs. 50 applied successfully.";
            DisText.style.color= "green";
            removrBtn.style.display= "block";
            DisText.style.display= "block";
            // console.log($(this).filter(':checked').val() , Disvalue);
         } else {
            textDis.value = "no";
            DisAm.innerText = parseInt(DisAm.innerText) - 50;
            TotalFare.innerText = parseInt(TotalFare.innerText) + 50;
            DisText.innerText = "Use this coupon and get Rs 50 instant discount on your flight booking.";
            DisText.style.color= "black";
            removrBtn.style.display= "none";
            removrBtn.style.color= "black";
         }
            // console.log($(this).filter(':checked').val() , Disvalue);
    });
    
    

    //   DisAmBox.addEventListener( "change", () => {
    //     // console.log(DisAmBox , DisAmBox.value);
    //      if ( checkbox.checked ) {
    //         textDis.value = "yes";
    //         DisAm.innerText = parseInt(DisAm.innerText) +50;
    //         TotalFare.innerText = parseInt(TotalFare.innerText) - 50;
    //      } else {
    //         textDis.value = "no";
    //         DisAm.innerText = parseInt(DisAm.innerText) - 50;
    //         TotalFare.innerText = parseInt(TotalFare.innerText) + 50;
    //      }
    //   });
    
    
    
         /////// API Data code By Neelesh ////// --}}
   
var divs = document.getElementsByClassName('owstitle1');
var uniqueValues = [];

for (let i = 0; i < divs.length; i++) {
  let iddata = divs[i].innerHTML;
  
  if (!uniqueValues.includes(iddata)) {
    uniqueValues.push(iddata);
    fetchAirlineCode(iddata, divs);
  }
}

function fetchAirlineCode(iddata, divs) {
  fetch("/api/airlinecode?search=" + iddata)
    .then(response => response.text())
    .then(data => {
      for (let i = 0; i < divs.length; i++) {
        if (divs[i].innerHTML === iddata) {
          divs[i].innerHTML = data;
        }
      }
    })
    .catch(error => console.error(error));
}

///////  End  Code By Neelesh //////--}}

   
            $("#booking-btn-section").show();
            $("#traveller-section").hide();
            $("#payment-section").hide();
            $("#information").show();

        $("#booking-btn").click(function() {
            $("#booking-btn-section").hide();
            $("#traveller-section").show();
            $("#information").hide();
        });
        $("#travller-btn").click(function() {
            // $(this).hide();
            $("#payment-section").show();
        });

        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        function togglePopup() {
            $(".content").toggle();
        }
    });
    </script>
    
    <script>
       window.addEventListener( "pageshow", function ( event ) {
      var historyTraversal = event.persisted || 
                             ( typeof window.performance != "undefined" && 
                                  window.performance.navigation.type === 2 );
      if ( historyTraversal ) {
       
        // Handle page restore.
        window.location.reload();
      }
    });
    </script>
    
@stop
@endsection
