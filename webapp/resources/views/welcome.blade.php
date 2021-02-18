@extends('layouts.template')

@section('meta')
<meta name="description" content="Amec Cad is a training institute that provide indigenous designers with professional training on CAD and CADD software to face the global challenges in Design and drafting.">
<meta name="keywords" content="Entrepreneur,Information Technology, Kano, Training, Engineering, AutoCAD, Revit Architecture, Atlantis, Sketch up, Ms Project, GIS, AutoCAD, Ms Excel, Primavera, Arc Civil3D, Csi Bridge, RCC2000, Orion, StaadPro, Sap2000, Etabs/Safe, Ms Excel, Ms Project, Primavera">
@endsection

@section('title')
Home | AMEC CAD TRAINING AND MANAGEMENT SERVICES LTD
@endsection

@section('container')
<div id="slogan" class="mx-3">
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide col-md-10 mx-auto" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-6 my-auto">
                        <h1 class="title">
                            AMEC CAD <br>
                            TRAINING <br>
                            AND<br> 
                            MANAGEMENT SERVICES <br>
                            LTD
                        </h1>
                        <div class="row my-4">
                            <div class="col-md-6 text-left">
                                <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#joinClassModal"><i class="fas fa-school"></i>  Join Our Class</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="images/engineer.png" alt="Presentation" class="w-50 img-fluid float-right">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-6 mr-auto">
                        <img src="images/training.png" alt="Training" class="w-50 img-fluid float-left">
                    </div>
                    <div class="col-md-6 my-auto">
                        <h1 class="title ml-auto text-right">
                            PROVIDING THE <br>
                            BEST ARCHITECTURAL <br>
                            AND <br>
                            ENGINEERING SOFTWARE <br>
                            TRAINING 
                        </h1>
                        <div class="row my-4">
                            <div class="col-md-6 text-right ml-auto">
                                <button class="btn btn-primary btn-lg"><i class="fas fa-check-circle"></i>  Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-6 mr-auto">
                        <img src="images/monitor.png" alt="Monitor" class="w-50 img-fluid float-left">
                    </div>
                    <div class="col-md-6 my-auto">
                        <h1 class="title ml-auto text-right">
                            GET JOB <br>
                            READY SKILLS <br>
                            WITH OUR <br>
                            INFORMATION TECHNOLOGY<br>
                            COURSES 
                        </h1>
                        <div class="row my-4">
                            <div class="col-md-6 text-right ml-auto">
                                <button class="btn btn-primary btn-lg"><i class="fas fa-check-circle"></i>  Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-6 my-auto">
                        <h1 class="title mx-2">
                            VISIT US <br>
                            AT <br>
                            SUITE 8, <br>
                            BINTA DAN BAFFA PLAZA, AUDU BAKO WAY, KANO 
                        </h1>
                        <div class="row my-4">
                            <div class="col-md-6 text-left">
                                <button class="btn btn-warning btn-lg text-white"><i class="fas fa-map-marker-alt"></i>  Contact Us</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <img src="images/address.png" alt="Address" class="w-50 img-fluid float-right">
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
    </div>
