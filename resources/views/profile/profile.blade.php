@extends('layout.layout')

@section('content')

<div class="panel-body my-panel">
    <div class="content-row">
        <div class="row">
            <div class="col-md-12">
                <div class="row profile-row">
                    <div class="col-md-8" style="padding-left: 25px">
                        <h3 style="margin: 0">{{ $user->name }} {{ $user->surname }}</h3>
                        <h5 style="margin-top: 5px; color: #a4aaae">{{ $user->position()->first()->position }}</h5>

                        <h5>Контактная информация</h5>

                        @include('profile.string', ['name' => 'Почта', 'value' => $user->email, 'i' => 'fa-envelope-square'])

                        @include('profile.string', ['name' => 'Мобильный телефон', 'value' => $user->phone, 'i' => 'fa-tablet'])

                        @include('profile.string', ['name' => 'Рабочий телефонн', 'value' => $user->office()->first()
                            ->phone, 'i' => 'fa-phone-square'])

                        @include('profile.string', ['name' => 'Скайп', 'value' => $user->skype, 'i' => 'fa-skype'])

                        <hr>
                        <h5>Общие данные <i class="glyphicon glyphicon-question-sign" id="prof-tooltip" data-toggle="tooltip"
                                            data-placement="top" title="Изменять общие данные может только HR-менеджер"></i></h5>

                        @include('profile.string', ['name' => 'Должность', 'value' => $user->position()->first()
                            ->position, 'i' => 'fa-briefcase'])

                        @include('profile.string', ['name' => 'Подразделение', 'value' => $user->office()->first()
                            ->name, 'i' => 'fa-building-o'])

                        @include('profile.string', ['name' => 'График работы', 'value' => '', 'i' => 'fa-calendar'])
                        @if(isset($user->schedule_start()->first()->user_id) && isset($user->schedule_finish()->first()->user_id))
                            @include('profile.schedule')
                        @endif

                        @include('profile.string', ['name' => 'Адрес подразделения', 'value' => $user->office()
                            ->first()->adress, 'i' => 'fa-map-marker'])

                        @include('profile.string', ['name' => 'Начальник', 'value' => $empStructure['myBoss'],
                            'employees' => true, 'i' => 'fa-chevron-circle-up'])

                        @include('profile.string', ['name' => 'Подчиненные', 'value' => $empStructure['mySubordinate'],
                            'employees' => true, 'i' => 'fa-chevron-circle-down'])

                        @if(Auth::user()->role == 17)
                            <a class="btn btn-warning btn-block" href="{{ route('profile.edit', ['id' => Auth::id()]) }}">Изменить общие данные пользователя</a>
                        @endif

                        <hr>
                        <h5>Дополнительная информация</h5>

                        @include('profile.string', ['name' => 'День рождения', 'value' => ((isset($user->birthday)) ? $user->birthday->format('d F') : null),
                            'i' => 'fa-birthday-cake'])

                        @include('profile.string', ['name' => 'Пол', 'value' => $user->sex, 'i' => 'fa-male'])

                        @if(Auth::user()->id == $user->id)
                            <a class="btn btn-primary btn-block" href="{{ route('profile.edit', ['id' => Auth::id()]) }}">Изменить свой профиль</a>
                        @endif
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