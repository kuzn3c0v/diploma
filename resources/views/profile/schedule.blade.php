<div class="row profile-string">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
            <tr class="info">
                <th>Пн</th>
                <th>Вт</th>
                <th>Ср</th>
                <th>Чт</th>
                <th>Пт</th>
                <th style="background-color: #F5D76E">Сб</th>
                <th style="background-color: #F5D76E">Вс</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($user::WEEKDAYS as $day)
                    <td>
                        @if(($user->schedule_start()->first()->$day->format('H:i')) - ($user->schedule_finish()->first()->$day->format('H:i')))
                            {{ $user->schedule_start()->first()->$day->format('H:i') }}
                            &nbsp;-&nbsp;
                            {{ $user->schedule_finish()->first()->$day->format('H:i') }}
                        @else
                            Выходной
                        @endif
                    </td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
</div>