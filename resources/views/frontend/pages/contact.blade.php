@extends('frontend.includes.app')
@section('main-content')
    <div class="bg-contact">
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
    </div>
@endsection
