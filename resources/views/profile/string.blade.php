<div class="row profile-string">
    <div class="col-md-5">
        <h5><span class="label" id="profile-label"><i class="fa {{ $i }}"></i>&nbsp;@if($i == 'fa-male')/&nbsp;<i class="fa fa-female"></i>&nbsp;@endif{{ $name }}:</span></h5>
    </div>
    <div class="col-md-7">
        @if(isset($employees))
            @foreach($value as $sub)
                <h6 style="margin-bottom: 5px; padding-top: 5px">
                    <a href="{{ route('profile.show', ['id' => $sub['id']]) }}">
                        {{ $sub['name']. ' ' . $sub['surname'] }}
                    </a>
                    {{ '(' . $sub->position()->first()->position . ')' }}
                </h6>
            @endforeach
        @else
            <h6 style="padding-top: 3px">{{ $value }}</h6>
        @endif
    </div>
</div>