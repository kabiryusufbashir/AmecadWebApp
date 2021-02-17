@extends('layouts.template')

@section('meta')
<meta name="description" content="Learn how to use the Best Electrical and Telecommunication Software to become the best electrical engineer out there. Our Trainers are one of the best!">
<meta name="keywords" content="Dialux, AutoCAD Electrical, Revit Electrical, ETAP, Telecommunication Infrastructure Deployment & Maintenance, Electrical Buildings Services, Industrial Control & Home Automation, Kano, Nigeria, Civil Engineering, Architecture, Engineers in Kano, Engineering, Training, School">
@endsection

@section('title')
Electrical/Telecomms Engineering | Courses
@endsection

@section('container')
<!--Header-->
<div id="slogan" class="mx-3 col-md-10 mx-auto">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <img src="images/innovation.png" alt="Electrical/Telecomms Engineering" class="img-fluid" style="width:12rem;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <h4 class="title mt-4 text-center">
                "People spend a lot of money to decorate the house but are not ready to spend a single penny at home to avoid an electrical accident" 
                <br>– Unknown
            </h4>
        </div>
    </div>
</div>
<!--COURSES-->
<div class="row bg-white py-3">
    <div id="courses" class="col-md-10 mx-auto my-4 bg-white">
        <div class="col-md-8 mx-auto mb-3">
            <h1>Electrical/Telecomms Engineering Courses</h1>
        </div>
        <hr class="w-50 mx-auto">
        <div class="row">
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/dialux.jpg" alt="Dialux">
                    <div class="card-header bg-color text-white">
                        Dialux
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/electrical-autocad.png" alt="electrical-autocad">
                    <div class="card-header bg-color text-white">
                        AutoCAD Electrical
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/revit.jpg" alt="revit">
                    <div class="card-header bg-color text-white">
                        Revit Electrical
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/etap.jpg" alt="etap">
                    <div class="card-header bg-color text-white">
                        ETAP
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/electrical-buildings.jpg" alt="electrical-buildings">
                    <div class="card-header bg-color text-white">
                        Electrical Buildings Services
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/telecommunication.jpg" alt="telecommunication">
                    <div class="card-header bg-color text-white">
                        Telecommunication Infrastructure Deployment & Maintenance
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/industrial-control.jpg" alt="industrial-control">
                    <div class="card-header bg-color text-white">
                        Industrial Control & Home Automation
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection