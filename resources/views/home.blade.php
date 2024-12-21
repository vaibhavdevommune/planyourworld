@extends('layouts.guest')

@section('content')
<section class="hero-section">
    <div class="container">
        <p class="cfp">By Viplav Majumdar, CFP</p>
        <h1>Money Wise Blueprint</h1>
        <div class="d-flex flex-column align-items-center justify-content-center gap-1">
            <p><strong>SESSION:</strong> Money IQ Class (RECORDED COURSE)</p>
            <p><strong>E-BOOK:</strong> How to replace your salary with alternate pension (FINANCIAL PLANNING GUIDE)</p>
        </div>
        <div class="youtube-video">
            <iframe src="https://www.youtube.com/embed/zqMDmW4jra0?si=7qZZ9EMmT_XmfAHn" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="three-section">
            <div class="row">
                <div class="col-md-4">
                    <p>Leave Dependency On Salary - Learn How To Create Sources For Alternate Income</p>
                </div>
                <div class="col-md-4">
                    <p>Path To Live Your Passion With 5 Years Plan To Replace Sources</p>
                </div>
                <div class="col-md-4">
                    <p>Replace Salary With Income From Business, Franchise, Rental Income With Less Savings = Complete
                        Freedom</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul>
                    <h4 class="section-heading">
                        What you get with the Blueprint?
                    </h4>
                    <ul>
                        <li>
                            Money IQ Class (Recorded Session)
                        </li>
                        <li>
                            E- Book: How To Replace Your Salary With Alternate Pension In 5 Years
                        </li>
                        <li>
                            Assignments: How To Create Passive Income In 5 Years
                        </li>
                        <li>
                            3 Tools
                        </li>
                        <li>
                            Questionnaires
                        </li>
                        <li>
                            Life Time Validity
                        </li>
                    </ul>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-head">
                        <h5>Enroll Now to The Money Wise Blueprint</h5>
                    </div>
                    <div class="card-body">
                        <form action="" class="d-flex flex-column gap-2">
                            <div class="form-group">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" id="fullName" placeholder="Enter Full Name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="emailAddress" class="form-label">Email Address</label>
                                <input type="email" id="emailAddress" placeholder="Enter Email Address"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="tel" id="phoneNumber" placeholder="Enter Phone Number"
                                    class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Buy Now @ <strike>₹3,298</strike> Just For
                                ₹499</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-2">
    <div class="section-heading d-flex align-items-center justify-content-center flex-column">
        <h4>
            What Will You Learn From Session
        </h4>
        <p>
            Get The Practical Way Of Creating 2<sup>nd</sup> Income With My Secret Formula
        </p>
    </div>
    <div class="container">
        <div class="row align-items-center mt-4">
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <!-- Accordion Item 1 -->
                    <div class="accordion-item" data-image="{{asset('assets/images/learn_session.webp')}}">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>1 <sup>st</sup> Part: &nbsp; </strong> Planning Financial Freedom
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>5 Mistakes That Stop People From Creating Alternate Income</li>
                                    <li>Unknown Mystery Of Alternate Income</li>
                                    <li>How Wealthy People Create Alternate Income To Pay Bills For Their Luxury</li>
                                    <li>5 Real Case Study</li>
                                    <li>Assignments</li>
                                </ul>
                            </div>
                            <progress class="progress-bar" max="100" value="0"></progress>
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="accordion-item" data-image="https://placehold.co/600x400">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>2 <sup>nd</sup> Part: &nbsp; </strong> Understanding All Pension Options
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>5 Mistakes That Stop People From Creating Alternate Income</li>
                                    <li>Unknown Mystery Of Alternate Income</li>
                                    <li>How Wealthy People Create Alternate Income To Pay Bills For Their Luxury</li>
                                    <li>5 Real Case Study</li>
                                    <li>Assignments</li>
                                </ul>
                            </div>
                            <progress class="progress-bar" max="100" value="0"></progress>
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="accordion-item" data-image="https://placehold.co/600x400">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>3 <sup>rd</sup> Part: &nbsp; </strong> Implementation In Your Life
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>5 Mistakes That Stop People From Creating Alternate Income</li>
                                    <li>Unknown Mystery Of Alternate Income</li>
                                    <li>How Wealthy People Create Alternate Income To Pay Bills For Their Luxury</li>
                                    <li>5 Real Case Study</li>
                                    <li>Assignments</li>
                                </ul>
                            </div>
                            <progress class="progress-bar" max="100" value="0"></progress>
                        </div>
                    </div>

                    <!-- Accordion Item 4 -->
                    <div class="accordion-item" data-image="https://placehold.co/600x400">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <strong>E-Book: &nbsp; </strong> How To Replace Salary With Alternate Pension In 5 Years
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>5 Mistakes That Stop People From Creating Alternate Income</li>
                                    <li>Unknown Mystery Of Alternate Income</li>
                                    <li>How Wealthy People Create Alternate Income To Pay Bills For Their Luxury</li>
                                    <li>5 Real Case Study</li>
                                    <li>Assignments</li>
                                </ul>
                            </div>
                            <progress class="progress-bar" max="100" value="0"></progress>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dynamic Image Section -->
            <div class="col-md-6">
                <img id="dynamic-image" src="https://placehold.co/600x400" alt="Dynamic Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="section-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul>
                    <h4 class="section-heading">
                        Who Is Viplav Majumdar, CFP ?
                    </h4>
                    <ul>
                        <li>
                            Worked With Wealthy People For Their Passive Income
                        </li>
                        <li>
                            A Seasoned Financial Expert With Experience Of 17+ Years
                        </li>
                        <li>
                            Business And Financial Coach Mentored 200+ CFPs
                        </li>
                        <li>
                            Established CFP Division Of NJ (Largest MF Distributor)
                        </li>
                        <li>
                            Author Of E-Book - 12000+ Copies Sold
                        </li>
                        <li>
                            Creator Of Self Learning Platform For People
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-primary">Buy Now @ <strike>₹3,298</strike> Just For
                        ₹499</button>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="viplav_img">
                    <img src="{{asset('assets/images/viplav_majumdar.webp')}}" alt="">
                    <div class="name">
                        <p>Viplav Majumdar, CFP</p>
                    </div>
                </div>
                <h6 class="text-center">Author, Life & Financial Mentor, Founder of Planyourworld™</h6>
            </div>
        </div>
    </div>
