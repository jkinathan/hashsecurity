

@extends('layouts/master')
@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Details</h5>

                <form action="{{ route('employee.update', $emp->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        {{ csrf_field() }}
                        <div>
                        </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><img class="btn-md" src="/storage/avatars/{{ $emp->photo }}" alt="" style="border-radius:50%;" width="100" height="100">
                    </label>
                        <div class="col-sm-10">
                            <input style="color:brown" style="color:brown" name="ename" value="{{ $emp->ename }}" type="text" class="form-control"></div>
                            
                        </div>
                    
                    <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="exampleCity" class="">Sex:</label>
                                    
                                    <select name="sex" id="exampleSelect" class="form-control"  >
                                            <option>{{ $emp->sex }}</option>
                                                   
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="exampleState" class="">Age:</label>
                                    <input style="color:brown" name="age"  value="{{ $emp->age }}" type="number" class="form-control"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="exampleZip" class="">Nssf:</label>
                                    <input style="color:brown" name="nssf"  value="{{ $emp->nssf }}"   type="text" class="form-control"></div>
                            </div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Race</label>
                        <div class="col-sm-10"><input style="color:brown" name="race" value="{{ $emp->race }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Date Of Birth</label>
                        <div class="col-sm-10"><?php
                            $date = $emp->dateofbirth;
                                $date2 = date('Y-M-d', strtotime($date. ' + 0 days'));
                            ?>
                            
                            <input style="color:brown"  value="{{ $date2 }}" name="dateofbirth" disabled class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nationality</label>
                        <div class="col-sm-10"><input style="color:brown" name="nationality" value="{{ $emp->nationality }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tribe</label>
                        <div class="col-sm-10"><input style="color:brown" name="tribe" value="{{ $emp->tribe }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Village</label>
                        <div class="col-sm-10"><input style="color:brown" name="village" value="{{ $emp->village }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Parish</label>
                        <div class="col-sm-10"><input style="color:brown" name="parish" value="{{ $emp->parish }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Sub-County</label>
                        <div class="col-sm-10"><input style="color:brown" name="subcounty" value="{{ $emp->subcounty }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">County</label>
                        <div class="col-sm-10"><input style="color:brown" name="county" value="{{ $emp->county }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">District</label>
                        <div class="col-sm-10"><input style="color:brown" name="district" value="{{ $emp->district }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nearest Town/Trading Centre</label>
                        <div class="col-sm-10"><input style="color:brown" name="nearesttown" value="{{ $emp->nearesttown }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">LC1 Chairperson's Name</label>
                        <div class="col-sm-10"><input style="color:brown" name="lc1" value="{{ $emp->lc1 }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Current Physical Address and Telephone No.</label>
                        <div class="col-sm-10"><input style="color:brown" name="physicaladdress" value="{{ $emp->physicaladdress }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Marital Status</label>
                        <div class="col-sm-10"><input style="color:brown" name="maritalstatus" value="{{ $emp->maritalstatus }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Wife's/Spouse's Name</label>
                        <div class="col-sm-10"><input style="color:brown" name="spousename" value="{{ $emp->spousename }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Father's Name</label>
                        <div class="col-sm-10"><input style="color:brown" name="fathername" value="{{ $emp->fathername }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Mother's Name</label>
                        <div class="col-sm-10"><input style="color:brown" name="mothername" value="{{ $emp->mothername }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Address and Phone No.</label>
                        <div class="col-sm-10"><input style="color:brown" name="addressandphone" value="{{ $emp->addressandphone }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Name of Children</label>
                        <div class="col-sm-10"><input style="color:brown" name="nameofchildremn" value="{{ $emp->nameofchildren }}"   type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Next of Kin</label>
                        <div class="col-sm-10"><input style="color:brown" name="nextofkin" value="{{ $emp->nextofkin }}"   type="text" class="form-control"></div>
                    </div>
                    <h5>EDUCATION BACKGROUND</h5>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="exampleCity" class="">Schools Attended</label>
                                <input style="color:brown" name="schoolple" value="{{ $emp->schoolple }}"   type="text" class="form-control">
                                <input style="color:brown" name="schooluce" value="{{ $emp->schooluce }}"   class="form-control">
                                <input style="color:brown" name="schooluace" value="{{ $emp->schooluace }}"   type="text" class="form-control">
                                <input style="color:brown" name="schooluni" value="{{ $emp->schooluni }}"   type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="position-relative form-group"><label for="exampleState" class="">Award</label>
                                <input name="award1" id="award1" type="text"  disabled placeholder="P.L.E (Primary Leaving Examination" class="form-control">
                                <input name="award2" id="award2" type="text"   disabled placeholder="U.C.E (Uganda Certificate Examination" class="form-control">
                                <input name="award3" id="award3" type="text"   disabled placeholder="U.A.C.E (Uganda Advanced Certificate Examination" class="form-control">
                                <input name="award4" id="award4" type="text"   disabled placeholder="University Level(Degree, Diploma, Certificate)" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="position-relative form-group"><label for="exampleZip" class="">Year</label>
                                <input style="color:brown" name="yearple" value="{{ $emp->yearple }}"   type="text" class="form-control">
                                <input style="color:brown" name="yearuce" value="{{ $emp->yearuce }}"   type="text" class="form-control">
                                <input style="color:brown" name="yearuace" value="{{ $emp->yearuace }}"   type="text" class="form-control">
                                <input style="color:brown" name="yearuni" value="{{ $emp->yearuni }}"   type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    <h5>NAME, ADDRESS AND PHONE NUMBERS OF 3 REFEREES</h5>
                    <div class="form-row">
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleCity" class="">Name</label>
                                <input style="color:brown" name="namer1" value="{{ $emp->namer1 }}"   type="text" class="form-control">
                                <input style="color:brown" name="namer2" value="{{ $emp->namer2 }}"   type="text" class="form-control">
                                <input style="color:brown" name="namer3" value="{{ $emp->namer3 }}"   type="text" class="form-control"></div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleState" class="">Phone No.</label>
                                <input style="color:brown" name="phoner1" value="{{ $emp->phoner1 }}"   type="text" class="form-control">
                                <input style="color:brown" name="phoner2" value="{{ $emp->phoner2 }}"   type="text" class="form-control">
                                <input style="color:brown" name="phoner3" value="{{ $emp->phoner3 }}"   type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleZip" class="">Relationship</label>
                                <input style="color:brown" name="relationr1" value="{{ $emp->relationr1 }}"   type="text" class="form-control">
                                <input style="color:brown" name="relationr2" value="{{ $emp->relationr2 }}"   type="text" class="form-control">
                                <input style="color:brown" name="relationr3" value="{{ $emp->relationr3 }}"   type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleZip" class="">Address</label>
                                <input style="color:brown" name="addressr1" value="{{ $emp->addressr1 }}"   type="text" class="form-control">
                                <input style="color:brown" name="addressr2" value="{{ $emp->addressr2 }}"   type="text" class="form-control">
                                <input style="color:brown" name="addressr3" value="{{ $emp->addressr3 }}"   type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <h5>WORKING EXPERIENCE</h5>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="position-relative form-group"><label for="exampleCity" class="">NO. OF YEAR</label>
                                <input style="color:brown" name="yearr1" value="{{ $emp->yearr1 }}"   type="text" class="form-control">
                                <input style="color:brown" name="yearr2" value="{{ $emp->yearr2 }}"   type="text" class="form-control">
                                <input style="color:brown" name="yearr3" value="{{ $emp->yearr3 }}"   type="text" class="form-control"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group"><label for="exampleState" class="">COMPANY</label>
                                <input style="color:brown" name="companyr1" value="{{ $emp->companyr1 }}"   type="text" class="form-control">
                                <input style="color:brown" name="companyr2" value="{{ $emp->companyr2 }}"   type="text" class="form-control">
                                <input style="color:brown" name="companyr3" value="{{ $emp->companyr3 }}"   type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group"><label for="exampleZip" class="">POSITION FIELD</label>
                                <input style="color:brown" name="positionr1" value="{{ $emp->positionr1 }}"   type="text" class="form-control">
                                <input style="color:brown" name="positionr2" value="{{ $emp->positionr2 }}"   type="text" class="form-control">
                                <input style="color:brown" name="positionr3" value="{{ $emp->positionr3 }}"   type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Additional skills and knowledge.</label>
                        <div class="col-sm-10">
                            <input style="color:brown" name="addskills" value="{{ $emp->addskills }}"  class="form-control" rows="4"/></div>
                    </div>
                    
                    <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <input type="submit" name="submit" value="Edit Form" class="btn btn-success"/>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        
    </div>
    
</div>
</div>
@endsection