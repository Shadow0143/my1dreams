@include('layouts.dashboard_header')
<div class="wrapper">
    <div class="col-12 text-center" id="result-header">
        <blink> Result For the date: {{ date('d-m-Y') }} </blink>
    </div>

    @if ($result)

        @if ($result1pm)
            <div class="col-12" id="1pm">
                <b>Game Time: </b> 1 PM
                <div class="card text-center resultdiv">
                    {{ $result1pm->first_value }} + {{ $result1pm->second_value }} + {{ $result1pm->third_value }}
                    =
                    {{ $result1pm->result }}
                </div>
            </div>
        @else
            <div class="col-12" id="1pm">
                <b>Game Time: </b> 1 PM
                <div class="card text-center resultdiv">
                    No Result.
                </div>
            </div>
        @endif
        @if ($result4pm)
            <div class="col-12" id="1pm">
                <b>Game Time: </b> 4 PM
                <div class="card text-center resultdiv">
                    {{ $result4pm->first_value }} + {{ $result4pm->second_value }} + {{ $result4pm->third_value }}
                    =
                    {{ $result4pm->result }}
                </div>
            </div>
        @else
            <div class="col-12" id="1pm">
                <b>Game Time: </b> 4 PM
                <div class="card text-center resultdiv">
                    No Result.
                </div>
            </div>
        @endif
        @if ($result8pm)
            <div class="col-12" id="1pm">
                <b>Game Time: </b> 8 PM
                <div class="card text-center resultdiv">
                    {{ $result8pm->first_value }} + {{ $result8pm->second_value }} +
                    {{ $result8pm->third_value }} =
                    {{ $result8pm->result }}
                </div>
            </div>
        @else
            <div class="col-12" id="1pm">
                <b>Game Time: </b> 8 PM
                <div class="card text-center resultdiv">
                    No Result.
                </div>
            </div>
        @endif
    @else
        <div class="col-12 text-center text-danger resultdiv">
            No result for today.
        </div>
    @endif
</div>


@include('layouts.dashboard_footer')
