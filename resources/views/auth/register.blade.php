@extends('layout.auth')

@section('content')
<div class="container">
    {!! Form::open(['route' => 'register', 'method' => 'post', 'class' => 'form-signin', 'role' => 'form']) !!}

        <div class="form-group">
            <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                </div>
                {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Имя',
                'autocomplete' => 'off',
                'autofocus' => 'on', 'value' => old('name'), 'required' => 'on']) !!}
            </div>
            @if ($errors->has('name'))
                <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <div class="input-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                </div>
                {!! Form::text('surname', null, ['id' => 'surname', 'class' => 'form-control', 'placeholder' => 'Фамилия', 'autocomplete' => 'off',
                 'value' => old('surname'), 'required' => 'on']) !!}
            </div>
            @if ($errors->has('name'))
                <span class="help-block"><strong>{{ $errors->first('surname') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <div class="input-group{{ $errors->has('email') ? ' has-error' : ''  }}">
                <div class="input-group-addon">
                    <i class="glyphicon glyphicon-envelope"></i>
                </div>
                {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control a-form', 'placeholder' => 'Email',
                'value' => old('email'), 'autocomplete' => 'off', 'required' => 'on']) !!}
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
                {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Пароль',
                'autocomplete' => 'off', 'required' => 'on']) !!}
            </div>
            @if ($errors->has('password'))
                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-group-addon">
                    <i class=" glyphicon glyphicon-lock "></i>
                </div>
                {!! Form::password('password_confirmation', ['id' => 'password-confirm', 'class' => 'form-control',
                'placeholder' => 'Подтвердите пароль', 'autocomplete' => 'off', 'required' => 'on']) !!}
            </div>
        </div>

        {!! Form::button('Зарегистрироваться', ['id' => 'regsubmit', 'type' => 'submit',
        'class' => 'btn btn-primary btn-lg btn-block']) !!}

        <div class="lnk-add-new-emp">
            <a href="{{ route('login') }}"><b><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Вернуться назад</b></a>
        </div>

    {!! Form::close() !!}
</div>

@endsection
