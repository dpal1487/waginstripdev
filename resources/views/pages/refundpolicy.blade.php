@extends('layouts.master')
@section('title','Wagnistrip')
@section("body")
<div class="pt-6p"></div>

 <!-- Breadcrumb -->
 <section class="breadcrumb-outer mt-5 text-center">
    <div class="container mobileVes1">
        <div class="breadcrumb-content">
            <h2>Refund and Policy</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Refund And Policy </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>
<!-- BreadCrumb Ends -->


<section class="container mobileVes1 mt-5 mb-5 p-5 boxunder">
    <p class="pb-10 pd_text text-justify"> Wagnistrip’s website - <a href="/">www.wagnistrip.com</a>. It is an IATA-certified travel agency that complies with USA and Indian law. You do have to agree to the terms and conditions listed below, as well as any supplemental guidelines and future amendments, by accessing or using this site or any of its services.</p>
    <p class="pb-10 pd_text text-justify"> Wagnistrip reserves the right to modify, add, or remove any portion of the written Terms & Conditions below. Any modifications made to these terms and conditions of use will take effect as soon as they are published online. </p>
    <h5><b> 1. Agreement between Wagnistrip and Client : </b></h5>
    <p class="pb-10 pd_text text-justify"> Users need to acknowledge that they have read and agreed to the terms and conditions of our site <a href="/"> www.wagnistrip.com </a>. In order to access, utilize, browse, or make a reservation on <a href="/"> www.wagnistrip.com</a>. Wagnistrip retains the right to pursue legal action against violators in the event of any infraction. </p>
    <div class="borderbotum mb-2"></div>
    <h5> <b> 2. All prices mentioned on our website : </b> </h5>
    
    <div class="row pb-10">
        <div class="col-md-6" style="padding-left: 50px">
            <ul  style="list-style: disc" class="text-justify">
                <li class="mb-3">GST will be included in the service fee, cancellation fee, and rescheduling fee. </li>
                <li class="mb-3">The price that we showcase on <a href="/"> www.wagnistrip.com </a>  often includes lodging expenses, taxes and in unusual circumstances, some meals (breakfast, lunch, and dinner) will also be added.</li>
                <li class="mb-3">It never includes any personal costs or extra expenditures like phone calls, personal-man services, monument entrance fees, or bar tabs, etc.</li>
                <li class="mb-3">The cheapest rates are offered by Wagnistrip, although they depend on a range of variables, such as the quantity of tickets still available, the sector selected, the date of the booking, and the policies of the airline, operator, or other third-party service provider, among others.</li>
            </ul>
        </div>
    </div>
    <div class="borderbotum mb-2"></div>
    
    <h5> <b> 3. The following methods of payment are accepted by Wagnistrip for online reservations:</b> </h5>
    
    <div class="row pb-10">
        <div class="col-md-6" style="padding-left: 50px">
            <ul  style="list-style: disc">
                <li class="mb-3">
                    <b class="d-block">Credit/Debit Cards</b> 
                    Visa, Master, Amex, Maestro & RuPay
                </li>
                <li class="mb-3">
                    <b class="d-block">Net Banking</b> 
                    All Major Banks Supported
                </li>
                <li class="mb-3">
                    <b class="d-block">Wallet</b> 
                    MobKwik, PhonePe, AmazonPay & Others
                </li>
                <li class="mb-3">
                    <b class="d-block">UPI</b> 
                    All UPI
                </li>
                <li class="mb-3">
                    <b class="d-block">PayPal</b> 
                    Pay with PayPal
                </li>
            </ul>
        </div>
    </div>
    
    <div class="borderbotum mb-2"></div>
    <h5> <b> 4. International Payment :</b> </h5>
    <p class="pb-10 pd_text text-justify"> <b>The time frame for refunds is also stated below:</b> </p>
    <p class="pb-10 pd_text text-justify"> It includes the time needed to complete the refund and credit the money to the customer's bank account. It will be valid for 7 to 14 days. </p>
    <p class="pb-10 pd_text text-justify"> You must activate a feature known as "3DS" so that every transaction will undergo an OTP verification process sent from the relevant banks by our clients when they make a payment to us in order to keep international enablement active.</p>
    
    
    <div class="borderbotum mb-2"></div>
    
    <h5> <b> 4. Refunds in circumstances of airline/hotel/motel bankruptcy or insolvency:</b> </h5>
    <p class="pb-10 pd_text text-justify"> Wagnistrip will not be liable to pay any refund in any case. In these situations, where the airline or hotel suspends operations or declares bankruptcy, Wagnistrip will not be obligated to issue any refunds. In these situations where the airline/hotel closes its doors or declares bankruptcy, consumers, clients, or agents may not hold Wagnistrip accountable for paying the reimbursements as promised at the time of ticket purchase. </p>
    <p class="pb-10 pd_text text-justify"> Wagnistrip occasionally refunds money to customers based on guarantees provided by airlines, hotels, and suppliers, but Wagnistrip has the right to recoup the money in the event that the airline or hotel is shut down, ceases operations, or goes bankrupt. </p>
    
</section>

<x-frontend.sections.mobile-view-pages />

<!-- Desktop End  -->
<div class="dpnr">
    <x-footer />
</div>
@endsection