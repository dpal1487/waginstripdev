@extends('layouts.master')
@section('title','XYZ')
@section("body")
    <div class="pt-6p"></div>
      <!-- Breadcrumb -->
      <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>My Biz</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Biz</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->
       <!--store detail -->
       <section id="store-detail" class="store-detail">
        <div class="container boxunder">
            <div class="single-product-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail-images">
                            <div class="slider slider-store">
                                <div>
                                    <img src="assets/images/biz1.jpg" alt="1" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-product-summary">
                            <div class="entry-summary">
                                <h2 class="single-product-title">Trekking Bags</h2>
                                <div class="rt-product-meta-wrapper">
                                    <span class="price">
                                        <del>
                                            <span class="rt-price-amount">
                                                <span>$</span>370.00
                                            </span>
                                        </del>
                                        <ins>
                                            <span class="rt-price-amount">
                                                <span>$</span>320.00
                                            </span>
                                        </ins>
                                    </span>
                                </div>
                                <div class="product-details_short-description mar-top-30">
                                    <p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliqueenean
                                        sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec
                                        sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan
                                        ipsum velit adipiscing elit.<br><br> Nec sagittis sem nibh idi elit. vulputate
                                        cursus a sit amet mauri s. Morbi accumsan ipsum velit adipiscing elit.</p>
                                </div>

                                <form class="cart mar-top-30">

                                    <div class="quantity-buttons">
                                        <label class="screen-reader-text">Quantity</label>
                                        <input type="number" class="quantity-input" name="quantity" min="1" max="100"
                                            value="1">
                                    </div>

                                    <button type="submit" name="add-to-cart" value="1605" class="btn btn-sm btn-info">Add
                                        to cart</button>

                                </form>

                                <div class="product_meta mar-top-30 pt-10">

                                    <span class="sku_wrapper">SKU: <span class="sku">125</span></span>

                                    <span class="posted_in">
                                        Category: <a href="#" rel="tag">Trekking</a>
                                    </span>

                                    <span class="tagged_as">Tags:
                                        <a href="#" rel="tag">Trek</a>,
                                        <a href="#" rel="tag">Bags</a>
                                    </span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/End store detail -->

    <!-- Deals On Sale -->
    <section class="deals-on-sale">
        <div class="container boxunder">
            <div class="section-title text-center">
                <h2>Deals On Sale</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
            <div class="borderbotum"></div>
            <div class="row sale-slider slider-button">
                <div class="col-md-12">
                    <div class="sale-item">
                       
                        <div class="sale-content">
                            <div class="sale-review">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="#">Surfing at Bahamas</a></h3>
                            <p><i class="flaticon-time"></i> 5 days</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>
                        </div>
                        <div class="sale-tag">
                            <span class="old-price">$1449</span>
                            <span class="new-price"> $900</span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                    <div class="borderbotum"></div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item">
                       
                        <div class="sale-content">
                            <div class="sale-review">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="#">Surfing at Bahamas</a></h3>
                            <p><i class="flaticon-time"></i> 5 days</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>
                        </div>
                        <div class="sale-tag">
                            <span class="old-price">$1449</span>
                            <span class="new-price"> $900</span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                    <div class="borderbotum"></div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item">
                       
                        <div class="sale-content">
                            <div class="sale-review">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="#">Surfing at Bahamas</a></h3>
                            <p><i class="flaticon-time"></i> 5 days</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>
                        </div>
                        <div class="sale-tag">
                            <span class="old-price">$1449</span>
                            <span class="new-price"> $900</span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                    <div class="borderbotum"></div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item">
                       
                        <div class="sale-content">
                            <div class="sale-review">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="#">Surfing at Bahamas</a></h3>
                            <p><i class="flaticon-time"></i> 5 days</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>
                        </div>
                        <div class="sale-tag">
                            <span class="old-price">$1449</span>
                            <span class="new-price"> $900</span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                    <div class="borderbotum"></div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item">
                        
                        <div class="sale-content">
                            <div class="sale-review">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="#">Surfing at Bahamas</a></h3>
                            <p><i class="flaticon-time"></i> 5 days</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>
                        </div>
                        <div class="sale-tag">
                            <span class="old-price">$1449</span>
                            <span class="new-price"> $900</span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                    <div class="borderbotum"></div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item">
                       
                        <div class="sale-content">
                            <div class="sale-review">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="#">Surfing at Bahamas</a></h3>
                            <p><i class="flaticon-time"></i> 5 days</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>
                        </div>
                        <div class="sale-tag">
                            <span class="old-price">$1449</span>
                            <span class="new-price"> $900</span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                    <div class="borderbotum"></div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item">
                        
                        <div class="sale-content">
                            <div class="sale-review">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="#">Surfing at Bahamas</a></h3>
                            <p><i class="flaticon-time"></i> 5 days</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <a href="tour-detail.html" class="btn-blue btn-red">View More</a>
                        </div>
                        <div class="sale-tag">
                            <span class="old-price">$1449</span>
                            <span class="new-price"> $900</span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                    <div class="borderbotum"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deals On Sale Ends -->
    <div class="borderbotum"></div>
    {{-- <x-footer-tag /> --}}
    <x-footer />
@endsection