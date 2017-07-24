@extends('layout.auth')

@section('content')

    <div class="div-success">
        <i class="fa fa-info-circle fa-3x"></i>
        <h4>&nbsp;&nbsp;&nbsp;&nbsp;Ваш аккаунт был зарегистрирован,
            но пока еще не подтвержден HR-менеджером.</h4>
        <h4>&nbsp;&nbsp;&nbsp;&nbsp;Свяжитесь с ответственным лицом для внесения Вашего профиля в систему.</h4>

        <div class="lnk-add-new-emp">
            <a href="{{ route('login') }}"><b><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Вернуться назад</b></a>
        </div>
    </div>

@endsection