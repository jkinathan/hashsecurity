

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

                <form action="#" method="POST">
                        {{  csrf_field() }}
                        <div>
                        </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label"><img class="btn-md" src="/storage/avatars/{{ $emp->photo }}" alt="" style="border-radius:50%;" width="100" height="100">
                    </label>
                        <div class="col-sm-10">
                            <input style="color:brown" placeholder="{{ $emp->ename }}" type="text" class="form-control" disabled="True"></div>
                            
                        </div>
                    
                    <div class="form-row">
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="exampleCity" class="">Sex:</label>
                                    
                                    <select name="sex" id="exampleSelect" class="form-control" disabled>
                                            <option>{{ $emp->sex }}</option>
                                                   
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="exampleState" class="">Age:</label>
                                    <input placeholder="{{ $emp->age }}" disabled="True" type="number" class="form-control"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group"><label for="exampleZip" class="">Nssf:</label>
                                    <input placeholder="{{ $emp->nssf }}" disabled="True" type="text" class="form-control"></div>
                            </div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Race</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->race }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Date Of Birth</label>
                        <div class="col-sm-10"><?php
                            $date = $emp->dateofbirth;
                                $date2 = date('Y-M-d', strtotime($date. ' + 0 days'));
                            ?>
                            
                            <input placeholder="{{ $date2 }}" disabled="True" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nationality</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->nationality }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tribe</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->tribe }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Village</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->village }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Parish</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->parish }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Sub-County</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->subcounty }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">County</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->county }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">District</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->district }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nearest Town/Trading Centre</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->nearesttown }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">LC1 Chairperson's Name</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->lc1 }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Current Physical Address and Telephone No.</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->physicaladdress }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Marital Status</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->maritalstatus }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Wife's/Spouse's Name</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->spousename }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Father's Name</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->fathername }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Mother's Name</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->mothername }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Address and Phone No.</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->addressandphone }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Name of Children</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->nameofchildren }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Next of Kin</label>
                        <div class="col-sm-10"><input placeholder="{{ $emp->nextofkin }}" disabled="True" type="text" class="form-control"></div>
                    </div>
                    <h5>EDUCATION BACKGROUND</h5>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="exampleCity" class="">Schools Attended</label>
                                <input placeholder="{{ $emp->schoolple }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->schooluce }}" disabled="True" class="form-control">
                                <input placeholder="{{ $emp->schooluace }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->schooluni }}" disabled="True" type="text" class="form-control">
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
                                <input placeholder="{{ $emp->yearple }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->yearuce }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->yearuace }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->yearuni }}" disabled="True" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    <h5>NAME, ADDRESS AND PHONE NUMBERS OF 3 REFEREES</h5>
                    <div class="form-row">
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleCity" class="">Name</label>
                                <input placeholder="{{ $emp->namer1 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->namer2 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->namer3 }}" disabled="True" type="text" class="form-control"></div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleState" class="">Phone No.</label>
                                <input placeholder="{{ $emp->phoner1 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->phoner2 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->phoner3 }}" disabled="True" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleZip" class="">Relationship</label>
                                <input placeholder="{{ $emp->relationr1 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->relationr2 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->relationr3 }}" disabled="True" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label for="exampleZip" class="">Address</label>
                                <input placeholder="{{ $emp->addressr1 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->addressr2 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->addressr3 }}" disabled="True" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <h5>WORKING EXPERIENCE</h5>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="position-relative form-group"><label for="exampleCity" class="">NO. OF YEAR</label>
                                <input placeholder="{{ $emp->yearr1 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->yearr2 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->yearr3 }}" disabled="True" type="text" class="form-control"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group"><label for="exampleState" class="">COMPANY</label>
                                <input placeholder="{{ $emp->companyr1 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->companyr2 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->companyr3 }}" disabled="True" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group"><label for="exampleZip" class="">POSITION FIELD</label>
                                <input placeholder="{{ $emp->positionr1 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->positionr2 }}" disabled="True" type="text" class="form-control">
                                <input placeholder="{{ $emp->positionr3 }}" disabled="True" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Additional skills and knowledge.</label>
                        <div class="col-sm-10">
                            <textarea placeholder="{{ $emp->addskills }}" disabled="True" class="form-control" rows="4"></textarea></div>
                    </div>
                    
                    
                </form>
            </div>
        </div>
        
    </div>
    
</div>
</div>
@endsection