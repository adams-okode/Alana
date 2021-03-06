@extends('layouts.master')

@section('breadcrumb')
    <ol class="breadcrumb hide-phone p-0 m-0">
        <li class="active">
            <a href="{{ url('/dashboard') }}"> Dashboard</a>/
            <a href="{{ url('/finance') }}"> Finance</a>
        </li>
    </ol>
@stop
@section('page_title') Finance @stop
@section('content')


    <div class="col-md-2">

        @include('Student_Academics.Layouts.ExamsLayouts.viewnav')
    </div>
    <div class="col-md-10">
        <div class="card-box row">
            <div class="col-md-12">
                &nbsp;
                <h4 class="header-title m-t-0 m-b-30 text-warning">Student's Exam Details</h4>
                <div class="">
                    <div class="row">
                        <div class="col-md-4">
                            <h5> {{$student->first_name}} {{$student->middle_names}}</h5>
                        </div>
                        @foreach($course as $courses)
                            <div class="col-md-4">
                                {{$courses->course_name}}
                            </div>
                        @endforeach
                        <div class="col-md-4">
                            <h5>{{ $batch->Batch_code }}-{{ $student->admission_number }}/{{ $batch->Batch_year }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-box" >
                    <h3 class="center" >Student's Results</h3>
                    <div class="center">
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group  col-md-9">
                                    <label for="sell">Results <span class="text-danger">*</span></label>
                                @foreach($course as $courses)
                                    @forelse($courses->units as $unit_data)
                                        @foreach($courses->marks as $marks_data)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{$unit_data->unit_code}}-{{$unit_data->unit_name}}
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-username form-control"  required parsley-type="text" value="{{$marks_data}}" disabled>
                                                </div>
                                            </div>
                                        @endforeach
                                    @empty
                                        no units
                                    @endforelse
                                @endforeach
                                </div>
                                <div class="form-group  col-md-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@stop