</div>
<!--Intro-->
<div class="row bg-white py-3">
    <div class="col-md-12 my-4 bg-white">
        <div class="col-md-3 mx-auto my-3">
            <img src="images/logo.png" alt="Logo" class="w-25 img-fluid">
        </div>
        <div class="col-md-8 mx-auto mb-3">
            <p>
                AMEC CAD provide Intensive Training and Workshops on Information Technology (I.T), Architectural and Engineering software, Maintenance and Installation of such software, Engineering Consultancy, and Environmental Management Services.         Making indigenous designers with professional training on CAD and CADD software to face the global challenges in Design and drafting
            </p>
        </div>
    </div>
    <div class="w-75 border-bottom mx-auto"></div>
    <div class="col-md-8 mx-auto my-4 bg-white">
        <div class="row">
            <div class="col-md-4">
                <img src="images/mission.png" alt="mission" class="w-25 img-fluid">
                <h3 class="my-2">Mission</h3>
                <p>
                    To become a major player in providing professional training on CAD and Information Technology Courses to students, Engineers, Architects and project managers in Kano State and other parts of the nation
                </p>
            </div>
            <div class="col-md-4">
                <img src="images/value.png" alt="value" class="w-25 img-fluid">
                <h3 class="my-2">Value</h3>
                <p>
                    The company goals are being achieved through: Team approach to all sorts of services; Dedication, Hard work and Perseverance; Proper Investment in research and development; Tutor and students interactions based on practical approach
                </p>
            </div>
            <div class="col-md-4">
                <img src="images/vision.png" alt="vision" class="w-25 img-fluid">
                <h3 class="my-2">Vision</h3>
                <p>
                    To serve as a benchmark across all the field of Engineering Consultancy Services, Information Technology and CAD Training
                </p>
            </div>
        </div>
    </div>
    <div class="w-50 border-bottom mx-auto"></div>
    <div class="col-md-8 mx-auto my-4 bg-white">
        <div class="col-md-4 mx-auto">
            <img src="images/rating.png" alt="rating" class="w-50 img-fluid">
            <p class="my-2">
                Get the Edge with Amec Certified, Well Equipped, Passionate, Seasoned and International Trained Instructors
            </p>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="joinClassModal" tabindex="-1" role="dialog" aria-labelledby="joinClassModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="joinClassModalLabel">Join Class</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-left">
                <form method="POST" action="/addstudent" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <div class="col-md-12">
                            <b>Full Name</b>
                            <input placeholder="Full Name (e.g Engr. Samir Bashir)" id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="other_name" value="{{ old('other_name') }}">

                            @error('full_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <b>Gender</b> 
                            <select id="select" class="form-control @error('gender') is-invalid @enderror" name="gender">
                                <option value=""></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>

                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <b>Date of Birth</b> 
                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob">

                            @error('dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <b>Phone</b>
                            <input placeholder="Phone (e.g +2348000000000)" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <b>Email</b>
                            <input placeholder="Email (e.g info@teampiccolo.com)" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <b>Address</b>
                            <textarea placeholder="Address (e.g No 1 Web Development Street off Team Piccolo Road, Kano)" id="address" class="form-control @error('address') is-invalid @enderror" name="address"></textarea>

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <b>Courses</b> 
                            <select id="courses" class="form-control @error('courses') is-invalid @enderror" name="courses">
                                <option value=""></option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Graphics Design">Graphics Design</option>
                                <option value="Scratch Programming for Kids">Scratch Programming for Kids</option>
                                <option value="Programming in Python (Django Framework)">Programming in Python (Django Framework)</option>
                                <option value="Computer Appreciation & Microsoft Office Packages">Computer Appreciation & Microsoft Office Packages</option>
                                <option value="Artificial Intelligence & Cloud Computing">Artificial Intelligence & Cloud Computing</option>
                                <option value="Certificate in Information Technology">Certificate in Information Technology</option>
                                <option value="Dialux">Dialux</option>
                                <option value="AutoCAD Electrical">AutoCAD Electrical</option>
                                <option value="Revit Electrical">Revit Electrical</option>
                                <option value="ETAP">ETAP</option>
                                <option value="Electrical Buildings Services">Electrical Buildings Services</option>
                                <option value="Telecommunication Infrastructure Deployment & Maintenance">Telecommunication Infrastructure Deployment & Maintenance</option>
                                <option value="Industrial Control & Home Automation">Industrial Control & Home Automation</option>
                                <option value="AutoCAD Civil">AutoCAD Civil</option>
                                <option value="Civil 3D">Civil 3D</option>
                                <option value="Prota">Prota</option>
                                <option value="Structural Design & Detailing">Structural Design & Detailing</option>
                                <option value="Staad Pro">Staad Pro</option>
                                <option value="Revit Architecture">Revit Architecture</option>
                                <option value="Revit Structure">Revit Structure</option>
                                <option value="Robot Structural Analysis">Robot Structural Analysis</option>
                                <option value="M.S Project">M.S Project</option>
                                <option value="SAAP 2000">SAAP 2000</option>
                                <option value="ETABS/SAFE">ETABS/SAFE</option>
                                <option value="Primevera">Primevera</option>
                                <option value="G.I.S & Remote Sensing">G.I.S & Remote Sensing</option>
                                <option value="SolidWorks">SolidWorks</option>
                                <option value="Ansys">Ansys</option>
                                <option value="KeyShots">KeyShots</option>
                                <option value="ProE/Creo">ProE/Creo</option>
                                <option value="Plumbling System Design & Drafting">Plumbling System Design & Drafting</option>
                                <option value="Fire Fighting system Design & Drafting">Fire Fighting system Design & Drafting</option>
                                <option value="Revit (HVAC)">Revit (HVAC)</option>
                                <option value="Revit (MEP)">Revit (MEP)</option>
                                <option value="Computer Aided Auto Diagnostics Repair & Maintenance">Computer Aided Auto Diagnostics Repair & Maintenance</option>
                            </select>

                            @error('courses')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </form>                
                    
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Apply</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection