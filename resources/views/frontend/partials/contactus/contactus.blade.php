@extends('frontend.master.master')
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="active">Contact us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-area pt-100 pb-100">
        <div class="container">
            <div class="contact-map mb-10 d-none">
                <div id="map"></div>
            </div>
            <div class="custom-row-2">
                <div class="col-lg-4 col-md-5">
                    <div class="contact-info-wrap">
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact-info-dec">
                                <p>{{ $contact->number ?? '' }}</p>
                                <p>{{ $contact->another_number ?? '' }}</p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="#">{{ $contact->email ?? '' }}</a></p>
                                <p><a href="#">{{ $contact->another_email ?? '' }}</a></p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contact-info-dec">
                                <p>{{ $contact->address ?? '' }}</p>
                            </div>
                        </div>
                        <div class="contact-social text-center">
                            <h3>Follow Us</h3>
                            <ul>
                                <li><a href="{{ $social->facebook ?? '' }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $social->youtube ?? '' }}"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="{{ $social->tiktok ?? '' }}"><i class="fa fa-tiktok"></i></a></li>
                                <li><a href="{{ $social->twitter ?? '' }}"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="contact-form">
                        <div class="contact-title mb-30">
                            <h2>Get In Touch</h2>
                        </div>
                        <form class="contact-form-style" action="{{ route('messages') }}" method="post">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input name="name" placeholder="Name*" type="text">
                                </div>
                                <div class="col-lg-6">
                                    <input name="email" placeholder="Email*" type="email">
                                </div>
                                <div class="col-lg-12">
                                    <input name="phone" placeholder="Phone*" type="phone">
                                </div>
                                <div class="col-lg-12">
                                    <input name="subject" placeholder="Subject*" type="text">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Your Message*"></textarea>
                                    <button class="submit" type="submit">SEND</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
