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

        var token = '{!! csrf_token() !!}';
        var course_id = '{!! $chosenCourse->id !!}';
        var mondaySelectId = '#monday';
        var tuesdaySelectId = '#tuesday';
        var wednesdaySelectId = '#wednesday';
        var thursdaySelectId = '#thursday';
        var fridaySelectId = '#friday';

        var mondayValue = -1;
        var tuesdayValue = -1;
        var wednesdayValue = -1;
        var thursdayValue = -1;
        var fridayValue = -1;

        var values = [];

        $(document).ready(function() {

            var test = function(id) {
                $('select:not([id=' + id + ']) option').removeAttr('disabled');
                values.forEach(function(value) {
                    $('select:not([id=' + id + '])').find('option[value=' + value + ']').attr('disabled', true);
                });
                console.log(values);
            };

            $(mondaySelectId).change(function(a) {
                var index = values.indexOf(mondayValue);
                if (index > -1) {
                    values.splice(index, 1);
                }
                mondayValue = $(a.target).val().length > 0 ? $(a.target).val() : 0;
                values.push(mondayValue);
                test(this.id);
            });

            $(tuesdaySelectId).change(function(a) {
                var index = values.indexOf(tuesdayValue);
                if (index > -1) {
                    values.splice(index, 1);
                }
                tuesdayValue = $(a.target).val().length > 0 ? $(a.target).val() : 0;
                values.push(tuesdayValue);
                test(this.id);
            });

            $(wednesdaySelectId).change(function(a) {
                var index = values.indexOf(wednesdayValue);
                if (index > -1) {
                    values.splice(index, 1);
                }
                wednesdayValue = $(a.target).val().length > 0 ? $(a.target).val() : 0;
                values.push(wednesdayValue);
                test(this.id);
            });

            $(thursdaySelectId).change(function(a) {
                var index = values.indexOf(thursdayValue);
                if (index > -1) {
                    values.splice(index, 1);
                }
                thursdayValue = $(a.target).val().length > 0 ? $(a.target).val() : 0;
                values.push(thursdayValue);
                test(this.id);
            });

            $(fridaySelectId).change(function(a) {
                var index = values.indexOf(fridayValue);
                if (index > -1) {
                    values.splice(index, 1);
                }
                fridayValue = $(a.target).val().length > 0 ? $(a.target).val() : 0;
                values.push(fridayValue);
                test(this.id);
            });

            $('#btnSaveInformations').click(function(evt) {
                evt.preventDefault();
                var $this = this;
                $($this).attr('disabled', true);

                var dataSend = {
                    '_token': token,
                    course_id: course_id,
                    monday: mondayValue > 0 ? mondayValue : '',
                    tuesday: tuesdayValue > 0 ? tuesdayValue : '',
                    wednesday: wednesdayValue > 0 ? wednesdayValue : '',
                    thursday: thursdayValue > 0 ? thursdayValue : '',
                    friday: fridayValue > 0 ? fridayValue : ''
                };

                if ([mondayValue, tuesdayValue, wednesdayValue, thursdayValue, fridayValue].filter(function(v) { return v > 0 }).length < 3) {
                    $.alert({
                        title: 'Atenção:',
                        content: 'Necessário escolher pelo menos 3 disciplinas!',
                        confirmButton: 'Ok',
                        confirmButtonClass: 'btn-success'
                    });
                    $($this).attr('disabled', false);
                    return;
                }

                $.confirm({
                    title: 'Confirmação:',
                    content: 'Você deseja prosseguir e salvar as alterações?',
                    confirmButton: 'Sim',
                    cancelButton: 'Não',
                    confirmButtonClass: 'btn-success',
                    cancelButtonClass: 'btn-danger',
                    confirm: function() {
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
                    },
                    cancel: function() {
                        $($this).attr('disabled', false);
                    }
                });
            });
        });
    </script>
@endsection