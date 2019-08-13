<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/layouts/Employee/AddEmps');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/layouts/Employee/AddEmp');
    }
    public function list()
    {
        $emp = Employee::all();
        // dd($emp);
        return view('/layouts/Employee/Emplist')->with(compact('emp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $employees = new Employee();
        // $employees->ename=$request->ename;
        // dd($employees);
        // $status="Employee Created Successfully";
        // return view('layouts/Dashboard/dashboard')->with(['status'=>$status]);
        
        // $attributes = request()->validate([
        //     'ename'=> ['required','min:3'],
        //     'photo'=>'required',
        //     'sex'=>'required',
        //     'age'=>'required',
        //     'nationality'=>'required',
        //     'district'=>'required',
        //     'maritalstatus' => 'required',
        //     'namer1' => 'required',
        //     'relationr1'=> 'required',
        //     'addressr1'=>'required',
        //     'schoolple' => 'required',
        //     'schooluce' => 'required',
        //     'yearple'=> 'required',
        //     'yearuce'=>'required'
        // ]);
        $user = Auth::user();
       

        $employees->ename = $request->ename;
        $photo = $user->id.'_avatar'.time().'.'.request()->photo->getClientOriginalExtension();
        $request->photo->storeAs('avatars', $photo);
        $employees->photo = $photo;

        $employees->sex = $request->sex;
        $employees->age = $request->age;
        $employees->nssf =$request->nssf;
        $employees->race =$request->race;
        $employees->nationality = $request->nationality;
        $employees->tribe = $request->tribe;
        $employees->dateofbirth = $request->dateofbirth;
        $employees->village = $request->village;
        $employees->parish = $request->parish;
        $employees->subcounty = $request->subcounty;
        $employees->county = $request->county;
        $employees->district = $request->district;
        $employees->nearesttown = $request->nearesttown;
        $employees->lc1 = $request->lc1;
        $employees->physicaladdress = $request->physicaladdress;
        $employees->maritalstatus = $request->maritalstatus;
        $employees->spousename = $request->spousename;
        $employees->fathername = $request->fathername;
        $employees->mothername = $request->mothername;
        $employees->addressandphone = $request->addressandphone;
        $employees->nameofchildren = $request->nameofchildren;
        $employees->nextofkin = $request->nextofkin;
        $employees->schoolple = $request->schoolple;
        $employees->schooluce = $request->schooluce;
        $employees->schooluace = $request->schooluace;
        $employees->schooluni = $request->schooluni;
        $employees->yearple = $request->yearple;
        $employees->yearuce = $request->yearuce;
        $employees->yearuace = $request->yearuace;
        $employees->yearuni = $request->yearuni;
        $employees->namer1 = $request->namer1;
        $employees->namer2 = $request->namer2;
        $employees->namer3 = $request->namer3;
        $employees->phoner1 = $request->phoner1;
        $employees->phoner2 = $request->phoner2;
        $employees->phoner3 = $request->phoner3;
        $employees->relationr1 = $request->relationr1;
        $employees->relationr2 = $request->relationr2;
        $employees->relationr3 = $request->relationr3;
        $employees->addressr1 = $request->addressr1;
        $employees->addressr2 = $request->addressr2;
        $employees->addressr3 = $request->addressr3;
        $employees->yearr1 = $request->yearr1;
        $employees->yearr2 = $request->yearr2;
        $employees->yearr3 = $request->yearr3;
        $employees->companyr1 = $request->companyr1;
        $employees->companyr2 = $request->companyr2;
        $employees->companyr3 = $request->companyr3;
        $employees->positionr1 = $request->positionr1;
        $employees->positionr2 = $request->positionr2;
        $employees->positionr3 = $request->positionr3;
        $employees->addskills = $request->addskills;
        
        // $employees->save();
        
        // $status="Employee Created Successfully";
        
        // return view('layouts/Dashboard/dashboard')->with(['status'=>$status]);

        try{
            $employees->save();
            
            $status="Employee Created Successfully";
        }
        catch (\Exception $e) {
            $status=$e->getMessage();
        }
                    
        return back()->with(compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emp = Employee::find($id);
        return view('/layouts/Employee/ViewEmp')->with(compact('emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = Employee::find($id);
        return view('/layouts/Employee/EditEmp')->with(compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employees = Employee::find($id);

        $employees->ename = $request->ename;
        $employees->sex = $request->sex;
        $employees->age = $request->age;
        $employees->nssf =$request->nssf;
        $employees->race =$request->race;
        $employees->nationality = $request->nationality;
        $employees->tribe = $request->tribe;
        // $employees->dateofbirth = $request->dateofbirth;
        $employees->village = $request->village;
        $employees->parish = $request->parish;
        $employees->subcounty = $request->subcounty;
        $employees->county = $request->county;
        $employees->district = $request->district;
        $employees->nearesttown = $request->nearesttown;
        $employees->lc1 = $request->lc1;
        $employees->physicaladdress = $request->physicaladdress;
        $employees->maritalstatus = $request->maritalstatus;
        $employees->spousename = $request->spousename;
        $employees->fathername = $request->fathername;
        $employees->mothername = $request->mothername;
        $employees->addressandphone = $request->addressandphone;
        $employees->nameofchildren = $request->nameofchildren;
        $employees->nextofkin = $request->nextofkin;
        $employees->schoolple = $request->schoolple;
        $employees->schooluce = $request->schooluce;
        $employees->schooluace = $request->schooluace;
        $employees->schooluni = $request->schooluni;
        $employees->yearple = $request->yearple;
        $employees->yearuce = $request->yearuce;
        $employees->yearuace = $request->yearuace;
        $employees->yearuni = $request->yearuni;
        $employees->namer1 = $request->namer1;
        $employees->namer2 = $request->namer2;
        $employees->namer3 = $request->namer3;
        $employees->phoner1 = $request->phoner1;
        $employees->phoner2 = $request->phoner2;
        $employees->phoner3 = $request->phoner3;
        $employees->relationr1 = $request->relationr1;
        $employees->relationr2 = $request->relationr2;
        $employees->relationr3 = $request->relationr3;
        $employees->addressr1 = $request->addressr1;
        $employees->addressr2 = $request->addressr2;
        $employees->addressr3 = $request->addressr3;
        $employees->yearr1 = $request->yearr1;
        $employees->yearr2 = $request->yearr2;
        $employees->yearr3 = $request->yearr3;
        $employees->companyr1 = $request->companyr1;
        $employees->companyr2 = $request->companyr2;
        $employees->companyr3 = $request->companyr3;
        $employees->positionr1 = $request->positionr1;
        $employees->positionr2 = $request->positionr2;
        $employees->positionr3 = $request->positionr3;
        $employees->addskills = $request->addskills;
        
        
        try{
            $employees->save();
            
            $status="Employee Has Been Updated Successfully";
        }
        catch (\Exception $e) {
            $status=$e->getMessage();
        }
                    
        return back()->with(compact('status'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
