@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="trip-ideas-banner">
    <div class="sec12">
        <h1>The Most Romantic Places To Experience The Magic Of Love!</h1>
        <p>Romantic Places - Explore the list of romantic destinations and plan a
            passionate vacation exclusively for the two of you.
            Indulge into exotic activities and make fond memories.</p>
        <h5>Travelling from <span>Select City</span></h5>
    </div>
</div>

<!-- First Card -->
<div class="tour-section-1">
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/1.jpg" alt="">
        <span>1</span>
        <h5>Bali</h5>
        <p class="tbp">Tropical Beach Paradise</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
       <a href="{{ url('/tour-place') }}">
       <button>Explore</button>
       </a>
    </div>
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/2.jpg" alt="">
        <span>2</span>
        <h5>Coorg</h5>
        <p class="tbp">Scenic Hill Station in Karnataka</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
        <button>Explore</button>
    </div>
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/3.jpg" alt="">
        <span>3</span>
        <h5>Bentota</h5>
        <p class="tbp">Scenic Hill Station in Karnataka</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
        <button>Explore</button>
    </div>
</div>
<!-- Second Card -->
<div class="tour-section-1">
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/4.jpg" alt="">
        <span>4</span>
        <h5>Gulmarg</h5>
        <p class="tbp">Heaven in the White Hills of Kashmir</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
        <button>Explore</button>
    </div>
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/5.jpg" alt="">
        <span>5</span>
        <h5>Havelock Island</h5>
        <p class="tbp">Picturesque Tropical Getaway in the Andamans</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
        <button>Explore</button>
    </div>
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/6.jpg" alt="">
        <span>6</span>
        <h5>Lakshadweep</h5>
        <p class="tbp">Tropical Band of Islands</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
        <button>Explore</button>
    </div>
</div>
<!-- Third Card -->
<div class="tour-section-1">
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/8.jpg" alt="">
        <span>7</span>
        <h5>Bali</h5>
        <p class="tbp">Tropical Beach Paradise</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
        <button>Explore</button>
    </div>
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/9.jpg" alt="">
        <span>8</span>
        <h5>Bali</h5>
        <p class="tbp">Tropical Beach Paradise</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
        <button>Explore</button>
    </div>
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/10.jpg" alt="">
        <span>9</span>
        <h5>Bali</h5>
        <p class="tbp">Tropical Beach Paradise</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
        <button>Explore</button>
    </div>
</div>
<!-- Forth Card -->
<div class="tour-section-1">
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/1.jpg" alt="">
        <span>1</span>
        <h5>Bali</h5>
        <p class="tbp">Tropical Beach Paradise</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
        <button>Explore</button>
    </div>
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/2.jpg" alt="">
        <span>1</span>
        <h5>Bali</h5>
        <p class="tbp">Tropical Beach Paradise</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
        <button>Explore</button>
    </div>
    <div class="tour-card">
        <img class="pulse" src="assets/images/holiday/3.jpg" alt="">
        <span>1</span>
        <h5>Bali</h5>
        <p class="tbp">Tropical Beach Paradise</p>
        <h6>Celebrate your romance with a couple getaway at Bali.
            You can expect frequent heavy rainfalls with high humidity levels.
            Do not forget to sample the delicious cuisines at Bali.</h6>
        <button>Explore</button>
    </div>
</div>

<!-- Fifth Card -->
<div class="tour-section-2">
    <h3 class="font-weight-bold float-left">More Romantic Places</h3>
    <div id="tourSilder1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="tour-sider-1">
                    <div class="pulse">
                        <h6>1</h6>
                    </div>
                    <div class="pulse">
                        <h6>2</h6>
                    </div>
                    <div class="pulse">
                        <h6>3</h6>
                    </div>
                    <div class="pulse">
                        <h6>4</h6>
                    </div>
                    <div class="pulse">
                        <h6>5</h6>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="tour-sider-1">
                    <div class="pulse">
                        <h6>6</h6>
                    </div>
                    <div class="pulse">
                        <h6>7</h6>
                    </div>
                    <div class="pulse">
                        <h6>8</h6>
                    </div>
                    <div class="pulse">
                        <h6>9</h6>
                    </div>
                    <div class="pulse">
                        <h6>10</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tourbtnslder">
        <button class="btn85 mb-1 mr-1" href="#tourSilder1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </button>
        <button class="btn86 mb-1 " href="#tourSilder1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </button>
    </div>
