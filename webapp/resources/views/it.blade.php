@extends('layouts.template')

@section('meta')
<meta name="description" content="Getting a Computer Skill is inevitable. With Amec Cad, our provide the best Information Technology training.">
<meta name="keywords" content="Digital Marketing, Web Development, Graphics Design, Scratch Programming for Kids, Programming in Python (Django Framework), Computer Appreciation & Microsoft Office Packages, Artificial Intelligence & Cloud Computing, Management Information System (MIS), Certificate in Information Technology, Kano, Training, Engineering, Digital Economy">
@endsection

@section('title')
Information Technology | Courses
@endsection

@section('container')
<!--Header-->
<div id="slogan" class="mx-3 col-md-10 mx-auto">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <img src="images/monitor.png" alt="Information Technology" class="img-fluid" style="width:12rem;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <h4 class="title mt-4 text-center">
                "It's hardware that makes a machine fast.  It’s software that makes a fast machine slow." 
                <br>– Craig Bruce
            </h4>
        </div>
    </div>
</div>
<!--COURSES-->
<div class="row bg-white py-3">
    <div class="col-md-10 mx-auto my-4 bg-white">
        <div class="col-md-8 mx-auto mb-3">
            <h1>Information Technology Courses</h1>
        </div>
        <hr class="w-50 mx-auto">
        <div class="row">
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/digital-marketing.jpg" alt="digital-marketing">
                    <div class="card-header bg-color text-white">
                        Digital Marketing
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/web-development.jpg" alt="web-development">
                    <div class="card-header bg-color text-white">
                        Web Development
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/graphics-design.jpg" alt="graphics-design">
                    <div class="card-header bg-color text-white">
                        Graphics Design
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/scratch-programming.jpg" alt="scratch-programming">
                    <div class="card-header bg-color text-white">
                        Scratch Programming for Kids
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/python.jpg" alt="python">
                    <div class="card-header bg-color text-white">
                        Programming in Python (Django Framework)
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/computer-essentials.jpg" alt="computer-essentials">
                    <div class="card-header bg-color text-white">
                        Computer Appreciation & Microsoft Office Packages
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/python.jpg" alt="Artificial Intelligence & Cloud Computing">
                    <div class="card-header bg-color text-white">
                        Artificial Intelligence & Cloud Computing
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/certificate-in-it.jpg" alt="certificate-in-it">
                    <div class="card-header bg-color text-white">
                        Certificate in Information Technology
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection