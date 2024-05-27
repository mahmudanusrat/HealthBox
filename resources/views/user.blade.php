@extends('layouts.base')

<!-- Preloader -->
{{--<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>

        <div class="indicator">
            <svg width="16px" height="12px">
                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
        </div>
    </div>
</div>--}}
<!-- End Preloader -->

<!-- Get Pro Button -->


<!-- Header Area -->

    <!-- Topbar -->

    <!-- End Topbar -->
    <!-- Header Inner -->
    <!-- End Header Area -->
@section('body')
    <!-- Slider Area -->
    <section class="slider container">
        <div id="carouselExampleIndicators" class=" carousel slide" data-ride="carousel" style="width: ">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/slider.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/slider2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/slider3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-primary" style="width: 2rem" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-primary" style="width: 2rem" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--/ End Slider Area -->

        <!-- Start Schedule Area -->
        <section class="schedule">
            <div class="container">
                <div class="schedule-inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 ">
                            <!-- single-schedule -->
                            <div class="single-schedule first">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fa fa-ambulance"></i>
                                    </div>
                                    <div class="single-content">
                                        <span></span>
                                        <h4>Emergency Cases</h4>
                                        <p>Burns, Severe Allergic Reaction (Anaphylaxis), Stroke Symptoms, Seizures, Diabetic Emergency, Poisoning, Severe Bleeding, Breathing Difficulty etc.</p>
                                        <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- single-schedule -->
                            <div class="single-schedule middle">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icofont-prescription"></i>
                                    </div>
                                    <div class="single-content">
                                        <span></span>
                                        <h4>Doctors Timetable</h4>
                                        <p> Monday       - Dr. Smith        <br>  - Internal Medicine   - 9:00 AM - 5:00 PM              - Cardiology (2:00 PM - 4:00 PM)<br>
                                            Thursday     - Dr. Davis       <br>   - Dermatology        - 9:30 AM - 4:30 PM              <br>- Acne Care (1:00 PM - 3:00 PM)<br>
                                            Friday       - Dr. Williams     <br>  - Gynecology          - 8:00 AM - 4:00 PM             <br> - Women's Health (2:00 PM - 4:00 PM)</p>
                                        <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <!-- single-schedule -->
                            <div class="single-schedule last">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icofont-ui-clock"></i>
                                    </div>
                                    <div class="single-content">
                                        <span></span>
                                        <h4>Opening Hours</h4>
                                        <ul class="time-sidual">
                                            <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                                            <li class="day">Saturday <span>9.00-18.30</span></li>
                                            <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                                        </ul>
                                        <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/End Start schedule Area -->

        <!-- Start Feautes -->
        <section class="Feautes section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Are Always Ready to Help You & Your Family</h2>
                            <img src="img/section-img.png" alt="#">
                            <p>Welcome to our smart healthcare community, where your well-being is our top priority. At HealthBox, we are always ready to extend a helping hand to you and your family. Our dedicated team of healthcare professionals is committed to providing personalized care and support, ensuring that you experience the highest quality of service.</p>

                            <p>Your health journey is our shared responsibility, and we are dedicated to building a lasting partnership with you and your loved ones. With HealthBox, trust that you have a reliable ally for all your healthcare needs – because we believe in a healthier, happier tomorrow, today.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <!-- Start Single features -->
                        <div class="single-features">
                            <div class="signle-icon">
                                <i class="icofont icofont-ambulance-cross"></i>
                            </div>
                            <h3>Emergency Help</h3>
                            <p>We guarantee prompt service during urgent situations. With only a few clicks, you may get complete support, share your location for quick response, and communicate in real-time with healthcare specialists. You may be confident that we value your privacy. You may rely on us to be your trustworthy friend when you need us.</p>
                        </div>
                        <!-- End Single features -->
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- Start Single features -->
                        <div class="single-features">
                            <div class="signle-icon">
                                <i class="icofont icofont-medical-sign-alt"></i>
                            </div>
                            <h3>Enriched Pharmecy</h3>
                            <p>where we encounter individualized care. Our advanced online platform simplifies prescription management, offering convenience at your fingertips. Trust our team of dedicated pharmacists for expert advice and a comprehensive range of high-quality medications. We go beyond traditional services, providing holistic healthcare solutions to enrich your life. Experience the future of pharmacy with Enriched – where innovation and compassion converge for your well-being."</p>
                        </div>
                        <!-- End Single features -->
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- Start Single features -->
                        <div class="single-features last">
                            <div class="signle-icon">
                                <i class="icofont icofont-stethoscope"></i>
                            </div>
                            <h3>Medical Treatment</h3>
                            <p>Experience a new era of healthcare with our smart medical treatments. We blend cutting-edge technology with personalized care, offering precision diagnostics, tailored therapies, and a connected ecosystem. Our commitment is to provide accessible, intelligent, and compassionate medical treatment, ensuring a healthier and happier life for all. Welcome to the future of healthcare, where innovation meets care.</p>
                        </div>
                        <!-- End Single features -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Feautes -->




        <!-- Start Fun-facts -->
        <div id="fun-facts" class="fun-facts section overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="icofont icofont-home"></i>
                            <div class="content">
                                <span class="counter">3468</span>
                                <p>Hospital Rooms</p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="icofont icofont-user-alt-3"></i>
                            <div class="content">
                                <span class="counter">557</span>
                                <p>Specialist Doctors</p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="icofont-simple-smile"></i>
                            <div class="content">
                                <span class="counter">4379</span>
                                <p>Happy Patients</p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="icofont icofont-table"></i>
                            <div class="content">
                                <span class="counter">32</span>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Fun-facts -->

        <!-- Start Why choose -->
        <section class="why-choose section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Offer Different Services To Improve Your Health</h2>
                            <img src="assets/img/section-img.png" alt="#">
                            <p>Discover a personalized approach to health at our smart healthcare platform. From preventive care to specialized treatments, our diverse services cater to your unique needs. Our expert team, fueled by cutting-edge technology, provides high-quality, patient-centered care. Whether you're proactively improving or managing a condition, trust us to be your partner in optimal well-being. Experience the future of healthcare with our smart solutions. Your health, our priority.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Left -->
                        <div class="choose-left">
                            <h3>Who We Are</h3>
                            <p>We're more than a healthcare provider; we're a dedicated team committed to your well-being. Our mission is to inspire healthier lives through innovative solutions. With cutting-edge technology like predictive analytics and telemedicine, we personalize your healthcare experience. We're not just about data; we're your partners in health, focusing on mind, body, and spirit. Experience healthcare that's intelligent, compassionate, and tailored to you. Welcome to the future of wellness – welcome to us. </p>

                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list">
                                        <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh.</li>
                                        <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                        <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list">
                                        <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh.</li>
                                        <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                        <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Choose Left -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Rights -->
                        <div class="choose-right">
                            <div class="video-image">
                                <!-- Video Animation -->
                                <div class="promo-video">
                                    <div class="waves-block">
                                        <div class="waves wave-1"></div>
                                        <div class="waves wave-2"></div>
                                        <div class="waves wave-3"></div>
                                    </div>
                                </div>
                                <!--/ End Video Animation -->
                                <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4"
                                   class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <!-- End Choose Rights -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Why choose -->

        <!-- Start Call to action -->
        <section class="call-action overlay" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <h2>Do you need Emergency Medical Care? Call +880 1234 567899</h2>
                            <p>Your health is our priority! If you find yourself in need of immediate medical care, don't hesitate – call our dedicated Emergency Medical Care hotline at 1234 56789. Trust us to deliver prompt and efficient emergency medical care when you need it most. Your safety is our commitment – call now, and let us be your partner in health.</p>
                            <div class="button">
                                <a href="#" class="btn">Contact Now</a>
                                <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Call to action -->

        <!-- Start portfolio -->
        <section class="portfolio section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
                            <img src="assets/img/section-img.png" alt="#">
                            <p>Step into our hospital, where cleanliness is our top priority. Our dedicated team ensures every inch is spotless, from common areas to patient rooms. Rigorous sterilization protocols and regular sanitation keep infections at bay. We believe in a culture of responsibility, where staff and visitors contribute to a pristine environment. Your well-being is paramount, and our commitment to cleanliness reflects our dedication to providing a safe and healing space. Experience the difference at our hospital – where health meets hygiene.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End portfolio -->

        <!-- Start service -->
        <section class="services section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Offer Different Services To Improve Your Health</h2>
                            <img src="assets/img/section-img.png" alt="#">
                            <p>Your one-stop destination for a healthier you! We offer a range of personalized services to elevate your well-being, from advanced medical consultations to cutting-edge fitness programs. Our experienced team is committed to providing top-notch care, leveraging innovative technologies to empower you with the tools needed for informed health decisions. Join us on this journey towards lasting vitality and discover the future of smart healthcare at HealthBox.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-prescription"></i>
                            <h4><a href="service-details.html">General Treatment</a></h4>
                            <p>Experience tailored General Treatment plans, advanced diagnostics, and convenient telemedicine. Our collaborative ecosystem ensures comprehensive care, while continuous monitoring and educational resources empower you on your wellness journey. Trust us for personalized, accessible, and empowering healthcare.</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-tooth"></i>
                            <h4><a href="service-details.html">Teeth Whitening</a></h4>
                            <p>Revitalize your smile with teeth whitening – a quick, non-invasive solution for a brighter, more confident you. Choose from convenient in-office treatments or at-home kits for noticeable results and a radiant smile.</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-heart-alt"></i>
                            <h4><a href="service-details.html">Heart Surgery</a></h4>
                            <p>From minimally invasive procedures to precision medicine and robotic-assisted surgeries, innovation is transforming patient experiences. Advanced imaging, artificial intelligence, and remote monitoring ensure unparalleled precision and postoperative care. Embrace a new era in cardiovascular healthcare for quicker recovery, personalized treatments, and improved outcomes.</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-listening"></i>
                            <h4><a href="service-details.html">Ear Treatment</a></h4>
                            <p>Discover expert ear care at our smart healthcare hub. Our specialists use cutting-edge tech for precise diagnostics and offer innovative therapies for various ear conditions. From pediatric care to holistic approaches, we prioritize your auditory wellness. Trust us for personalized treatments and a path to sound health.</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-eye-alt"></i>
                            <h4><a href="service-details.html">Vision Problems</a></h4>
                            <p>Unlock the secrets to healthy eyes on our smart healthcare platform. From subtle vision shifts to digital eye strain, we guide you through common issues. Embrace proactive solutions, telemedicine, and lifestyle tips for lasting visual well-being. Your clear sight, our priority!</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-blood"></i>
                            <h4><a href="service-details.html">Blood Transfusion</a></h4>
                            <p>In the realm of healthcare, blood transfusion stands as a beacon of hope, offering tailored treatment for various conditions. From emergency resilience to advancing compatibility and safety. As research opens new frontiers, the future of blood transfusion promises even more efficient and personalized healthcare possibilities.</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End service -->


        <!-- Start Blog Area -->
        <section class="blog section" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Keep up with Our Most Recent Medical News</h2>
                            <img src="assets/img/section-img.png" alt="#">
                            <p>Our concise and insightful articles keep you informed about the latest breakthroughs, treatments, and health trends. Whether it's groundbreaking research or practical tips for wellness, we've got you covered. Empower yourself with the knowledge to make informed health choices. Your well-being is our priority – discover the future of healthcare with us."</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <img src="assets/img/blog1.jpg" alt="#">
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date">22 Nov, 2023</div>
                                    <h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
                                    <p class="text">Introducing the SmartHealth Hub—our latest innovation in healthcare technology! This groundbreaking product enhances patient care, streamlines workflows, and empowers healthcare professionals. Stay tuned for a closer look at its cutting-edge features, symbolizing our commitment to a smarter, more connected future in healthcare. Thank you for joining us on this exciting journey!</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <img src="assets/img/blog2.jpg" alt="#">
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date">29 Nov, 2023</div>
                                    <h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
                                    <p class="text">1. Regular Dental Check-ups:
                                        - Schedule routine check-ups for early issue detection.

                                        2. Effective Oral Hygiene:
                                        - Brush and floss daily with fluoride products.

                                        3. Balanced Diet:
                                        - Consume a nutrient-rich diet, limit sugars.

                                        4. Address Teeth Grinding:
                                        - Use a nightguard to prevent damage from grinding.

                                        5. Orthodontic Solutions:
                                        - Consult an orthodontist for alignment issues.

                                        Maintain these practices for a healthier, problem-free smile.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <img src="assets/img/blog3.jpg" alt="#">
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date">05 Dec, 2023</div>
                                    <h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
                                    <p class="text">Revolutionize your healthcare business with our smart solutions. We provide cutting-edge technology, seamless integration, and user-friendly experiences. From advanced analytics to streamlined workflows, we empower your organization to thrive in the digital era. Elevate your healthcare business to new heights with our innovative and efficient solutions.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Start clients -->

        <!--/Ens clients -->


        <!-- Start Newsletter Area -->


@endsection
