<style>
    .lastmindeals {z-index:9;left:0;right:0;bottom:0;width:100%;visibility:hidden;}
    .lastmindeals:hover .phone-only-img{transform:scale(1.1); transition:all 0.4s ease;}
    .lastmindeals.active{visibility:visible;}
    .lastmindeals .textline{font-size:27px;}
    .lastmindeals .textline1{font-size:20px;color:#4c4c4c;padding-left:5px;font-weight:500;}
    .lastmindeals .strText{font-size:20px;color:#4c4c4c;}
    .lastmindeals .phonelink{font-size:35px;font-weight:500;-webkit-animation:blinker 2s infinite linear;animation:blinker 2s infinite linear;color:#f80022;}
    .phone-only-img {width: 128px;height: 128px;display: -ms-flexbox;display: flex;position: relative;border-radius: 100%;}
    .phone-only-img img{width: 128px; border-radius: 100%;aspect-ratio: 1/1;object-fit: cover;}
    .lastmindeals .closephoneOnly{right: 0;top: 0;font-size: 24px;font-weight: 800;cursor:pointer;}
    
    @keyframes blinker { 
    	0% { opacity: 1.0;  }
    	50% { opacity: 0.0; }
    	100% { opacity: 1.0;}
    }
    @-moz-keyframes blinker {  
    	0% { opacity: 1.0;  }
    	50% { opacity: 0.0; }
    	100% { opacity: 1.0;}
    }

    @media only screen and (min-device-width: 275px) and (max-device-width: 576px) {
        
        .lastmindeals{padding:30px 10px !important;background: radial-gradient(#a5a5a58f, transparent);}
        .lastmindeals .textline, .lastmindeals .closephoneOnly{font-size:85px;}
        .lastmindeals .strText{font-size:68px;}
        .lastmindeals .strText svg{height:70px;width:70px;}
        .lastmindeals .phonelink{font-size:88px;}
        .phone-only-img{display:none;}
    }
    
</style>
    @php
        $cncode = !empty(Session()->get('country_code')) ? Session()->get('country_code') : [];
        $country =!empty($cncode[0]) ? $cncode[0] : 'IN';
    @endphp
<div class="lastmindeals active bg-white py-2 position-fixed bottom-0">
    <div class="container d-flex align-items-center position-relative">
        <div class="phone-only-img">
            <!--<img class="phone-only-agent" src="https://media.istockphoto.com/id/1437821111/photo/customer-service-happy-and-communication-of-woman-at-call-center-pc-talking-with-joyful-smile.webp?b=1&s=170667a&w=0&k=20&c=VaNC1beA8yRqc22HZdOnyyl8KrHNNXNmOoZ5T_xr6HY=">-->
            <img class="phone-only-agent" src="assets/images/call-deals1.gif">
        </div>
        <div class="dealcontent ml-5">
            <b class="textline d-block" style="font-style: italic;">Searching for last-minute discounts? </b>
            <div class="flextext d-flex align-items-center" id='dynamicIconandNomner'> 
            @if($country == 'IN')
            <strong class="strText">Toll Free INDIA <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><circle cx="256" cy="256" r="256" fill="#f0f0f0" data-original="#f0f0f0"></circle><path fill="#ff9811" d="M256 0C154.5 0 66.8 59.1 25.4 144.7h461.2C445.2 59.1 357.5 0 256 0z" data-original="#ff9811" class=""></path><path fill="#6da544" d="M256 512c101.5 0 189.2-59.1 230.6-144.7H25.4C66.8 452.9 154.5 512 256 512z" data-original="#6da544"></path></g></svg> : </strong> 
            <a href="tel:8069145571" title="918069145571" role="button" class="phonelink"> 8069145571</a> 
            <b class="textline textline1"> Simply give us a call to enjoy incredible deals!</b>
            @else
            <strong class="strText">Toll Free USA <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" x="0" y="0" viewBox="0 0 512 512.01" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#f0f0f0" d="M256 512c141.38 0 256-114.63 256-256S397.39 0 256 0 0 114.64 0 256s114.62 256 256 256z" data-original="#f0f0f0" class=""></path><g fill-rule="evenodd"><path fill="#d80027" d="M474.17 122.33H244.49V55.48h170.66a255.89 255.89 0 0 1 59.02 66.85zM512 256H244.63v-66.83h258.56A256.28 256.28 0 0 1 512 256zM256 512a254.3 254.3 0 0 0 159.29-55.6H96.72A254.19 254.19 0 0 0 256 512zm218.45-122.3H37.55a253.31 253.31 0 0 1-28.73-66.84h494.36a253.17 253.17 0 0 1-28.73 66.84z" data-original="#d80027" class=""></path><path fill="#0052b4" d="M118.85 39.84h-.23V40zm0 0H142l-21.81 15.65 8.25 25.6-21.76-15.65-21.62 15.65L92.17 59a256.08 256.08 0 0 0-49.49 55.5h7.54l-13.8 10-6.26 11 6.54 20.34-12.37-9-8.53 19.86 7.11 22.3h27l-21.46 15.81 8.25 25.6-21.76-15.65-12.8 9.38A237.13 237.13 0 0 0 0 256h256V0a254.85 254.85 0 0 0-137.15 39.84zm9.54 190.44.19.15h-.14zm-8.21-25.46 8.21 25.46-21.72-15.5-21.76 15.65 8.25-25.6-21.76-15.65h27l8.25-25.6 8.25 25.6h27zm.15-74.52 8.25 25.6-21.76-15.65-21.76 15.65 8.25-25.6-21.76-15.65h27l8.25-25.6 8.25 25.6h27zm78.36 84.48 21.76 15.65-8.25-25.6 21.8-15.65h-27l-8.25-25.6-8.25 25.6h-27l21.76 15.65-8.25 25.6zm13.51-84.48 8.25 25.6-21.76-15.65-21.76 15.65 8.25-25.6-21.76-15.65h27l8.25-25.6 8.25 25.6h27zm8.25-48.93-8.25-25.6L234 40.12h-27l-8.25-25.6-8.25 25.6h-27l21.76 15.65-8.25 25.6 21.76-15.65z" data-original="#0052b4" class=""></path></g></g></svg> : </strong>  
            <a href="tel:18009965152" title="18009965152" role="button" class="phonelink"> 18009965152</a>
            <b class="textline textline1"> Simply give us a call to enjoy incredible deals!</b>            
            @endif
            </div>
        </div>
        <span class="closephoneOnly position-absolute" onClick="latminDealSetFunc()">╳</span>
    </div>
</div>
<script>
    function latminDealSetFunc(){
      $(".lastmindeals").removeClass("active")
    }
</script>

{{--
<script>


    const dynamicIconandNomner = document.getElementById("dynamicIconandNomner");
        
    async function getUserLocation() {
        try {
            const response = await fetch("https://ipinfo.io?token=083f25f1313192"); 
            // const response = await fetch("https://ipinfo.io?token=083f25f1313192"); 
            const data = await response.json();
            const country = data.country;
            let html ='';
            if (country === "IN") {
                html +=`
                    <strong class="strText">Toll Free INDIA <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><circle cx="256" cy="256" r="256" fill="#f0f0f0" data-original="#f0f0f0"></circle><path fill="#ff9811" d="M256 0C154.5 0 66.8 59.1 25.4 144.7h461.2C445.2 59.1 357.5 0 256 0z" data-original="#ff9811" class=""></path><path fill="#6da544" d="M256 512c101.5 0 189.2-59.1 230.6-144.7H25.4C66.8 452.9 154.5 512 256 512z" data-original="#6da544"></path></g></svg> : </strong> 
                    <a href="tel:+918069145571" title="918069145571" role="button" class="phonelink"> 8069145571</a>
                    <b class="textline textline1"> Simply give us a call to enjoy incredible deals!</b>
                `;
            } else {
                 html +=`
                    <strong class="strText">Toll Free USA <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" x="0" y="0" viewBox="0 0 512 512.01" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#f0f0f0" d="M256 512c141.38 0 256-114.63 256-256S397.39 0 256 0 0 114.64 0 256s114.62 256 256 256z" data-original="#f0f0f0" class=""></path><g fill-rule="evenodd"><path fill="#d80027" d="M474.17 122.33H244.49V55.48h170.66a255.89 255.89 0 0 1 59.02 66.85zM512 256H244.63v-66.83h258.56A256.28 256.28 0 0 1 512 256zM256 512a254.3 254.3 0 0 0 159.29-55.6H96.72A254.19 254.19 0 0 0 256 512zm218.45-122.3H37.55a253.31 253.31 0 0 1-28.73-66.84h494.36a253.17 253.17 0 0 1-28.73 66.84z" data-original="#d80027" class=""></path><path fill="#0052b4" d="M118.85 39.84h-.23V40zm0 0H142l-21.81 15.65 8.25 25.6-21.76-15.65-21.62 15.65L92.17 59a256.08 256.08 0 0 0-49.49 55.5h7.54l-13.8 10-6.26 11 6.54 20.34-12.37-9-8.53 19.86 7.11 22.3h27l-21.46 15.81 8.25 25.6-21.76-15.65-12.8 9.38A237.13 237.13 0 0 0 0 256h256V0a254.85 254.85 0 0 0-137.15 39.84zm9.54 190.44.19.15h-.14zm-8.21-25.46 8.21 25.46-21.72-15.5-21.76 15.65 8.25-25.6-21.76-15.65h27l8.25-25.6 8.25 25.6h27zm.15-74.52 8.25 25.6-21.76-15.65-21.76 15.65 8.25-25.6-21.76-15.65h27l8.25-25.6 8.25 25.6h27zm78.36 84.48 21.76 15.65-8.25-25.6 21.8-15.65h-27l-8.25-25.6-8.25 25.6h-27l21.76 15.65-8.25 25.6zm13.51-84.48 8.25 25.6-21.76-15.65-21.76 15.65 8.25-25.6-21.76-15.65h27l8.25-25.6 8.25 25.6h27zm8.25-48.93-8.25-25.6L234 40.12h-27l-8.25-25.6-8.25 25.6h-27l21.76 15.65-8.25 25.6 21.76-15.65z" data-original="#0052b4" class=""></path></g></g></svg> : </strong>  
                    <a href="tel:+01 18009965152" title="18009965152" role="button" class="phonelink"> 18009965152</a>
                    <b class="textline textline1"> Simply give us a call to enjoy incredible deals!</b>
                `;
            }

            dynamicIconandNomner.innerHTML = (html);
        } catch (error) {
            console.error("Error fetching user location:", error);
        }
    }
    getUserLocation();
    
    function latminDealSetFunc(){
      $(".lastmindeals").removeClass("active")
    }
    
    
</script>

--}}