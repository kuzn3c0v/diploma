@extends('layout.layout')

@section('content')

    <div class="panel-body my-panel">
        <div class="content-row">
            <div class="row">
                <div class="col-md-12">
                    <div class="row profile-row">
                        <div class="col-md-8" style="padding-left: 25px">
                            <h3 style="margin: 0">{{ $user->name }} {{ $user->surname }}</h3>
                            <h5 style="margin-top: 5px; color: #a4aaae">Редактирование профиля</h5>

                            <h5>Контактная информация</h5>

                            {!! Form::open(['route' => ['profile.update', 'id' => $user->id], 'class' => 'form-horizontal', 'method' => 'patch', 'role' => 'form']) !!}

                            <div class="row profile-string">
                                <div class="col-md-5">
                                    <h5><span class="label" id="profile-label"><i class="fa fa-user"></i>&nbsp;<b>{!! Form::label('name', 'Имя:', ['class' => 'control-label']) !!}</b></span></h5>
                                </div>
                                <div class="col-md-7">
                                    <h6>{!! Form::text('name', $user->name, ['id' => 'name', 'class' => 'form-control input-sm', 'required' => 'on']) !!}</h6>
                                </div>
                            </div>

                            <div class="row profile-string">
                                <div class="col-md-5">
                                    <h5><span class="label" id="profile-label"><i class="fa fa-user"></i>&nbsp;<b>{!! Form::label('surname', 'Фамилия:', ['class' => 'control-label']) !!}</b></span></h5>
                                </div>
                                <div class="col-md-7">
                                    <h6>{!! Form::text('surname', $user->surname, ['id' => 'surname', 'class' => 'form-control input-sm', 'required' => 'on']) !!}</h6>
                                </div>
                            </div>

                            <div class="row profile-string">
                                <div class="col-md-5">
                                    <h5><span class="label" id="profile-label"><i class="fa fa-tablet"></i>&nbsp;<b>{!! Form::label('phone', 'Мобильный телефон:', ['class' => 'control-label']) !!}</b></span></h5>
                                </div>
                                <div class="col-md-7">
                                    <h6>{!! Form::text('phone', $user->phone, ['id' => 'phone', 'class' => 'form-control input-sm']) !!}</h6>
                                </div>
                            </div>

                            <div class="row profile-string">
                                <div class="col-md-5">
                                    <h5><span class="label" id="profile-label"><i class="fa fa-skype"></i>&nbsp;<b>{!! Form::label('skype', 'Скайп:', ['class' => 'control-label']) !!}</b></span></h5>
                                </div>
                                <div class="col-md-7">
                                    <h6>{!! Form::text('skype', $user->skype, ['id' => 'skype', 'class' => 'form-control input-sm']) !!}</h6>
                                </div>
                            </div>

                            <hr>
                            <h5>Дополнительная информация</h5>

                            <div class="row profile-string">
                                <div class="col-md-5">
                                    <h5><span class="label" id="profile-label"><i class="fa fa-birthday-cake"></i>&nbsp;<b>{!! Form::label('day', 'День рождения:',
                                    ['class' => 'control-label']) !!}</b></span></h5>
                                </div>
                                <div class="col-md-7 form-inline">
                                    <h6> <!-- todo сделать запрет выобора 3х чисел для февраля -->
                                        {!! Form::selectRange('day', 1, 31, (isset($user->birthday->day) ? $user->birthday->day : null),
                                        ['class' => 'form-control input-sm', 'placeholder' => 'день']) !!}

                                        {!! Form::selectMonth('month', (isset($user->birthday->month) ? $user->birthday->month : null),
                                        ['class' => 'form-control input-sm', 'placeholder' => 'месяц']) !!}

                                        {!! Form::selectYear('year', 1940, \Carbon\Carbon::now()->addYears(-16)->year,
                                        (isset($user->birthday->year) ? $user->birthday->year : null),
                                        ['class' => 'form-control input-sm', 'placeholder' => 'год']) !!}
                                    </h6>
                                </div>
                            </div>

                            <div class="row profile-string">
                                <div class="col-md-5">
                                    <h5><span class="label" id="profile-label"><i class="fa fa-male"></i>&nbsp;/&nbsp;<i class="fa fa-female"></i>&nbsp;<b>
                                                {!! Form::label('sex', 'Пол:', ['class' => 'control-label']) !!}</b></span>
                                    </h5>
                                </div>
                                <div class="col-md-7">
                                    <h6>{!! Form::select('sex', ['мужской' => 'мужской', 'женский' => 'женский'], $user->sex,
                                    ['placeholder' => 'выбрать', 'id' => 'sex', 'class' => 'form-control input-sm']) !!}</h6>
                                </div>
                            </div>

                            {!! Form::button('Сохранить изменения', ['type' => 'submit', 'class' => 'btn btn-success btn-block']) !!}

                            {!! Form::close() !!}
                        </div>
                        <div class="col-md-4">
                            <img class="img-rounded" style="width: 100%; margin-bottom: 5px" src="http://snim.net/wp-content/uploads/2015/12/%D1%81%D0%B8%D0%BD%D1%8F%D1%8F-%D0%BC%D0%B0%D1%88%D0%B8%D0%BD%D0%B0-%D0%BD%D0%B0-%D1%84%D0%BE%D0%BD%D0%B5-%D0%B7%D0%B0%D0%B1%D0%BE%D1%80%D0%B0.jpg">
                            <button type="button" class="btn btn-default btn-block">Изменить аватар</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- panel body -->

@endsection