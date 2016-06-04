@extends('layouts.app')

@section('styles')
@endsection

<?php
    if (isset($courses)) {
        $registeredCourses = array();
        foreach($courses as $c) {
            array_push($registeredCourses, \App\Course::find($c));
        }
    }
?>

@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Selecione seu curso</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        @foreach($registeredCourses as $course)
                            <a href="/registration/{!! $course->id !!}" class="btn btn-block btn-default">{!! $course->description !!}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection