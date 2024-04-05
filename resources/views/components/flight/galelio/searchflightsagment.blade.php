@if ($segmentMarge == 'true')
    {{-- {{dd($segment)}} --}}
    @foreach ($segment as $item)
        {{-- <span class="smbtn float-right margintop-30">DEPART</span> --}}
        <div class="row boxunder p15" id="gal{{ $rowkey }}">
            <div class="col-md-12">
                <img src="{{ asset('assets/images/flight/' . $item['AirLine']['Code']) }}.png" width="25"
                    alt="flight">
                    <small class="owstitle1">
                     {{ $item['AirLine']['Name'] }}
                    </small>
                <small>
                    {{ $item['AirLine']['Name'] . '->' . $item['AirLine']['Identification'] }}
                </small>

            </div>
            <div class="col-4 col-md-4 col-sm-4">
                <span
                    class="searchtitle ">{{ $item['Origin']['CityName'] . ' ' . getTimeFormat($item['Origin']['DateTime']) }}
                </span>
                <div class="searchtitle colorgrey">
                    {{ getDateFormat($item['Origin']['DateTime']) }}
                </div>
            </div>
            <div class="col-4 col-md-4 col-sm-4">
                <div class="searchtitle text-center">
                    {{ $item['Duration'] }}
                </div>
                <div class="borderbotum"></div>
                <div class="searchtitle colorgrey text-center">{{ ($item['StopCount']==='0-Stop')?('Non-Stop'):($item['StopCount']) }}
                </div>
            </div>
            <div class="col-4 col-md-4 col-sm-4">
                <div class="float-right">
                    <span
                        class="searchtitle">{{ $item['Destination']['CityName'] . ' ' . getTimeFormat($item['Destination']['DateTime']) }}
                    </span>
                    <div class="searchtitle colorgrey">
                        {{ getDateFormat($item['Destination']['DateTime']) }}
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@else

    @if (isset($segment[4]) && $segmentMarge == 'false')
    {{dd($segment)}}
    @elseif (isset($segment[2]) && $segmentMarge == 'false' && $segment[0]['StopCount'] == '2-Stop' && $segment[1]['StopCount'] == '2-Stop' && $segment[2]['StopCount'] == '2-Stop')
        {{-- <span class="smbtn float-right margintop-30">DEPART</span> --}}
        <div class="row boxunder p15" id="gal{{ $rowkey }}">
            <div class="col-4 col-md-5 col-sm-4">
                @if ($trip == 'DEPART')
                    <input type="radio" name="outbound-btn-gal{{ $rowkey }}" class="radio-btn-outbound"
                        value="{{ $rowkey }}">
                @elseif ($trip == 'RETURN')
                    <input type="radio" name="inbound-btn-gal{{ $rowkey }}" class="radio-btn-outbound"
                        value="{{ $rowkey }}">
                @endif
                <span
                    class="searchtitle">{{ $segment[0]['Origin']['CityName'] . ' (' . $segment[0]['Origin']['AirportCode'] . ')' }} 
                    {{-- getTimeFormat($segment[0]['Origin']['DateTime']) --}}
                </span>
                <span class="landing">{{ getTimeFormat($segment[0]['Origin']['DateTime']) }}</span>
                <div class="searchtitle colorgrey">
                    {{ getDateFormat($segment[0]['Origin']['DateTime']) }}
                </div>
            </div>
            <div class="col-4 col-md-3 col-sm-4">
                <div class="searchtitle text-center">
                    {{ $segment[0]['Duration'] . ' | ' . $segment[0]['StopCount'] }}
                </div>
                <div class="borderbotum"></div>
                <div class="searchtitle colorgrey text-center">
                    {{ $segment[0]['Destination']['AirportCode'] . ' | ' . $segment[2]['Destination']['AirportCode'] }}
                </div>
            </div>
            <div class="col-4 col-md-4 col-sm-4">
                <div class="float-right">
                    <span
                        class="searchtitle">{{ $segment[2]['Destination']['CityName'] . ' (' . $segment[2]['Destination']['AirportCode'] . ')' }}
                        {{-- getTimeFormat($segment[2]['Destination']['DateTime']) --}}
                    </span>
                    <span class="takeoff">{{ getTimeFormat($segment[2]['Destination']['DateTime']) }}</span>
                    <div class="searchtitle colorgrey">
                        {{ getDateFormat($segment[2]['Destination']['DateTime']) }}
                    </div>
                </div>
            </div>
        </div>
    @elseif(isset($segment[1]) && $segmentMarge == 'false' && $segment[0]['StopCount'] == '2-Stop' && $segment[1]['StopCount'] == '1-Stop')
        {{-- <span class="smbtn float-right margintop-30">DEPART</span> --}}
        <div class="row boxunder p15" id="gal{{ $rowkey }}">
            <div class="col-4 col-md-5 col-sm-4">
                @if ($trip == 'DEPART')
                    <input type="radio" name="outbound-btn-gal{{ $rowkey }}" class="radio-btn-outbound"
                        value="{{ $rowkey }}">
                @elseif ($trip == 'RETURN')
                    <input type="radio" name="inbound-btn-gal{{ $rowkey }}" class="radio-btn-outbound"
                        value="{{ $rowkey }}">
                @endif
                <span
                    class="searchtitle">{{ $segment[0]['Origin']['CityName'] . ' (' . $segment[0]['Origin']['AirportCode'] . ')' }}
                    {{-- getTimeFormat($segment[0]['Origin']['DateTime']) --}}
                </span>
                <span class="landing">{{ getTimeFormat($segment[0]['Origin']['DateTime']) }}</span>
                <div class="searchtitle colorgrey">
                    {{ getDateFormat($segment[0]['Origin']['DateTime']) }}
                </div>
            </div>
            <div class="col-4 col-md-3 col-sm-4">
                <div class="searchtitle text-center">
                    {{ $segment[0]['Duration'] . ' | ' . $segment[0]['StopCount'] }}
                </div>
                <div class="borderbotum"></div>
                <div class="searchtitle colorgrey text-center">
                    {{ $segment[0]['Destination']['AirportCode'] }}
                </div>
            </div>
            <div class="col-4 col-md-4 col-sm-4">
                <div class="float-right">
                    <span
                        class="searchtitle cityflight" data-city1="{{ $segment[1]['Destination']['CityName'] . ' (' . $segment[1]['Destination']['AirportCode'] . ')' }}" 
                        data-city2="{{ $segment[1]['Destination']['CityName'] . ' (' . $segment[1]['Destination']['AirportCode'] . ')' }}">
                        {{ $segment[1]['Destination']['CityName'] . ' (' . $segment[1]['Destination']['AirportCode'] . ')' }}
                        {{-- getTimeFormat($segment[1]['Destination']['DateTime']) --}}
                    </span>
                    <span class="takeoff">{{ getTimeFormat($segment[1]['Destination']['DateTime']) }}</span>
                    <div class="searchtitle colorgrey">
                        {{ getDateFormat($segment[1]['Destination']['DateTime']) }}
                    </div>
                </div>
            </div>
        </div>
    @elseif(isset($segment[1]) && $segmentMarge == 'false' && $segment[0]['StopCount'] == '1-Stop' && $segment[1]['StopCount'] == '2-Stop')
        {{-- <span class="smbtn float-right margintop-30">DEPART</span> --}}
        <div class="row boxunder p15" id="gal{{ $rowkey }}">
            <div class="col-4 col-md-5 col-sm-4">
                @if ($trip == 'DEPART')
                    <input type="radio" name="outbound-btn-gal{{ $rowkey }}" class="radio-btn-outbound"
                        value="{{ $rowkey }}">
                @elseif ($trip == 'RETURN')
                    <input type="radio" name="inbound-btn-gal{{ $rowkey }}" class="radio-btn-outbound"
                        value="{{ $rowkey }}">
                @endif
                <span
                    class="searchtitle">{{ $segment[0]['Origin']['CityName'] . ' (' . $segment[0]['Origin']['AirportCode'] . ')' }}
                    {{-- getTimeFormat($segment[0]['Origin']['DateTime']) --}}
                </span>
                <span class="landing">{{ getTimeFormat($segment[0]['Origin']['DateTime']) }}</span>
                <div class="searchtitle colorgrey">
                    {{ getDateFormat($segment[0]['Origin']['DateTime']) }}
                </div>
            </div>
            <div class="col-4 col-md-3 col-sm-4">
                <div class="searchtitle text-center">
                    {{ $segment[0]['Duration'] . ' | ' . $segment[0]['StopCount'] }}
                </div>
                <div class="borderbotum"></div>
                <div class="searchtitle colorgrey text-center">
                    {{ $segment[0]['Destination']['AirportCode'] }}
                </div>
            </div>
            <div class="col-4 col-md-4 col-sm-4">
                <div class="float-right">
                    <span
                        class="searchtitle cityflight" data-city1="{{ $segment[1]['Destination']['CityName'] . ' (' . $segment[1]['Destination']['AirportCode'] . ')' }}" 
                        data-city2="{{ $segment[1]['Destination']['CityName'] . ' (' . $segment[1]['Destination']['AirportCode'] . ')' }}">
                        {{ $segment[1]['Destination']['CityName'] . ' (' . $segment[1]['Destination']['AirportCode'] . ')' }}
                        {{-- getTimeFormat($segment[1]['Destination']['DateTime']) --}}
                    </span>
                    <span class="takeoff">{{ getTimeFormat($segment[1]['Destination']['DateTime']) }}</span>
                    <div class="searchtitle colorgrey">
                        {{ getDateFormat($segment[1]['Destination']['DateTime']) }}
                    </div>
                </div>
            </div>
        </div>
    @elseif(isset($segment[1]) && $segmentMarge == 'false' && $segment[0]['StopCount'] == '1-Stop' && $segment[1]['StopCount'] == '1-Stop')
        {{-- <span class="smbtn float-right margintop-30">DEPART</span> --}}
        <div class="row boxunder p15" id="gal{{ $rowkey }}">
            <div class="col-4 col-md-5 col-sm-4">
                @if ($trip == 'DEPART')
                    <input type="radio" name="outbound-btn-gal{{ $rowkey }}" class="radio-btn-outbound"
                        value="{{ $rowkey }}">
                @elseif ($trip == 'RETURN')
                    <input type="radio" name="inbound-btn-gal{{ $rowkey }}" class="radio-btn-outbound"
                        value="{{ $rowkey }}">
                @endif
                <span
                    class="searchtitle">{{ $segment[0]['Origin']['CityName'] . ' (' . $segment[0]['Origin']['AirportCode'] . ')' }}
                    {{-- getTimeFormat($segment[0]['Origin']['DateTime']) --}}
                </span>
                <span class="landing">{{ getTimeFormat($segment[0]['Origin']['DateTime']) }}</span>
                <div class="searchtitle colorgrey">
                    {{ getDateFormat($segment[0]['Origin']['DateTime']) }}
                </div>
            </div>
            <div class="col-4 col-md-3 col-sm-4">
                <div class="searchtitle text-center">
                    {{ $segment[0]['Duration'] . ' | ' . $segment[0]['StopCount'] }}
                </div>
                <div class="borderbotum"></div>
                <div class="searchtitle colorgrey text-center">
                    {{ $segment[0]['Destination']['AirportCode'] }}
                </div>
            </div>
            <div class="col-4 col-md-4 col-sm-4">
                <div class="float-right">
                    <span
                        class="searchtitle cityflight" data-city1="{{ $segment[1]['Destination']['CityName'] . ' (' . $segment[1]['Destination']['AirportCode'] . ')' }}" 
                        data-city2="{{ $segment[1]['Destination']['CityName'] . ' (' . $segment[1]['Destination']['AirportCode'] . ')' }}">
                        {{ $segment[1]['Destination']['CityName'] . ' (' . $segment[1]['Destination']['AirportCode'] . ')' }}
                        {{-- getTimeFormat($segment[1]['Destination']['DateTime']) --}}
                    </span>
                    <span class="takeoff">{{ getTimeFormat($segment[1]['Destination']['DateTime']) }}</span>
                    <div class="searchtitle colorgrey">
                        {{ getDateFormat($segment[1]['Destination']['DateTime']) }}
                    </div>
                </div>
            </div>
        </div>

    @elseif (isset($segment[0]) && $segmentMarge == 'false' && $segment[0]['StopCount'] == '0-Stop')

        {{-- <span class="smbtn float-right margintop-30">DEPART</span> --}}
        <div class="row boxunder p15" id="gal{{ $rowkey }}">
            <div class="col-4 col-md-5 col-sm-4">

                @if ($trip == 'DEPART')
                    <input type="radio" name="outbound-btn-gal{{ $rowkey }}" class="radio-btn-outbound"
                        value="{{ $rowkey }}">
                @elseif ($trip == 'RETURN')
                    <input type="radio" name="inbound-btn-gal{{ $rowkey }}" class="radio-btn-outbound"
                        value="{{ $rowkey }}">
                @endif

                <span
                    class="searchtitle">{{ $segment[0]['Origin']['CityName'] . ' (' . $segment[0]['Origin']['AirportCode'] . ')' }} 
                    {{-- getTimeFormat($segment[0]['Origin']['DateTime']) --}}
                </span>
                <span class="landing">{{ getTimeFormat($segment[0]['Origin']['DateTime']) }}</span>
                <div class="searchtitle colorgrey">
                    {{ getDateFormat($segment[0]['Origin']['DateTime']) }}
                </div>
            </div>
            <div class="col-4 col-md-3 col-sm-4">
                <div class="searchtitle text-center">
                    {{ $segment[0]['Duration'] }}
                </div>
                <div class="borderbotum"></div>
                <div class="searchtitle colorgrey text-center">{{ ($segment[0]['StopCount']==='0-Stop')?('Non-Stop'):($segment[0]['StopCount']) }}
                </div>
            </div>
            <div class="col-4 col-md-4 col-sm-4">
                <div class="float-right">
                    <span
                        class="searchtitle">{{ $segment[0]['Destination']['CityName'] . ' (' . $segment[0]['Destination']['AirportCode'] . ')' }} 
                        {{-- getTimeFormat($segment[0]['Destination']['DateTime']) --}}
                    </span>
                    <span class="takeoff">{{ getTimeFormat($segment[0]['Destination']['DateTime']) }}</span>
                    <div class="searchtitle colorgrey">
                        {{ getDateFormat($segment[0]['Destination']['DateTime']) }}
                    </div>
                </div>
            </div>
        </div>

    @endif

@endif
