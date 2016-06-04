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
                        {{--<i>A coordenação irá analisar a sua matrícula e entraremos em contato o mais breve possível. Obrigado!</i>--}}
                    </div>
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
                    <br/>
                    <div class="form-group text-right">
                        <button class="btn btn-sm btn-primary">Salvar Informações</button>
                    </div>
                </div>
                <div class="col-md-6">
                    @if(count($studentClasses) > 0)
                        <div class="form-group">
                            {{--<b>Disciplinas cursadas.</b>--}}
                            <b>Lista de disciplinas disponíveis em 2016.1.</b>
                        </div>
                        <table class="table table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>Disciplina</th>
                                    <th>Semestre</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{--@foreach($studentClasses as $studentClass)--}}
                                    {{--@if($studentClass->approved && $studentClass->status == 'completed')--}}
                                        {{--<tr>--}}
                                            {{--<td>{!! $studentClass->disciplineClass->discipline->description !!}</td>--}}
                                            {{--<td>{!! $studentClass->disciplineClass->year . '.' . $studentClass->disciplineClass->half !!}</td>--}}
                                        {{--</tr>--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}

                                @foreach($disciplineClasses as $disciplineClass)
                                    <tr>
                                        <td>{!! $disciplineClass->discipline->description !!}</td>
                                        <td>{!! $disciplineClass->dayOfWeek() !!}</td>
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