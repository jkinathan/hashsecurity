@extends('layouts/master')
@section('content')
    
<h3>EMPLOYEE LIST</h3>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Employees</h5>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Sex</th>
            <th>Age</th>
            <th>Nationality</th>
            <th>Date of Birth</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($emp as $employee)
        <tr>
            <td>{{ $employee->ename }}</td>
            <td>{{ $employee->sex }}</td>
            <td>{{ $employee->age }}</td>
            <td>{{ $employee->nationality }}</td>
            <?php
            $date = $employee->dateofbirth;
                $date2 = date('Y-M-d', strtotime($date. ' + 0 days'));
            ?>
            <td>{{ $date2 }}</td>
            
            <td>
                <button onclick="window.location='{{ route('employee.show', $employee->id) }}'" class="btn btn-xs btn-primary" type="button">View Details</button>
                <button onclick="window.location='{{ route('employee.edit', $employee->id) }}'" class="btn btn-xs btn-success" type="button">Edit</button>
                
                {{-- <form action="{{ route('employee.destroy', ['id' => $employee->id]) }}" method="post"> --}}
                    <input class="btn btn-xs btn-danger" type="submit" value="Delete" />
                    <input type="hidden" name="_method" value="delete" />
                    {!! csrf_field() !!}
                </form>
            </td>
        </tr>
        @endforeach
              
        
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Sex</th>
            <th>Age</th>
            <th>Nationality</th>
            <th>Date of Birth</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>

                </div>
            </div>
        </div>
@endsection