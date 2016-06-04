@extends('layouts.app')

@section('styles')
@endsection

@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">{!! $chosenCourse->description !!} - 2016.1</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! $preRegistrationFromUser !!}
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <i>Agora que você já fez sua pré-matrícula, basta aguardar que entraremos em contato com você o mais breve possível. Este é o resumo de sua pré-matrícula. Em caso de alterações, por gentileza, procure a coordenação. Agradecemos a compreensão.</i>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            //
        });
    </script>
@endsection