</div>
<!-- Sixth Card -->
<div class="tour-section-3">
    <h2 class="font-weight-bold">Treat your partner to a passionate vacation at a romantic destination</h2>
    <p class="pt-3 text-justify">It is always blissful to take a break away from your daily routine and escape to a
        romantic
        destination with your someone special to you. Or you may just want to surprise your partner
        on a special day with a romantic vacation. That’s when the list of romantic trip ideas will
        help you sketch out your itinerary. If you admire the tranquillity and scenic beauty of
        quaint hill stations, visit places like Shimla, Manali, Kodaikanal, Coorg, Lonavala &
        Khandala, Mahabaleshwar, Chail, Pahalgam, etc. For a beach vacation, select from a
        variety of options ranging from Havelock Island, Maldives, Bali, Tarkarli, Bentota,
        Lakshadweep, Langkawi, Krabi, Goa, Gokarna and many more. And, if you are excited
        about an offbeat city or countryside tour where you can sample mouth-watering local
        delicacies, you can choose from options such as Agra, Srinagar, Udaipur, Alleppey,
        Jaipur, Wayanad, Kandy, etc. Book an exotic stay at a resort or a private villa and
        spend time indulging into passionate activities like dipping in a turquoise pool
        under the starry night sky, strolling on a sandy beach, relishing a scrumptious
        dinner on a candlelight date, spending a passionate night at a
        specially decorated suite or enjoying the ocean waves on a cruise.</p>
</div>
<!-- Seventh Card -->
<div class="tour-section-4">
    <h1 class="font-weight-bold">FAQs - Frequently Asked Questions</h1>
    <div>
        <h5>What are some of the best romantic destinations in the hills?</h5>
        <p>Unwind with your partner at some of the most scenic hill stations in India. The best
            romantic destinations in the hills include Shimla, Manali, Munnar, Lonavala &
            Khandala, Mahabaleshwar, Chail, Pahalgam, Kodaikanal, Coorg, Kasauli, Mussoorie,
            Gangtok, Ooty, Panchgani, Chikmagalur, Khajjiar, Gulmarg, Darjeeling, Yercaud,
            and many more. Indulge in passionate experiences, explore the local culture and admire the sunset over the
            vast
            hills.</p>
    </div>
    <div>
        <h5>What are some of the best beachside romantic destinations?</h5>
        <p>If you're looking for exotic destinations for your romantic getaway, take a look at locations like Havelock
            Island,
            Maldives, Bali, Tarkarli, Bentota, Lakshadweep, Langkawi, Krabi, Goa, Gokarna, Diveagar
            and Pondicherry. Unwind with your partner, experience the sand in your feet, the sun over
            your head and the refreshing drinks in your hand.</p>
    </div>
    <div>
        <h5>What are some of the offbeat location to explore on a romantic vacation?</h5>
        <p>Discover off-beat destinations, unique cities and the countryside on your next trip.
            Explore locations like Agra, Srinagar, Udaipur, Alleppey, Jaipur, Wayanad and Kandy.
            You will be surprised by the number of such offbeat destinations around the world and
            their uniqueness. Savour the local cuisine, interact with the
            natives and soak in the culture of the place.</p>
    </div>
</div>

<!-- Eight Card -->
<div class="tour-section-5">
    <h3 class="font-weight-bold">FAQs - Frequently Asked Questions</h3>
    <ul>
        <li> <a href="">Mashobra</a></li>
        <li> <a href="">Hanoi</a></li>
        <li> <a href="">Shillong</a></li>
        <li><a href="">Srinagar</a></li>
        <li> <a href="">Jodhpur</a></li>
        <li> <a href="">Varanasi</a></li>
        <li><a href="">Udaipur</a></li>
        <li> <a href="">Belgaum</a></li>
        <li> <a href="">Orchha</a></li>
        <li> <a href="">Sariska Tiger Reserve</a></li>
        <li> <a href="">Santorini</a></li>
        <li> <a href="">Auli</a></li>
    </ul>
</div>

<!-- DESKTOP VIEW END   -->
<x-footer />
@endsection
