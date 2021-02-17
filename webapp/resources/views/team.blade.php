@extends('layouts.template')

@section('meta')
<meta name="description" content="Get the best training on Mechanical Engineering and Automotive Engineering softwares at Amec Cad Kano">
<meta name="keywords" content="SolidWorks, Ansys, KeyShots, ProE/Creo, Plumbling System Design & Drafting, Fire Fighting System, Design & Drafting, Revit (HVAC), Revit (MEP), Computer Aided Auto Diagnostics Repair & Maintenance">
@endsection

@section('title')
Team | AMEC CAD TRAINING AND MANAGEMENT SERVICES LTD
@endsection

@section('container')
<!--Header-->
<div id="slogan" class="mx-3 col-md-10 mx-auto">
    <!--Directors-->
    <div class="row mt-4 my-4 text-white py-4">
        <div id="carouselDirectorsControls" class="carousel slide col-md-7 mx-auto" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="col-md-8 mx-auto">
                        <img src="images/directors.jpg" alt="Engr. Tijjani Aminu Ibrahim" class="rounded-circle w-50 img-fluid">
                        <h5 class="mt-3 title text-center">Engr. Tijjani Aminu Ibrahim</h5>
                        <p>Managing Director</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-8 mx-auto">
                        <img src="images/directors.jpg" alt="Engr. Auwal Abubakar Uthman" class="rounded-circle w-50 img-fluid">
                        <h5 class="mt-3 title text-center">Engr. Auwal Abubakar Uthman</h5>
                        <p>Director Engineering</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-8 mx-auto">
                        <img src="images/samir.jpg" alt="Engr. Samir  Bashir" class="rounded-circle w-50 img-fluid">
                        <h5 class="mt-3 title text-center">Engr. Samir  Bashir</h5>
                        <p>Director Training</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-8 mx-auto">
                        <img src="images/khalil.jpg" alt="Engr. Ibrahim Khalil Umar" class="rounded-circle w-50 img-fluid">
                        <h5 class="mt-3 title text-center">Engr. Ibrahim Khalil Umar</h5>
                        <p>Director Research & Development</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-8 mx-auto">
                        <img src="images/directors.jpg" alt="Engr. Abba Ibrahim" class="rounded-circle w-50 img-fluid">
                        <h5 class="mt-3 title text-center">Engr. Abba Ibrahim</h5>
                        <p>Director Planning</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselDirectorsControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselDirectorsControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!--Team-->
<div class="row bg-white py-3">
    <div class="col-md-12 my-4 bg-white">
        <div class="col-md-3 mx-auto my-3">
            <img src="images/united.png" alt="Team Collaboration" class="w-50 img-fluid">
        </div>
        <div class="col-md-8 mx-auto mb-3">
            <p style="font-size: 1.5rem;">
                "Teamwork is the ability to work together toward a common vision. The ability to direct individual accomplishments toward organizational objectives. It is the fuel that allows common people to attain uncommon results"
                <br><i>--Andrew Carnegie</i>
            </p>
        </div>
    </div>
    <div class="w-25 border-bottom mx-auto"></div>
</div>
@endsection