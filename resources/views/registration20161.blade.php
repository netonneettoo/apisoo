@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <div class="row">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $chosenCourse->description !!} - 2016.1</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="monday">Segunda-Feira</label>
                                <select name="monday" id="monday" class="form-control">
                                    <option value="">----- Selecione -----</option>
                                    @foreach($mondayList as $item)
                                        <option value={!! $item->discipline_id !!}>{!! $item->discipline->description !!}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tuesday">Terça-Feira</label>
                                <select name="tuesday" id="tuesday" class="form-control">
                                    <option value="">----- Selecione -----</option>
                                    @foreach($tuesdayList as $item)
                                        <option value={!! $item->discipline_id !!}>{!! $item->discipline->description !!}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="wednesday">Quarta-Feira</label>
                                <select name="wednesday" id="wednesday" class="form-control">
                                    <option value="">----- Selecione -----</option>
                                    @foreach($wednesdayList as $item)
                                        <option value={!! $item->discipline_id !!}>{!! $item->discipline->description !!}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="thursday">Quinta-Feira</label>
                                <select name="thursday" id="thursday" class="form-control">
                                    <option value="">----- Selecione -----</option>
                                    @foreach($thursdayList as $item)
                                        <option value={!! $item->discipline_id !!}>{!! $item->discipline->description !!}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="friday">Sexta-Feira</label>
                                <select name="friday" id="friday" class="form-control">
                                    <option value="">----- Selecione -----</option>
                                    @foreach($fridayList as $item)
                                        <option value={!! $item->discipline_id !!}>{!! $item->discipline->description !!}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="panel-footer text-right">
                    <button class="btn btn-sm btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection