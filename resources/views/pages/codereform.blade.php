<div class="card br-18">
    <form action="{{ route('search-hotel') }}" method="get">
        <div class="card-body">
            <div class="radiobox">
                <span class="uptext">
                    <a href="#" class="link-color">Apply Visa </a>
                </span>

            </div>
            <div class="d-flex pt-10">
                <div class="card wd-55 hoverbg">
                    <div class="card-body">
                        <div class="searchtitle">DESTINATION</div>
                        <select class="js-example-basic-single getLocation" name="state">
                            <option value="DEL">United Arab Emirates</option>
                        </select>
                        <div class="slitxt">Accepting online application</div>
                    </div>
                </div>

                
               
               
        </div>
        <div class="text-center pt-10 pb-10">
            <button type="submit" class="searchbtn btn btn-lg" name="main-search-btn" id="main-search-btn">SEARCH
                <i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </form>
</div>