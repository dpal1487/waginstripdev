@extends('layouts.master')
@section('title','XYZ')
@section("body")

<div class="pt-6p"></div>
 <!-- Breadcrumb -->
 <section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Contact Us</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<section class="contact pb-20">
    <div class="container boxunder">
        <div class="row">
            <div class="col-md-8">
                <div id="contact-form" class="contact-form" style="padding:10px">
                    <div id="contactform-error-msg"></div>

                    <form method="post" action="#" name="contactform" id="contactform">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" name="full_name" class="form-control" id="Name" placeholder="Enter full name" required>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="abc@xyz.com" required>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" required>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Message:</label>
                                    <textarea name="comments" class="form-control" placeholder="Enter a message" required></textarea>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <input type="submit" class="btn btn-sm btn-info" id="submit" value="Send Message">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-about footer-margin" style="padding:10px">
                    <div class="fnt20">XYZ</div>
                    <p class="searchtitle" style="line-height:27px">Flights, Flight + Hotel deals, International Flights, Hotels, International Hotels, Holidays in India, International Holidays, Cabs, cheap tickets to India, Bus Tickets, Cruises </p>
                    <div class="searchtitle" style="line-height:27px">
                        <div><i class="fa fa-map-marker"></i> 5B/13, Block 5B, Tilak Nagar, New Delhi, Delhi 110018</div>
                        <div><i class="fa fa-phone"></i> 011-36000101/02/03 (24*7 available)</div>                                        
                        <div><i class="fa fa-envelope"></i> customersupport@xyz.com </div>  
                    </div>
                    <div class="pt-10" style="color: #000;font-size: 20px;margin-left: 12px;">
                        <span style="margin: 5px;"><a href="https://www.facebook.com/Make-True-Trip-692580448250094"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                        <span style="margin: 5px;"><a href="https://www.instagram.com/xyz"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
                        <span style="margin: 5px;"><a href="https://twitter.com/XYZ"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                        <span style="margin: 5px;"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></span>
                        <span style="margin: 5px;"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></span>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>

<div class="map">
    <div id="map" style="height: 350px; width: 100%;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.966483915018!2d77.11962331549519!3d28.63076659091093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03a578d54499%3A0x6bb76b9e38af0980!2sMake%20True%20Trip%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1627885313409!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<div class="borderbotum"></div>
    {{-- <x-footer-tag /> --}}
    <x-footer />
@endsection