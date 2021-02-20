@extends('layouts.template')

@section('meta')
<meta name="description" content="The best teachers are those who show you where to look, but do not tell you what to see">
<meta name="keywords" content="Suite 8, Binta, Dan-Baffa, Plaza, Audu, Bako, Way, Nasarawa, GRA, Kano, Nigeria">
@endsection

@section('title')
Contact Us | AMEC CAD TRAINING AND MANAGEMENT SERVICES LTD
@endsection

@section('container')
<!--Header-->
<div id="slogan" class="mx-3 col-md-10 mx-auto">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <img src="images/network.png" alt="Network" class="img-fluid" style="width:12rem;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <h4 class="title mt-4 text-center ">
                "The best teachers are those who show you where to look, but do not tell you what to see" 
                <br>– Unknown
            </h4>
        </div>
    </div>
</div>
<!--Intro-->
<div id="contact" class="row bg-light py-2 my-3">

    <div class="col-md-10 mx-auto text-center mb-4">
        <h3 class="my-2" style="font-size: 2.5rem;">Contact Us</h3>
            <div class="row bg-white py-4">
                <div class="col-md-6 my-auto border-right shadow">
                    <form action="/sendenquiry" method="POST" class="form py-4">
                        @csrf
                        <div class="col-md-12 input-group">
                            <input type="text" name="fullname" id="fullname" placeholder="Name" class="form-control @error('fullname') is-invalid @enderror" value="{{ old('fullname') }}" required autofocus>

                            @error('fullname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 my-3 input-group">
                            <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}" required>

                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 my-3 input-group">
                            <input type="email" name="email" id="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 my-3 input-group">
                            <textarea class="form-control" name="enquiry" id="enquiry" placeholder="Enquiry" class="form-control @error('enquiry') is-invalid @enderror" value="{{ old('enquiry') }}" required></textarea>

                            @error('enquiry')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3 form-group">
                            <button class="btn btn-success btn-lg" type="submit" name="submit"><i class="fas fa-contact"></i>  Contact</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 my-auto mx-auto">
                    <div class="col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.729951735581!2d8.542666114760427!3d11.993178491503048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11ae8173cc7b80a1%3A0xefc188a85e8c2293!2sAMEC%20CAD%20Training%20Centre!5e0!3m2!1sen!2sng!4v1612965868185!5m2!1sen!2sng" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-md-12 text-left">
                        <div class="row my-2 mx-1">
                            <i class="fas fa-phone"></i> 
                            <span class="col-md-3">
                                <a class="text-dark" href="tel:+2348066626200">
                                    <b class="ml-2">08066626200</b>
                                </a>
                            </span>
                            <span class="col-md-3">
                                <a class="text-dark" href="tel:+2348036886619">
                                    <b class="mx-4">08036886619</b>
                                </a>
                            </span>
                            <span class="col-md-3">
                                <a class="text-dark" href="tel:+2348167869872">
                                    <b class="mx-4">08167869872</b>
                                </a>
                            </span>
                        </div>
                        <div class="row my-2 mx-1">
                            <a class="text-dark" href="mailto:info@ameccad.com">
                                <i class="fas fa-envelope-square"></i> 
                                <b class="mx-4">info@ameccad.com</b>
                            </a>
                        </div>
                        <div class="row my-2 mx-1">
                            <a class="text-dark">
                                <i class="fas fa-home"></i> 
                                <b class="mx-4">Suite 8 Binta Dan-Baffa Plaza, Audu Bako Way Nasarawa GRA Kano, Nigeria</b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection