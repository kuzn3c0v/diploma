@extends('layout.layout')

@section('content')

    <div class="panel-body my-panel"> <!-- todo подогнать мин высоту -->
        <div class="content-row">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-search search-only">
                        <i class="search-icon glyphicon glyphicon-search"></i>
                        <input type="text" class="form-control search-query">  <!-- todo сделать поиск -->
                    </div>
                    <table id="myTable">
                        <tr class="header">
                            <th style="width:10%;"></th>
                            <th style="width:30%;">Сотрудник</th>
                            <th style="width:30%;">Должность</th>
                            <th style="width:30%;">Подразделение</th>
                        </tr>
                        @foreach($employees as $employee)
                            <tr onclick="window.location.href='{{ route('profile.show', ['id' => $employee->id]) }}'; return false">
                                <td><img class="img-circle" src="https://pbs.twimg.com/profile_images/352878396/butters-avatar-sq-transp.png" style="width: 80%"></td>
                                <td>{{ $employee->name }}&nbsp;{{ $employee->surname }}</td>
                                <td>{{ $employee->position()->first()->position }}</td>
                                <td>{{ $employee->office()->first()->name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div><!-- panel body -->

@endsection