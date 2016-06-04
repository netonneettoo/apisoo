@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="/plugins/jquery-confirm/jquery-confirm.min.css">
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
                        <button id="btnSaveInformations" class="btn btn-sm btn-primary">Salvar Informações</button>
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
    <script src="/plugins/jquery-confirm/jquery-confirm.min.js"></script>
    <script>
        $(document).ready(function() {

            var token = '{!! csrf_token() !!}';
            var course_id = '{!! $chosenCourse->id !!}';
            var mondaySelectId = '#monday';
            var tuesdaySelectId = '#tuesday';
            var wednesdaySelectId = '#wednesday';
            var thursdaySelectId = '#thursday';
            var fridaySelectId = '#friday';

            $('#btnSaveInformations').click(function(evt) {
                evt.preventDefault();
                var $this = this;
                $($this).attr('disabled', true);
                var countFillDays = 0;

                var dayOfWeekValue = function(id) {
                    if ($(id).val() != "") {
                        countFillDays++;
                    }
                    return $(id).val();
                };

                var dataSend = {
                    '_token': token,
                    course_id: course_id,
                    monday: dayOfWeekValue(mondaySelectId),
                    tuesday: dayOfWeekValue(tuesdaySelectId),
                    wednesday: dayOfWeekValue(wednesdaySelectId),
                    thursday: dayOfWeekValue(thursdaySelectId),
                    friday: dayOfWeekValue(fridaySelectId)
                };

                if (countFillDays < 3) {
                    $.alert({
                        title: 'Atenção:',
                        content: 'Necessário escolher pelo menos 3 disciplinas!',
                        confirmButton: 'Ok',
                        confirmButtonClass: 'btn-success'
                    });
                    $($this).attr('disabled', false);
                    return;
                }

                $.ajax({
                    method: "POST",
                    url: "/registration",
                    dataType: "json",
                    data: dataSend
                }).success(function(data) {
                    if (data.code == 200) {
                        location.reload();
                    } else {
                        $.alert({
                            title: 'Atenção:',
                            content: 'Ocorreu um erro ao realizar sua pré-matrícula. Tente novamente mais tarde!',
                            confirmButton: 'Ok',
                            confirmButtonClass: 'btn-success'
                        });
                    }
                    $($this).attr('disabled', false);
                }).error(function (data) {
                    $($this).attr('disabled', false);
                });

            });
        });
    </script>
@endsection