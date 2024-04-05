@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
    <!-- Desktop View Start -->

    <div class="jumbotron samarser jumbotron-fluid mb-5" style="margin-top:80px;">
        <div class="container mobileVes1">
            <h1 class="display-4 text-white">Best Places to Visit in Spain.</h1>
        </div>
    </div>

    <div class="container mobileVes1 hotel_offerssect mt-n4 p-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('blog-page') }}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Best Places to Visit in Spain.</li>
            </ol>
        </nav>
    </div>

    <div class="container mobileVes1 blogsliders mb-5">
        <h4 class="card-title font-weight-bold">Best Places to Visit in Spain.</h4>
        <div class="row">
            <div class="col-sm-7">
                <p>
                    Madrid is definitely in the most beautiful cities in Spain and additionally a great destination for a
European vacation. Famous for its wealthy cultural heritage, true delicacies and liveliest nightlife, the
Spanish capital city is elegant and stylish with ornate architecture, wide boulevards, manicured parks
and royal palaces. The Royal Palace, Puerta del Sol and Plaza Mayor are the top places to visit in Madrid
as a part of Honeymoon Packages. Besides, Madrid is famed for its art and culture, with than 70
museums inclusive of the world-well-known Prado Museum, the Thyssen-Bornemisza Museum and
Centro de Arte Reina Sofia, which holds a number of Europe’s maximum famous works from Picasso’s
Guernica to Velázquez’s Las Meninas.
Located along the Mediterranean Sea, Barcelona is the colorful capital city of Catalonia. This modern city
is one of the best European destinations for Indians in addition to foreigners for its lovely location, rich
culture, excellent art and architecture, tasty local cuisine, sunny beaches, buzzing nightlife and eye-
popping sightseeing attractions. Casa Batllo, Sagrada Familia church, La Rambla, Barri Gòtic, Casa Mila,
City Beaches, Park Guell, Barcelona City History Museum, Montjuic and Monestir de Pedralbes are the
must visit places in Barcelona as part of the Europe Packages. One also can also visit some super
museums dedicated to Picasso and Miró, Barcelona’s once resident artists alongside La Boqueria, a local
market that dates back to the 13 century where in you could sample some of the best food in Spain.
Seville is the capital of Andalusia and additionally the fourth biggest city in Spain. With its fun-loving
locals, incredible tourist attractions, lovely festivals and colorful nightlife make Seville one of the top
places to visit in Spain. This Andalusian city is also one of Europe’s biggest historic destinations as it&#39;s
home to treasures just like the General Archive of the Indies, the Reales Alcazars palace, and the Santa
Maria de los angeles Sede Cathedral (containing the stays of Christopher Columbus). At night, Seville’s
pleasant and welcoming spirit really shines through, and you can listen to live music and enjoy delicious
tapas with the local beer, Cruzcampo in someone of the bars. Plan your Spain Trip during the yearly
Feria de Abril festival, where your extraordinary performances by local artists.

                </p>

            </div>
            <div class="col-sm-5">
                <div class="card">
                    <img src="assets/images/blog/blog-19.jpg" alt="">
                </div>
                <div class="card mt-3">
                    <img src="assets/images/blog/blog-21.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 p-4">
                <div class="card">
                    <img src="assets/images/blog/blog-25.jpg" alt="">
                </div>
            </div>
            <div class="col-sm-6 p-4">
                <div class="card">
                    <img src="assets/images/blog/blog-23.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <x-frontend.sections.mobile-view-pages />
    <!-- Desktop End  -->
    <div class="dpnr">
        <x-footer />
    </div>
@endsection
