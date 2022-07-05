@include('layouts.dashboard_header')
<div class="wrapper">
    <div class="col-12 text-center" id="result-header">
        Result For the date: 
        <blink> {{ date('d-m-Y') }} </blink>

       
    </div>

    <div class="col-12" id="1pm">
        <b>Game Time: </b> 1 PM
        <div class="card text-center resultdiv">
            @foreach ($result as $val)
                    @if ($val->game_time == '1:00')
                        {{ $val->first_value }} + {{ $val->second_value }} + {{ $val->third_value }} =
                        {{ $val->result }}
                    @endif
                @endforeach
        </div>
    </div>
    <div class="col-12" id="4pm">
        <b>Game Time: </b> 4 PM
        <div class="card text-center resultdiv">
            @foreach ($result as $val)
                    @if ($val->game_time == '4:00')
                        {{ $val->first_value }} + {{ $val->second_value }} + {{ $val->third_value }} =
                        {{ $val->result }}
                    @endif
            @endforeach
        </div>
    </div>
    <div class="col-12" id="8pm">
        <b>Game Time: </b> 8 PM
        <div class="card text-center resultdiv ">
            @foreach ($result as $val)
                @if ($val->game_time == '8:00')
                    {{ $val->first_value }} + {{ $val->second_value }} + {{ $val->third_value }} =
                    {{ $val->result }}
                @endif
            @endforeach
        </div>
    </div>

</div>


@include('layouts.dashboard_footer')
