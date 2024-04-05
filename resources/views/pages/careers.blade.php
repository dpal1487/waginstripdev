@extends('layouts.master')
@section('title', 'XYZ')
@section('body')

<div class="banner-1">
    <div class="bnr-hdr">
        <ul>
            <li><a href="#">Career</a></li>
        </ul>
    </div>
</div>

<div class="title-1">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Careers</a></li>
    </ul>
</div>

<div class="container-1">
    <div class="box-1">
        <div class="left-1">
            <div></div>
        </div>
        <div class="right-1">
            <h1>Working at XYZ</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Esse cumque inventore mollitia assumenda fuga dolor, voluptas,
                possimus quo itaque provident molestiae, ea deserunt.
                Eligendi commodi dolore minus natus quibusdam debitis.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Esse cumque inventore mollitia assumenda fuga dolor, voluptas,
                possimus quo itaque provident molestiae, ea deserunt.
                Eligendi commodi dolore minus natus quibusdam debitis.
            </p>
            <span>Read More</span>
        </div>
    </div>
    <h3>Career Opportunities</h3>
    <h1>The Easiest Way to Get Your New Job</h1>
    <div class="contain-1">
        <div class=box-1>
            <h5>.Net <br>Developer</h5>
            <div></div>
            <p>05 Positions</p>
        </div>
        <div class=box-2>
            <h5>Android </br>Developer</h5>
            <div></div>
            <p>12 Positions</p>
        </div>
        <div class=box-3>
            <h5>Online <br>Operation</h5>
            <div></div>
            <p>15 Positions</p>
        </div>
        <div class=box-4>
            <h5>Customer <br>Executive</h5>
            <div></div>
            <p>10 Positions</p>
        </div>
        <div class=box-5>
            <h5>Team <br>Leader</h5>
            <div></div>
            <p>12 Positions</p>
        </div>
    </div>
    <h6>Recently Added Jobs</h6>
    <h1>Featured Jobs Posts For This Week</h1>
    <div class="Job-title-1">
        <p>FULLTIME</p>
        <h5>.Net Developer</h5>
        <button class="card-link" data-toggle="collapse" href="#collapseExample">View Details</button>
        <h4><i class="fa fa-map-marker"></i> Delhi</h4>
        <div class="collapse" id="collapseExample" href="#collapseExample">
            <h3 class="job-dec">Job Description</h3>
            <p class="details-1">The developer will be responsible for building .NET applications,
                including anything from back-end services to their client-end counterparts.
                The developer will be required to coordinate with the rest of the team working
                on different layers of the infrastructure and therefore, a commitment to
                collaborative problem solving, sophisticated design and ensuring
                the quality of the product is essential.</p>
            <h6 class="details-2">Job Responsibilities</h6>
            <ul>
                <li> Minimum 1+ year of experience in MVC,</li>
                <li> Good knowledge of .Net</li>
                <li> Good knowledge of JQuery & Web API.</li>
                <li> Good knowledge of writing procedures & queries on MS-SQL.</li>
                <li>Experience in working & managing modules.</li>
                <li>Strong analytical and problem-solving skills coupled</li>
                <li>Excellent analytical, problem solving and time management skills.</li>
                <li>Good team player.</li>
            </ul>
        </div>
    </div>

    <div class="Job-title-1">
        <p>FULLTIME</p>
        <h5>Android Developer</h5>
        <button data-toggle="collapse">View Details</button>
        <h4><i class="fa fa-map-marker"></i> Delhi</h4>
    </div>

    <div class="Job-title-1">
        <p>FULLTIME</p>
        <h5>Online Operation</h5>
        <button>View Details</button>
        <h4><i class="fa fa-map-marker"></i> Delhi</h4>
    </div>

    <div class="Job-title-1">
        <p>FULLTIME</p>
        <h5>Customer Executive</h5>
        <button>View Details</button>
        <h4><i class="fa fa-map-marker"></i> Delhi</h4>
    </div>

    <div class="Job-title-1">
        <p>FULLTIME</p>
        <h5>Team Leader</h5>
        <button>View Details</button>
        <h4><i class="fa fa-map-marker"></i> Delhi</h4>
    </div>
</div>
<div class="container-3">
    <div class="contain-3">
        <div class="pt-20 pb-10">
            <form style="padding: 17px; border-radius:5px">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1" class="slitxt">Job Title</label>
                            <input type="text" class="form-control" placeholder="Job Title" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="validationCustom01" class="slitxt">First name</label>
                            <input type="text" class="form-control" placeholder="First Name" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="slitxt">Email address</label>
                            <input type="email" class="form-control" placeholder="Email Address" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1" class="slitxt">Phone Number</label>
                            <input type="number" class="form-control" placeholder="Phone Number" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1" class="slitxt">Address</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1" class="slitxt">Upload Your CV</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<div class="container-2">
    <div class="contain-2">
        <div>
            <img src="assets/images/career/interns.svg" alt="">
            <h3>Interns/Students</h3>
            <p>We’re always on the hunt for great talent. We welcome Interns and train them to enter a new world.</p>
        </div>
        <div>
            <img src="assets/images/career/Graduates.svg" alt="">
            <h3>Graduates</h3>
            <p>We recruit Graduates and give them an opportunity to have exposure to our industry.</p>
        </div>
        <div>
            <img src="assets/images/career/Professionals.svg" alt="">
            <h3>Professionals</h3>
            <p>We would love to work with Professionals. We welcome everyone’s knowledge and experience.</p>
        </div>
        <div>
            <img src="assets/images/career/Industry-xperts.svg" alt="">
            <h3>Industry Experts</h3>
            <p>We hire Industry Experts, leaders, and influencers who can add value to our company.</p>
        </div>
    </div>
</div>
<div class="pb-20"></div>
<div class="borderbotum"></div>
{{-- <x-footer-tag /> --}}
<x-footer />
@endsection<!-- Jumbotron -->
