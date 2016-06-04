@extends('layouts.app')

@section('styles')
@endsection

@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">{!! $chosenCourse->description !!} - 2016.1</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <b>Informe as disciplinas que você quer cursar no semestre de 2016.1</b>.<br/>
                    </div>
                    <div class="form-group">
                        <label for="monday">Segunda-Feira</label>
                        <select name="monday" id="monday" class="form-control">
                            <option value="">----- Selecione -----</option>
                            @foreach($remainderDisciplines as $item)
                                <option value={!! $item->id !!}>{!! $item->description !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tuesday">Terça-Feira</label>
                        <select name="tuesday" id="tuesday" class="form-control">
                            <option value="">----- Selecione -----</option>
                            @foreach($remainderDisciplines as $item)
                                <option value={!! $item->id !!}>{!! $item->description !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="wednesday">Quarta-Feira</label>
                        <select name="wednesday" id="wednesday" class="form-control">
                            <option value="">----- Selecione -----</option>
                            @foreach($remainderDisciplines as $item)
                                <option value={!! $item->id !!}>{!! $item->description !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="thursday">Quinta-Feira</label>
                        <select name="thursday" id="thursday" class="form-control">
                            <option value="">----- Selecione -----</option>
                            @foreach($remainderDisciplines as $item)
                                <option value={!! $item->id !!}>{!! $item->description !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="friday">Sexta-Feira</label>
                        <select name="friday" id="friday" class="form-control">
                            <option value="">----- Selecione -----</option>
                            @foreach($remainderDisciplines as $item)
                                <option value={!! $item->id !!}>{!! $item->description !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <br/>
                    <div class="form-group text-right">
                        <button class="btn btn-sm btn-primary">Salvar Informações</button>
                    </div>
                </div>
                <div class="col-md-6">
                    @if(count($remainderDisciplines) > 0)
                        <div class="form-group">
                            <b>Lista completa de disciplinas disponíveis.</b>
                        </div>
                        <table class="table table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>Descrição da Disciplina</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($remainderDisciplines as $item)
                                    <tr>
                                        <td>{!! $item->description !!}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection