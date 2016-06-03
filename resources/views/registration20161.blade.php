@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <div class="row">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Panel heading without title</div>
                <div class="panel-body">
                    @foreach($disciplineClasses as $disciplineClass)
                        {!! $disciplineClass !!}
                        <hr />
                    @endforeach
                </div>
                <div class="panel-footer">
                    footer
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection