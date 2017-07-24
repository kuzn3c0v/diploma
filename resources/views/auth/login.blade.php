@extends('layout.auth')

@section('content')

<div class="container">
    {!! Form::open(['route' => 'login', 'method' => 'post', 'class' => 'form-signin', 'role' => 'form']) !!}

        <h3 class="form-signin-heading">Happy Employee</h3>

        <div class="form-group">
            <div class="input-group{{ $errors->has('email') ? ' has-error' : ''  }}">
                <div class="input-group-addon">
                    <i class="glyphicon glyphicon-envelope"></i>
                </div>
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'autocomplete' => 'off']) !!}
            </div>
            @if ($errors->has('email'))
                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-group-addon">
                    <i class=" glyphicon glyphicon-lock "></i>
                </div>
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Пароль', 'autocomplete' => 'off']) !!}
            </div>
            @if ($errors->has('password'))
                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
            @endif
        </div>

        <div class="checkbox">
            <label>
                {!! Form::checkbox('remember', null, true) !!} &nbsp Запомнить меня
            </label>
        </div>

        {!! Form::button('Войти', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block']) !!}

        <a class="btn btn-link" href="{{ route('password.request') }}">Забыли пароль?</a> <!-- todo сделать напоминание пароля -->

        <div class="lnk-add-new-emp">
            <a href="{{ route('register') }}"><b><i class="fa fa-user"></i>&nbsp;&nbsp;Регистрация нового сотрудника</b></a>
        </div>
    {!! Form::close() !!}
</div>

@endsection

