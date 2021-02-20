<!-- Modal -->
<form method="POST" action="/applycourse" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="joinClassModal" tabindex="-1" role="dialog" aria-labelledby="joinClassModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="joinClassModalLabel">Application Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-left">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <b>Full Name</b>
                            <input placeholder="Full Name (e.g Engr. Samir Bashir)" id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}">

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
                            <b>Choice Courses</b> 
                            <select id="course" class="form-control @error('courses') is-invalid @enderror" name="course">
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

                            @error('course')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                                        
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Apply</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
            