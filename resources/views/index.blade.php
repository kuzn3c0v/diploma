@extends('layout.layout')

@section('content')

<div class="panel-body my-panel">
    <div class="content-row">
        <div class="row">
            <div class="col-md-8">
                <h2 class="content-row-title" style="margin-top: 5px">Лента</h2>

                <!-- Форма добавления записей в ленту -->
                {!! Form::open() !!}
                <div class="textarea-area">
                {!! Form::textarea('comment', null, ['class' => 'textarea-input','placeholder' => 'Создать тему']) !!}
                </div>
                <div class="textarea-buttons-panel">
                    <div class="row" id="feed-whom">
                        <div class="col-md-2">
                            <h5>Кому</h5>
                        </div>
                        <div class="col-md-10">
                            <div class="well" id="whom-well">
                                <div class="chip">
                                    <img src="{{ asset('images/avatars/all-emp.png') }}" alt="Person" width="96" height="96">
                                    Всем сотрудникам
                                    <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                                </div>
                                <div class="btn" id="feed-add-btn" onclick="this.style.display='none'">
                                    <span class="glyphicon glyphicon-plus-sign" style="float: left; font-size: 19px; margin-right: 5px"></span>
                                    Добавить
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin:0">
                        <div class="col-md-4" style="padding-left: 20px">
                            {!! Form::submit('Опубликовать', ['class' => 'btn btn-primary btn-block']) !!}
                            {{--<button type="button" class="btn btn-primary btn-block">Опубликовать</button>--}}
                        </div>
                        <div class="col-md-3" style="padding-left: 20px">
                            <button type="button" class="btn btn-default btn-block" id="feed-cancel">Отменить</button>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
                {!! Form::close() !!}

                <div style="background-color: white; margin: 20px 0 20px 0; min-height: 100px; padding: 10px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis justo vitae lobortis scelerisque. Curabitur eu dui accumsan, lacinia lorem ut, fringilla arcu. Quisque non vulputate urna. Nullam condimentum urna felis, ut facilisis diam lobortis sit amet. Proin at tellus nisi. Cras tincidunt pellentesque tortor non lacinia. Quisque eget sem dui. Ut vitae mi rutrum, eleifend sapien vitae, convallis ante. Aliquam scelerisque dolor non neque lacinia, sed ornare arcu aliquam. Morbi at neque vel dolor ultrices luctus. Vestibulum ut malesuada est. Nunc euismod enim a erat auctor, non vulputate ante pellentesque.

                    Nunc sagittis varius dolor sed efficitur. Aenean luctus nunc nec facilisis luctus. Phasellus sem enim, bibendum ut nulla non, porta blandit ante. Suspendisse eu purus id erat iaculis blandit. Fusce viverra, purus non aliquet iaculis, massa massa laoreet risus, non congue ante est ut sapien. Fusce auctor turpis non pharetra congue. Duis finibus, magna eu faucibus fringilla, metus ipsum auctor mi, at tempor felis neque nec urna. Quisque iaculis metus sem, maximus luctus nunc efficitur at. Vivamus mollis sit amet libero sit amet aliquet. Sed gravida purus sed augue auctor interdum. Praesent gravida ac enim vitae interdum. Nulla sollicitudin pretium congue.
                </div>
                <div style="background-color: white; margin: 20px 0 20px 0; min-height: 100px; padding: 10px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis justo vitae lobortis scelerisque. Curabitur eu dui accumsan, lacinia lorem ut, fringilla arcu. Quisque non vulputate urna. Nullam condimentum urna felis, ut facilisis diam lobortis sit amet. Proin at tellus nisi. Cras tincidunt pellentesque tortor non lacinia. Quisque eget sem dui. Ut vitae mi rutrum, eleifend sapien vitae, convallis ante. Aliquam scelerisque dolor non neque lacinia, sed ornare arcu aliquam. Morbi at neque vel dolor ultrices luctus. Vestibulum ut malesuada est. Nunc euismod enim a erat auctor, non vulputate ante pellentesque.

                    Nunc sagittis varius dolor sed efficitur. Aenean luctus nunc nec facilisis luctus. Phasellus sem enim, bibendum ut nulla non, porta blandit ante. Suspendisse eu purus id erat iaculis blandit. Fusce viverra, purus non aliquet iaculis, massa massa laoreet risus, non congue ante est ut sapien. Fusce auctor turpis non pharetra congue. Duis finibus, magna eu faucibus fringilla, metus ipsum auctor mi, at tempor felis neque nec urna. Quisque iaculis metus sem, maximus luctus nunc efficitur at. Vivamus mollis sit amet libero sit amet aliquet. Sed gravida purus sed augue auctor interdum. Praesent gravida ac enim vitae interdum. Nulla sollicitudin pretium congue.
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="content-row-title" style="margin-top: 5px">Какая-то информация</h2>
                <div style="background-color: #4D8FAC; color: white; margin-bottom: 20px; min-height: 100px; padding: 10px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis justo vitae lobortis scelerisque. Curabitur eu dui accumsan, lacinia lorem ut, fringilla arcu. Quisque non vulputate urna. Nullam condimentum urna felis, ut facilisis diam lobortis sit amet. Proin at tellus nisi. Cras tincidunt pellentesque tortor non lacinia. Quisque eget sem dui. Ut vitae mi rutrum, eleifend sapien vitae, convallis ante. Aliquam scelerisque dolor non neque lacinia, sed ornare arcu aliquam. Morbi at neque vel dolor ultrices luctus. Vestibulum ut malesuada est. Nunc euismod enim a erat auctor, non vulputate ante pellentesque.
                </div>

            </div>
        </div>
    </div>
</div><!-- panel body -->

@endsection