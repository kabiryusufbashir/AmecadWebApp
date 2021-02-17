@extends('layouts.template')

@section('meta')
<meta name="description" content="Get the best training on Mechanical Engineering and Automotive Engineering softwares at Amec Cad Kano">
<meta name="keywords" content="SolidWorks, Ansys, KeyShots, ProE/Creo, Plumbling System Design & Drafting, Fire Fighting System, Design & Drafting, Revit (HVAC), Revit (MEP), Computer Aided Auto Diagnostics Repair & Maintenance">
@endsection

@section('title')
Mechanical/Automotive Engineering | Courses
@endsection

@section('container')
<!--Header-->
<div id="slogan" class="mx-3 col-md-10 mx-auto">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <img src="images/v-engine.png" alt="Mechanical Engineering" class="img-fluid" style="width:12rem;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <h4 class="title mt-4 text-center">
                "Mechanical Engineers can become a mechanic; a software engineer cannot become a software" 
                <br>– Unknown
            </h4>
        </div>
    </div>
</div>
<!--COURSES-->
<div class="row bg-white py-3">
    <div id="courses" class="col-md-10 mx-auto my-4 bg-white">
        <div class="col-md-8 mx-auto mb-3">
            <h1>Mechanical/Automotive Engineering Courses</h1>
        </div>
        <hr class="w-50 mx-auto">
        <div class="row">
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/solidworks.jpg" alt="solidworks">
                    <div class="card-header bg-color text-white">
                        SolidWorks
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/ansys.jpg" alt="ansys">
                    <div class="card-header bg-color text-white">
                        Ansys
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/keyshots.jpg" alt="keyshots">
                    <div class="card-header bg-color text-white">
                        KeyShots
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/proe.jpg" alt="structural-design">
                    <div class="card-header bg-color text-white">
                        ProE/Creo
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/plumbling-system-design-drafting.jpg" alt="plumbling-system-design-drafting">
                    <div class="card-header bg-color text-white">
                        Plumbling System Design & Drafting
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/fire-fighting-system-design-drafting.jpg" alt="fire-fighting-system-design-drafting">
                    <div class="card-header bg-color text-white">
                        Fire Fighting system Design & Drafting
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/revit-hvac.jpg" alt="revit-hvac">
                    <div class="card-header bg-color text-white">
                        Revit (HVAC)
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/revit-mep.jpg" alt="revit-mep">
                    <div class="card-header bg-color text-white">
                        Revit (MEP)
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card shadow">
                    <img class="card-img-top w-100 mx-auto mt-2" src="images/computer-aided-auto-diagnostics-repair-maintenance.jpg" alt="computer-aided-auto-diagnostics-repair-maintenance">
                    <div class="card-header bg-color text-white">
                        Computer Aided Auto Diagnostics Repair & Maintenance
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection