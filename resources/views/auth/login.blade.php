@extends('layouts.login')

@section('styles')
    <style>
        html {
            background: url(/images/background.jpg) no-repeat;
        }
        body {
            background: none;
        }
        #loginFormBox {
            margin-top: 150px;
            padding: 20px 20px 10px 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0px 5px 10px #333333;
        }
        #loginFormBox .logo-portal-aluno {
            width: 170px;
            max-width: 100%;
            margin-bottom: 20px;
        }
        #loginFormBox label[for="password"] {
            margin-top: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="container">

        <div class="row">

            <div id="loginFormBox" class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

                <div class="col-md-12 text-center">
                    <img class="logo-portal-aluno" src="/images/logo-porta-aluno.png" alt="description">
                </div>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Matrícula</label>
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Senha</label>
                        <input id="password" type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Lembrar-me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-sm btn-success pull-right">Entrar</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