</section>

<section class="section-4">
    <div class="container">
        <div class="section-heading d-flex  flex-column">
            <h4>
                Media Coverage
            </h4>
            <p>
                Learn how to become financially free with money wise blueprint!
            </p>
        </div>
    </div>
    <div class="slide-container swiper">
        <div class="media-coverage">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-0.webp')}}" alt="Image 0">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-1.webp')}}" alt="Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-2.webp')}}" alt="Image 2">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-3.webp')}}" alt="Image 3">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-4.webp')}}" alt="Image 4">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-5.webp')}}" alt="Image 5">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-6.webp')}}" alt="Image 6">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-7.webp')}}" alt="Image 7">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-8.webp')}}" alt="Image 8">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-9.webp')}}" alt="Image 9">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-10.webp')}}" alt="Image 10">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-11.webp')}}" alt="Image 11">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-12.webp')}}" alt="Image 12">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-13.webp')}}" alt="Image 13">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/image-14.webp')}}" alt="Image 14">
                </div>

            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="section-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6">
            <div class="col">
                <img src="{{asset('assets/images/aaj-tak.webp')}}" alt="">
            </div>
            <div class="col">
                <img src="{{asset('assets/images/mint.webp')}}" alt="">
            </div>
            <div class="col">
                <img src="{{asset('assets/images/bs.webp')}}" alt="">
            </div>
            <div class="col">
                <img src="{{asset('assets/images/hindustan-times.webp')}}" alt="">
            </div>
            <div class="col">
                <img src="{{asset('assets/images/outlook.webp')}}" alt="">
            </div>
            <div class="col">
                <img src="{{asset('assets/images/nbt.webp')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section-6">
    <div class="container">
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-section">
                        <img class="quote-icon" src="{{asset('assets/images/say.svg')}}" alt="Quote Icon">
                        <p class="review">
                            I heard about Planyourworld on Facebook and joined it. I want to achieve financial freedom
                            as soon as possible with the help of the team. Learning new things by joining the session.
                        </p>
                        <div class="user-details">
                            <div class="profile">
                                <img src="https://placehold.co/60x60.png" alt="User Profile">
                            </div>
                            <div class="info">
                                <h6 class="name">Bharpur Singh</h6>
                                <p class="position">Project Manager at Infosys</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-section">
                        <img class="quote-icon" src="{{asset('assets/images/say.svg')}}" alt="Quote Icon">
                        <p class="review">
                            Planyourworld has transformed my perspective on financial planning. Highly recommended for
                            anyone seeking to achieve financial independence.
                        </p>
                        <div class="user-details">
                            <div class="profile">
                                <img src="https://placehold.co/60x60.png" alt="User Profile">
                            </div>
                            <div class="info">
                                <h6 class="name">Simran Kaur</h6>
                                <p class="position">Software Engineer at TCS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more slides as needed -->
            </div>
            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<section class="section-7">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 our-review">
                <div class="section-heading d-flex  flex-column">
                    <p>
                        Our Reviews
                    </p>
                    <h4>
                        What Some Of <span class="text-danger">Our Participants</span> Say About Us
                    </h4>
                </div>
                <div class="swiper review-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-section">
                                <img class="quote-icon" src="{{asset('assets/images/say.svg')}}" alt="Quote Icon">
                                <p class="review">
                                    I heard about Planyourworld on Facebook and joined it. I want to achieve financial
                                    freedom
                                    as soon as possible with the help of the team. Learning new things by joining the
                                    session.
                                </p>
                                <div class="user-details">
                                    <div class="profile">
                                        <img src="https://placehold.co/60x60.png" alt="User Profile">
                                    </div>
                                    <div class="info">
                                        <h6 class="name">Bharpur Singh</h6>
                                        <p class="position">Project Manager at Infosys</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-section">
                                <img class="quote-icon" src="{{asset('assets/images/say.svg')}}" alt="Quote Icon">
                                <p class="review">
                                    Planyourworld has transformed my perspective on financial planning. Highly
                                    recommended for anyone seeking to achieve financial independence.
                                </p>
                                <div class="user-details">
                                    <div class="profile">
                                        <img src="https://placehold.co/60x60.png" alt="User Profile">
                                    </div>
                                    <div class="info">
                                        <h6 class="name">Simran Kaur</h6>
                                        <p class="position">Software Engineer at TCS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more slides as needed -->
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="swiper review-video-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="review-video">
                                <iframe src="https://www.youtube.com/embed/6Dic-GMvCDQ?si=Njrn8UH3Mp7EUAaO"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-video">
                                <iframe src="https://www.youtube.com/embed/vBzBgewl4ac" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-video">
                                <iframe src="https://www.youtube.com/embed/LvrfNPqE4Dw?si=cEpudA1QlfLLvWwk"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-video">
                                <iframe src="https://www.youtube.com/embed/z8690KWNrhM?si=e67ko5wW5qY5ybQv"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-video">
                                <iframe src="https://www.youtube.com/embed/0iSqYb9nUz0?si=486huOpzR2A_0Uwp"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next"></div>
                    <!-- <div class="swiper-button-prev"></div> -->
                </div>

            </div>
        </div>
    </div>
</section>

<section class="section-8">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 col-12 ">
                <h4 class="text-center">
                    Start <span class="text-danger">Learning</span> Now
                </h4>
                <form action="" class="d-flex flex-column gap-2 mt-4">
                    <div class="form-group">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" id="fullName" placeholder="Enter Full Name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="emailAddress" class="form-label">Email Address</label>
                        <input type="email" id="emailAddress" placeholder="Enter Email Address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" id="phoneNumber" placeholder="Enter Phone Number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Buy Now @ <strike>₹3,298</strike> Just For
                        ₹499</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection