@include('layouts.dashboard_header')

<div class="wrapper">
    <div class="card">
        <div class="card-header">
            <div class="col-12 row">
                <div class="col-md-10">
                    <h3>Result List</h3>
                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('resultForm') }}" class="btn btn-sm"><span class="label label-danger">+ Add
                            Result</span> </a>
                </div>
            </div>

        </div>
        <div class="card-body">
            <table class="table table-striped ">
                <tr>
                    <th>Sl. no</th>
                    <th>Result Date</th>
                    <th>Result Time</th>
                    <th>Values</th>
                    <th>Result</th>
                   
                </tr>
                @forelse($result as $key => $val)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{date('d-m-Y',strtotime($val->result_date)) }}</td>
                        <td>{{ $val->game_time }} PM</td>
                        <td>{{ $val->first_value }} + {{ $val->second_value }} + {{ $val->third_value }}</td>
                        <td>{{ $val->result }} </td>
                    
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">No Result Found.</td>
                    </tr>
                @endforelse
            </table>
        </div>

    </div>
</div>

@include('layouts.dashboard_footer')
