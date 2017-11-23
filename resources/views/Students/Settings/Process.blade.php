@extends('layouts.master')

@section('breadcrumb')
    <ol class="breadcrumb hide-phone p-0 m-0">
        <li class="active">
            <a href="{{ url('/dashboard') }}"> Dashboard</a>/
            <a href="{{ url('/pos') }}"> Point Of Sale</a>/
            <a href="{{ url('/pos/suppliers') }}">Supplier</a>
        </li>
    </ol>
@stop
@section('page_title') POS @stop
@section('content')
    <div class="col-md-2">
        @include('Students.Layouts.AppNav')
    </div>
    
    <div class="col-md-9">
    
    <div class="card-box" >  
        <div class="row" align="center">
            <h3 style="font-weight: bold; margin-bottom: -50px">Applicant's Details</h3>
            <br>
        </div>
        <br>
        <div class="row" align="center">
            <div class="col-md-3">{{ $application->first_name }}</div>
            <div class="col-md-3">{{ $application->middle_names }}</div>
            @foreach($course as $courses)
                @if($courses->id == $application->course_id)
                    <div class="col-md-3">{{ $courses->course_name }}</div>
                @endif
            @endforeach
            <div class="col-md-3">{{ $application->dob }}</div>
            <div class="col-md-3">{{ $application->nationality	 }}</div>
            <div class="col-md-3">{{ $application->mobile_number }}</div>
            <div class="col-md-3">{{ $application->email_address }}</div>
        </div>   
        <br>
        <legend></legend>

   
        <h3 class="center" >Process Application</h3>
        <div class="center">
            <form role="form"   method="POST" action="{{ url('/students/apply/students') }}" enctype="multipart/form-data">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label  for="form-username">Admission Number<span class="text-danger">*</span></label>
                        <input type="text" name="admission_number" placeholder="Admission Number..." class="form-username form-control" value="{{$application->id}}"  required parsley-type="text">
                    </div>
                </div>
                <input type="hidden" name="q" value="9">
                <input type="hidden" name="status" value="0">
                <input type="hidden" name="Application_id" value="{{$application->id}}">
                <div class="modal-footer form-group">
                    <button type="submit" class="btn btn-info">Apply</button>
                </div>
            </form>
        </div>
    </div>
    </div>

@stop