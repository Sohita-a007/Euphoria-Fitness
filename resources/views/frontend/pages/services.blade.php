@extends('frontend.includes.app')
@section('main-content')
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
                                All the flight tickets are bought for you. We guarantee that we can find the best prices for
                                the date you wish to travel.
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
                                The accomodation is all booked for you. We offer rooms in 4-star hotels on every location
                                you are going too visit.
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
                                We offer a schedule with a list of what to do each day, so you do not get lost during your
                                trip. However, you choose if you are going to follow the schedule or not.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
