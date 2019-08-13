@extends('layouts/master')
@section('content')
    
<h3>EMPLOYEE INFORMATION FORM</h3>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Add New Employee</h5>

                <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                        {{  csrf_field() }}
                    
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Employee Name</label>
                        <div class="col-sm-10">
                            <input name="ename" id="exampleEmail" placeholder="Employee Name" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Employee Photo</label>
                        <div class="col-sm-10">
                            <input name="photo" id="exampleFile" type="file" class="form-control-file">
                            <small class="form-text text-muted">Please insert a passport sized Photograph.</small>
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="exampleCity" class="">Sex:</label>
                                    
                                    <select name="sex" id="exampleSelect" class="form-control">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="exampleState" class="">Age:</label>
                                    <input name="age" id="exampleState" type="number" class="form-control"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="exampleZip" class="">Nssf:</label><input name="nssf" id="exampleZip" type="text" class="form-control"></div>
                            </div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Race</label>
                        <div class="col-sm-10"><input name="race" id="exampleEmail" placeholder="Race" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Date Of Birth</label>
                        <div class="col-sm-10"><input name="dateofbirth" type="date" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nationality</label>
                        <div class="col-sm-10"><input name="nationality" id="exampleEmail" placeholder="Nationality" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tribe</label>
                        <div class="col-sm-10"><input name="tribe" id="exampleEmail" placeholder="Tribe" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Village</label>
                        <div class="col-sm-10"><input name="village" id="exampleEmail" placeholder="Village" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Parish</label>
                        <div class="col-sm-10"><input name="parish" id="exampleEmail" placeholder="Parish" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Sub-County</label>
                        <div class="col-sm-10"><input name="subcounty" id="exampleEmail" placeholder="Sub-county" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">County</label>
                        <div class="col-sm-10"><input name="county" id="exampleEmail" placeholder="County" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">District</label>
                        <div class="col-sm-10"><input name="district" id="exampleEmail" placeholder="District" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nearest Town/Trading Centre</label>
                        <div class="col-sm-10"><input name="nearesttown" id="exampleEmail" placeholder="Nearest Town/Trading Centre" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">LC1 Chairperson's Name</label>
                        <div class="col-sm-10"><input name="lc1" id="exampleEmail" placeholder="LC1 Chairperson's Name" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Current Physical Address and Telephone No.</label>
                        <div class="col-sm-10"><input name="physicaladdress" id="exampleEmail" placeholder="Current Physical Address and Telephone No." type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Marital Status</label>
                        <div class="col-sm-10"><input name="maritalstatus" id="exampleEmail" placeholder="Marital Status" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Wife's/Spouse's Name</label>
                        <div class="col-sm-10"><input name="spousename" id="exampleEmail" placeholder="Wife's/Spouse's Name" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Father's Name</label>
                        <div class="col-sm-10"><input name="fathername" id="exampleEmail" placeholder="Father's Name" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Mother's Name</label>
                        <div class="col-sm-10"><input name="mothername" id="exampleEmail" placeholder="Mother's Name" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Address and Phone No.</label>
                        <div class="col-sm-10"><input name="addressandphone" id="exampleEmail" placeholder="Address and Phone Number" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Name of Children</label>
                        <div class="col-sm-10"><input name="nameofchildren" id="exampleEmail" placeholder="Name of Children" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Next of Kin</label>
                        <div class="col-sm-10"><input name="nextofkin" id="exampleEmail" placeholder="Next of Kin" type="text" class="form-control"></div>
                    </div>
                    <h5>EDUCATION BACKGROUND</h5>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="exampleCity" class="">Schools Attended</label>
                                <input name="schoolple" type="text" class="form-control">
                                <input name="schooluce" type="text" class="form-control">
                                <input name="schooluace" type="text" class="form-control">
                                <input name="schooluni" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="position-relative form-group"><label for="exampleState" class="">Award</label>
                                <input name="award1" id="award1" type="text" disabled="True" placeholder="P.L.E (Primary Leaving Examination" class="form-control">
                                <input name="award2" id="award2" type="text" disabled="True" placeholder="U.C.E (Uganda Certificate Examination" class="form-control">
                                <input name="award3" id="award3" type="text" disabled="True" placeholder="U.A.C.E (Uganda Advanced Certificate Examination" class="form-control">
                                <input name="award4" id="award4" type="text" disabled="True" placeholder="University Level(Degree, Diploma, Certificate)" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="position-relative form-group"><label for="exampleZip" class="">Year</label>
                                <input name="yearple" type="text" class="form-control">
                                <input name="yearuce" type="text" class="form-control">
                                <input name="yearuace" type="text" class="form-control">
                                <input name="yearuni" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    <h5>NAME, ADDRESS AND PHONE NUMBERS OF 3 REFEREES</h5>
                    <div class="form-row">
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleCity" class="">Name</label>
                                <input name="namer1" id="exampleCity" type="text" class="form-control">
                                <input name="namer2" id="exampleCity" type="text" class="form-control">
                                <input name="namer3" id="exampleCity" type="text" class="form-control"></div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleState" class="">Phone No.</label>
                                <input name="phoner1" id="exampleState" type="text" class="form-control">
                                <input name="phoner2" id="exampleState" type="text" class="form-control">
                                <input name="phoner3" id="exampleState" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleZip" class="">Relationship</label>
                                <input name="relationr1" id="exampleZip" type="text" class="form-control">
                                <input name="relationr2" id="exampleZip" type="text" class="form-control">
                                <input name="relationr3" id="exampleZip" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleZip" class="">Address</label>
                                <input name="addressr1" id="exampleZip" type="text" class="form-control">
                                <input name="addressr2" id="exampleZip" type="text" class="form-control">
                                <input name="addressr3" id="exampleZip" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <h5>WORKING EXPERIENCE</h5>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="position-relative form-group"><label for="exampleCity" class="">NO. OF YEAR</label>
                                <input name="yearr1" id="exampleCity" type="text" class="form-control">
                                <input name="yearr2" id="exampleCity" type="text" class="form-control">
                                <input name="yearr3" id="exampleCity" type="text" class="form-control"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group"><label for="exampleState" class="">COMPANY</label>
                                <input name="companyr1" id="exampleState" type="text" class="form-control">
                                <input name="companyr2" id="exampleState" type="text" class="form-control">
                                <input name="companyr3" id="exampleState" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group"><label for="exampleZip" class="">POSITION FIELD</label>
                                <input name="positionr1" id="exampleZip" type="text" class="form-control">
                                <input name="positionr2" id="exampleZip" type="text" class="form-control">
                                <input name="positionr3" id="exampleZip" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Additional skills and knowledge.</label>
                        <div class="col-sm-10">
                            <textarea name="addskills" id="exampleText" class="form-control" rows="4"></textarea></div>
                    </div>
                    
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <input type="submit" name="submit" class="btn btn-primary"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
</div>
</div>
@endsection