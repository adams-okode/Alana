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
    <div class="panel panel-default">
        <div class="panel-body">

            <div class="col-md-2">
                @include('Academics.Layouts.nav')
            </div>
            <div class="col-md-10">

                @include('Academics.Settings.years2')

            </div>
        </div>

    </div>


@stop