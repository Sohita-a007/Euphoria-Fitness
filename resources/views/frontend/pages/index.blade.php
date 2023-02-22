@extends('frontend.includes.app')
@section('main-content')
    <!--===============Banner================-->
    <section class="banner">
        <div class="container-c">
            <div class="banner-text-item">
                <div class="banner-heading">
                    <marquee>
                        <h1>WELCOME HOME !!!</h1>
                    </marquee>
                </div>
                <form class="form">
                    <input type="text" list="mylist" placeholder="Where would you like to go?">
                    <datalist id="mylist">
                        <option>Kathmandu</option>
                        <option>Pokhara</option>
                        <option>Mustang</option>
                        <option>Dhangahi</option>
                        <option>Lumbini</option>
                        <option>Janakpur</option>
                        <option>Manang</option>
                    </datalist>
                    <input type="date" class="date">
                    <a href="tour1.html" class="book">Search</a>
                </form>
            </div>
        </div>
    </section>

    <!--=========Services===============-->
    <section class="services">

        <div class="container-c services-flex">
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/tour-guide_onzla9.png">
                <h2>8000+ Our Local Guides</h2>
            </div>
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293738/reliability_jbpn4g.png">
                <h2>100% Trusted Tour Agency</h2>
            </div>
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293635/experience_a3fduk.png">
                <h2>28+ Years of Travel Experience</h2>
            </div>
            <div class="service-item">
                <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/feedback_s8z7d9.png">
                <h2>98% Our Travelers are Happy</h2>
            </div>
        </div>


    </section>
    <!--==============Places===================-->
    <section class="places">
        <div class="container-c">

            <div class="places-text">

                <h2>Favourite Places</h2>
            </div>

            <div class="cards">
                @foreach ($blog as $item)
                    <div class="card">
                        <a href="{{ route('blog.single', $item->id) }}">
                            <div class="zoom-img">
                                <div class="img-card">
                                    <img src="{{ asset($item->image) }}">
                                </div>
                            </div>

                            <div class="text">

                                <h2>{{ $item->title }}</h2>


                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>

    </section>
    <!--===========About Us===============-->
    <section class="about">
        <div class="container-c">

            <div class="about-img">
                <img src="image/welcome.jpg">
            </div>
            <div class="about-text">

                <h2>Heartly Welcome to you all in our beautiful country Nepal. </h2>
                <p>Nepal is the small country, but rich in natural resources,
                    And also Nepal is good for who believe in religion there are lots of temple are located here.
                    also there are lost of mountain lies here world no1 highest mountain lies in our country nepal, you
                    people are interested in Adventure it is also aviliable here.</p>
                <p>The name "Nepal" is first recorded in texts from the Vedic period of the Indian subcontinent, the era
                    in ancient Nepal when Hinduism was founded, the predominant religion of the country. In the middle
                    of the first millennium BC, Gautama Buddha, the founder of Buddhism, was born in Lumbini in southern
                    Nepal. Parts of northern Nepal were intertwined with the culture of Tibet. The centrally located
                    Kathmandu Valley is intertwined with the culture of Indo-Aryans, and was the seat of the prosperous
                    Newar confederacy known as Nepal Mandala. The Himalayan branch of the ancient Silk Road was
                    dominated by the valley's traders. The cosmopolitan region developed distinct traditional art and
                    architecture. By the 18th century, the Gorkha Kingdom achieved the unification of Nepal. The Shah
                    dynasty established the Kingdom of Nepal and later formed an alliance with the British Empire, under
                    its Rana dynasty of premiers. The country was never colonised but served as a buffer state between
                    Imperial China and British India. Parliamentary democracy was introduced in 1951 but was twice
                    suspended by Nepalese monarchs, in 1960 and 2005. The Nepalese Civil War in the 1990s and early
                    2000s resulted in the establishment of a secular republic in 2008, ending the world's last Hindu
                    monarchy.</p>


                <a href="#">ABOUT</a>
            </div>

        </div>

    </section>



    <section class="sectionAbout clearfix">
        <div class="container-c">
            <h3>Our services include</h3>
            <div class="container">
                <div class="row  mbl-row">
                    <div class="col-md-4 col-sm-12">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <span><i class="fas fa-plane-departure"></i></span>
                            </div>


                            <h3 class="title">Flight Tickets</h3>
                            <p class="description">
                                All the flight tickets are bought for you. We guarantee that we can find the best prices
                                for the date you wish to travel.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <span><i class="fas fa-bed"></i></span>
                            </div>
                            <h3 class="title">Accomodation</h3>
                            <p class="description">
                                The accomodation is all booked for you. We offer rooms in 4-star hotels on every
                                location you are going too visit.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <span><i class="fas fa-tasks"></i></span>
                            </div>
                            <h3 class="title">What to Do</h3>
                            <p class="description">
                                We offer a schedule with a list of what to do each day, so you do not get lost during
                                your trip. However, you choose if you are going to follow the schedule or not.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <br>
    <br>

    <!-- TESTIMONIALS -->
    <section class="testimonials">
        <div class="container-c">
            <h1 class="test">Testimonial</h1>
            <div class="container">

                <div class="row-testimonial">
                    <div class="col-sm-12">


                        <div class="testimonials-container">
                            <div class="progress-bar"></div>
                            <div class="fa fa-quote-right fa-quote"></div>
                            <div class="fa fa-quote-left fa-quote"></div>
                            <p class="testimonial">Nepal is a stunning country with breathtaking natural beauty and rich
                                cultural heritage. From the majestic Himalayas to the lush forests, and from vibrant
                                cities to peaceful rural areas, Nepal has something to offer for everyone. Whether you
                                are an adventure lover or seeking spiritual enlightenment, Nepal is an ideal destination
                                for an unforgettable holiday experience.</p>
                            <div class="centered-items">
                                <img class="logo"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=707b9c33066bf8808c934c8ab394dff6"
                                    alt="logo" />
                                <div class="user-details">
                                    <h4 class="username">Miyah Myles</h4>
                                    <p class="role">Marketing</p>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- END OF TESTIMONIALS -->

    <section class="contactus">
        <div class="container-c">
            <div class="contact-container">
                <div class="left-col">
                    <img class="logo1" src="image/logo.png" />
                </div>
                <div class="right-col">


                    <h1>Contact us</h1>
                    <p>Planning to visit Nepal soon? Get insider tips on where to go, things to do and find best deals
                        for your next adventure.</p>

                    <form id="contact-form" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <label for="name">Full name</label>
                        <input type="text" id="name" name="name" placeholder="name" required>
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="email" required>
                        <label for="message">Message</label>
                        <textarea rows="6" placeholder="write something" id="message" name="message" required></textarea>
                        <!--<a href="javascript:void(0)">-->
                        <button type="submit" id="submit" name="submit">Send</button>
                        <!--</a>-->

                    </form>
                    <div id="error"></div>
                    <div id="success-msg"></div>
                </div>
            </div>


        </div>


    </section>
@endsection
