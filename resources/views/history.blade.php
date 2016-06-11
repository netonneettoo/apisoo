@extends('layouts.app')

@section('styles')
@endsection

@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Histórico</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <table class="table table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Disciplina</th>
                                <th>Ap1</th>
                                <th>Ap2</th>
                                <th>Média</th>
                                <th>Final</th>
                                <th>Média Final</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($studentClasses as $item)
                                <tr>
                                    <td>{!! $item->discipline_class->discipline->description !!}</td>
                                    <td>{!! $item->ap1 !!}</td>
                                    <td>{!! $item->ap2 !!}</td>
                                    <td>{!! $item->m !!}</td>
                                    <td>{!! $item->f !!}</td>
                                    <td>{!! $item->mf !!}</td>
                                    <td>
                                        <label class="label label-{!! $item->approved > 0 ? 'success' : 'danger' !!}">
                                            {!! $item->approved > 0 ? 'Aprovado' : 'Reprovado' !!}
                                        </label>
                                    </td>
                                </tr>
                            @endforeach
                            @foreach($disciplines as $item)
                                <tr>
                                    <td>{!! $item->description !!}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><label class="label label-default">A concluir</label></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{--<div class="panel-footer">--}}
                {{--<i>Agora que você já fez sua pré-matrícula, basta aguardar que entraremos em contato com você o mais breve possível. Este é o resumo de sua pré-matrícula. Em caso de alterações, por gentileza, procure a coordenação. Agradecemos a compreensão.</i>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection

@section('scripts')
@endsection