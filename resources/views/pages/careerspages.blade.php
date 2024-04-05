@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="container-fluid career_pages p-0">
    <div class="container mobileVes1">
        <h4 style="text-align:center; padding-top:230px; color:#fff;">
        </h4>
        <h1 class="text-center font-weight-bold" style="color:#fff;">The Easiest Way to Get Your New Job</h1>
    </div>
</div>

<div class="container mobileVes1 cardsres mb-5 mt-5">
    <div class="row">
        <div class="col-sm-3 p-3">
            <div class="card ">
                <img class="card-img-top" src="assets/images/career/back.png" alt="" style="height:180px;">
                <div class="card-body">
                    <h5 class="card-title">Backend Developer</h5>
                    <p>15 Postions</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="card">
                <img class="card-img-top" src="assets/images/career/fullstack.jpg" alt="" style="height:180px;">
                <div class="card-body">
                    <h5 class="card-title">Front-End Developer</h5>
                    <p>15 Postions</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="card">
                <img class="card-img-top" src="assets/images/career/frontend.jpg" alt="" style="height:180px;">
                <div class="card-body">
                    <h5 class="card-title">Digital Marketing</h5>
                    <p>15 Postions</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="card">
                <img class="card-img-top" src="assets/images/career/digitalmarketing.png" alt="" style="height:180px;">
                <div class="card-body">
                    <h5 class="card-title">Travel Sales & Operations</h5>
                    <p>15 Postions</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row" style="margin-top:30px;">
        <div class="col-sm-3 p-3">
            <div class="card">
                <img class="card-img-top" src="assets/images/career/seo.jpg" alt="" style="height:180px;">
                <div class="card-body">
                    <h5 class="card-title">SEO Marketing</h5>
                    <p>15 Postions</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="card">
                <img class="card-img-top" src="assets/images/career/operation.png" alt="" style="height:180px;">
                <div class="card-body">
                    <h5 class="card-title">Operations</h5>
                    <p>15 Postions</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="card">
                <img class="card-img-top" src="assets/images/career/customer.jpg" alt="" style="height:180px;">
                <div class="card-body">
                    <h5 class="card-title">Customer Executive</h5>
                    <p>15 Postions</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="card">
                <img class="card-img-top" src="assets/images/career/teamleader.png" alt="" style="height:180px;">
                <div class="card-body">
                    <h5 class="card-title">Team Leader</h5>
                    <p>15 Postions</p>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<div class="container mobileVes1 mb-5 mt-5">
    <h4 class="m-0">Recently Added Jobs</h4>
    <h1 class="m-0 font-weight-bold">Featured Jobs Posts For This Week</h1>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div id="accordion" class="mt-2">
                <div class="card boxshowadersrs p-3">
                    <div class="card-header border-0" id="headingOne">
                        <h5 class="m-0 text-primary">Job Title:</h5>
                        <h3 class="m-0 pt-2">Backend Developer</h3>
                        <h6 class="m-0 pt-2 float-left text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Delhi</h6>
                        <a href="#" class="float-right careerbuttons font-weight-bold mb-3" data-toggle="collapse"
                            data-target="#backendDev" aria-expanded="true" aria-controls="backendDev">View Details</a>
                    </div>

                    <div id="backendDev" class="collapse mt-2 mb-2" aria-labelledby="backendDev"
                        data-parent="#accordion">
                        <div class="card-body">
                            <h4>Job Summary</h4>
                            <p> We are searching for an accomplished Back-end designer to join our IT group! As a
                                Back-end Developer, you will be liable for the server-side web application rationale as
                                well concerning the coordination of the front-end part.


                            </p>

                            <h4>Roles and Responsibilities</h4>
                            <ul>
                                <li>Be involved and take part in the general application lifecycle</li>
                                <li>Principal center around coding and troubleshooting </li>
                                <li>Team up with Front-end engineers.</li>
                                <li>Characterize and convey specialized and plan necessities</li>
                                <li>Give preparing, help and backing to other colleagues</li>
                                <li>Assemble excellent reusable code that can be utilized in thaw future</li>
                                <li>Foster practical and maintainable web applications with clean codes</li>
                                <li>Investigate and troubleshoot applications</li>
                                <li>Find out about new advances</li>
                                <li>Keep awake to date with current accepted procedures</li>
                                <li>Lead UI tests and advance execution</li>
                                <li>Oversee state of the art advances to further develop applications</li>
                                <li>Work together with multidisciplinary group of fashioners, engineers and framework
                                    directors</li>
                                    <li>Partake in gatherings and instructive projects</li>
                                    <li>Follow new and arising advancements</li>
                            </ul>
                            <h4>Requirements and Skills</h4>
                            <ul>
                                <li>Top to bottom comprehension of web improvement</li>
                                <li>Knowledge of front-end dialects like HTML, JavaScript and CSS</li>
                                <li>Basic mastermind and critical thinking abilities</li>
                                <li>Cooperative person</li>
                                <li>Great authoritative and time-usage abilities</li>
                                <li>Incredible relational and relational abilities</li>
                                <li>BA degree in Computer Science or comparable pertinent field</li>

                            </ul>   

                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div id="accordion" class="mt-2">
                <div class="card boxshowadersrs p-3">
                    <div class="card-header border-0" id="headingOne">
                        <h5 class="m-0 text-primary">Job Title:</h5>
                        <h3 class="m-0 pt-2">Front-End Developer</h3>
                        <h6 class="m-0 pt-2 float-left text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Delhi</h6>
                        <a href="#" class="float-right careerbuttons font-weight-bold mb-3" data-toggle="collapse"
                            data-target="#frontend" aria-expanded="true" aria-controls="frontend">View Details</a>
                    </div>

                    <div id="frontend" class="collapse mt-2 mb-2" aria-labelledby="frontend" data-parent="#accordion">
                        <div class="card-body">
                            <h4>Job Summary</h4>
                            <p> Front end developers are computer programmers who specialize in website design. Front
                                end developer duties include determining the structure and design of web pages, striking a
                                balance between functional and aesthetic design, and ensuring web design is optimized
                                for Smartphone’s.
                            </p>

                            <h4>Roles and Responsibilities</h4>
                            <ul>
                                <li>Use markup languages like HTML to create user-friendly web pages</li>
                                <li>Maintain and improve website</li>
                                <li>Optimize applications for maximum speed</li>
                                <li>Design mobile-based features</li>
                                <li>Collaborate with back-end developers and web designers to improve usability</li>
                                <li>Get feedback from, and build solutions for, users and customers</li>
                                <li>Write functional requirement documents and guides</li>
                                <li>Create quality mockups and prototypes</li>
                                <li>Help back-end developers with coding and troubleshooting</li>
                                <li>Ensure high quality graphic standards and brand consistency</li>
                                <li>Stay up-to-date on emerging technologies</li>
                               
                            </ul>
                            <h4> Reuired Skills</h4>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                                <li>DOM Manipulation</li>
                                <li>JSON</li>
                                <li>AJAX</li>
                                <li>Node.js</li>
                                <li>MySQL</li>
                                <li>React</li>
                                <li>Java</li>
                                <li>Problem-Solving</li>                               
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div id="accordion" class="mt-2">
                <div class="card boxshowadersrs p-3">
                    <div class="card-header border-0" id="headingOne">
                        <h5 class="m-0 text-primary">Job Title:</h5>
                        <h3 class="m-0 pt-2">Digital Marketing</h3>
                        <h6 class="m-0 pt-2 float-left text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Delhi</h6>
                        <a href="#" class="float-right careerbuttons font-weight-bold mb-3" data-toggle="collapse"
                            data-target="#digitalMarketing" aria-expanded="true" aria-controls="digitalMarketing">View
                            Details</a>
                    </div>

                    <div id="digitalMarketing" class="collapse mt-2 mb-2" aria-labelledby="digitalMarketing"
                        data-parent="#accordion">
                        <div class="card-body">
                            <h4>Job Summary</h4>
                            <p> A Digital Marketing Manager is responsible for developing and implementing strategies
                                that promote a company or brand&#39;s products. They manage various channels like social
                                media networks, Google Ads, website content and email marketing to deliver a
                                persuasive and cohesive marketing message to their audience
                            </p>

                            <h4>Roles and Responsibilities</h4>
                            <ul>
                                <li>Keep up-to-date with trends</li>
                                <li>Manage marketing insights</li>
                                <li>Plan and supervise marketing campaigns</li>
                                <li>Look into customer relationship management (CRM)</li>
                                <li>Website management and optimization</li>
                                <li>Social media page optimization</li>
                                <li>Track website traffic and other metrics</li>
                                <li>Optimize performance of the website</li>
                                <li>Give ideas as to how to increase ROI (returns on investment)</li>
                                <li>Provide reports to the managing teams and clients</li>
                                <li>Supervise and overlook marketing teams</li>
                                <li>Pitch new ideas to the client</li>
                            </ul>
                            <h4>Requirements</h4>
                            <ul>
                                <li>Writing &amp; Editing</li>
                                <li>SEO</li>
                                <li>Design Skills</li>
                                <li>Social Paid Advertising</li>
                                <li>Top-Notch Personal Brand</li>
                                <li>Word-Press</li>
                                <li>Excel Proficiency</li>
                                <li>Social Media Marketing</li>
                                <li>Email Marketing &amp; Newsletters</li>
                                <li>Google Adwords &amp; PPC</li>
                                <li>Conversion Rate Optimization (CRO):</li>
                                <li>Marketing Automation</li>
                                <li>PowerPoint Design</li>
                                <li>Influencer Marketing</li>
                                <li>HTML &amp; CSS:</li>
                                <li>Creative &amp; Analytical Abilities:</li>
                            </ul>

                            <h4> Reuired Skills</h4>
                            <ul>
                                <li>Data Analysis</li>
                                <li>Content Creation</li>
                                <li>SEO &amp; SEM</li>
                                <li>CRM</li>
                                <li>Communication Skills</li>
                                <li>Social Media</li>
                                <li>Basic Design Skills</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div id="accordion" class="mt-2">
                <div class="card boxshowadersrs p-3">
                    <div class="card-header border-0" id="headingOne">
                        <h5 class="m-0 text-primary">Job Title:</h5>
                        <h3 class="m-0 pt-2">Travel Sales Operations</h3>
                        <h6 class="m-0 pt-2 float-left text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Delhi</h6>
                        <a href="#" class="float-right careerbuttons font-weight-bold mb-3" data-toggle="collapse"
                            data-target="#seomarketing" aria-expanded="true" aria-controls="seomarketing">View
                            Details</a>
                    </div>

                    <div id="seomarketing" class="collapse mt-2 mb-2" aria-labelledby="seomarketing"
                        data-parent="#accordion">
                        <div class="card-body">
                            <h4>Job Summary</h4>
                            <p> Arranging Hotel Booking, Flight Booking, other transport bookings as per the Travel
                                itineraries in very effective and systematic manner to optimize time slots and priority.
                                Follow up with clients by phone/email about their queries. Keeping track on
                                documentation, payments.
                            </p>

                            <h4>Roles and Responsibilities</h4>
                            <ul>
                                <li>Making quotation, travel itineraries, tour packages, costing to the customers</li>
                                <li>Arranging Hotel Booking, Flight Booking, other transport bookings as per the Travel
                                    itineraries in very effective and systematic manner to optimize time slots and priority.</li>
                                <li>Communicating with suppliers &amp; service providers</li>
                                <li>Answering Calls both In-bound and Out-bound</li>
                                <li>Follow up with clients by phone/email about their queries.</li>
                                <li>Keeping track on documentation, payments.</li>
                                <li>Follow-up with customers for feedback  about their experience of the tour and service</li>
                                <li>Follow the set SLA and guidelines</li>
                                <li>Meet the set target</li>
                            </ul>
                            
                            <h4> Reuired Skills</h4>
                            <ul>
                                <li>Sales Process</li>
                                <li>Customer Service</li>
                                <li>Sales force</li>
                                <li>Sales Goals</li>
                                <li>CRM</li>
                                <li>Project Management</li>
                                <li>Territory</li>
                                <li>Other Skills</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
 
    
    
</div>

<div class="container mobileVes1 careersubmitform p-4 mb-5 mt-5">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Job title</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter job title">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter full name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mobile</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter your mobile">
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Upload your Resume</label>
            <div class="invalid-feedback">Upload Your Resume</div>
        </div>
        
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>


<x-frontend.sections.mobile-view-pages />

<!-- Desktop End  -->
<div class="dpnr">
    <x-footer />
</div>
@endsection
