{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a href="{{ route('addMasterForm') }}">  + add Masters  </a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@include('layouts.dashboard_header')


<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body" id="dashboard_main">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">

                        <!-- statustic-card start -->
                        @if (Auth::user()->user_type == 'superAdmin')
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-yellow text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Total Masters</p>
                                                <h4 class="m-b-0">{{ $numberOfMaster }}</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-user f-50 text-c-yellow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Total Members</p>
                                                <h4 class="m-b-0">{{ $numberOfMember }}</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-user f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (Auth::user()->user_type == 'Master')
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Total Members</p>
                                                <h4 class="m-b-0">{{ $numberOfMember }}</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-user f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (Auth::user()->user_type == 'Master' || Auth::user()->user_type == 'Member')
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-pink text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Coins</p>
                                                <h4 class="m-b-0">
                                                    @if (!empty($coins))
                                                        {{ $coins->available_amount }}
                                                    @else
                                                        0
                                                    @endif

                                                </h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-bitcoin f-50 text-c-pink"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Today's Invest </p>
                                                <h4 class="m-b-0">
                                                    @if (!empty($todayPlayGame))
                                                        {{ $todayPlayGame }}
                                                    @else
                                                        0
                                                    @endif
                                                </h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-bitcoin f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-blue text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Total Invest   </p>
                                                <h4 class="m-b-0">
                                                    @if (!empty($playGame))
                                                        {{ $playGame }}
                                                    @else
                                                        0
                                                    @endif
                                                </h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="fa fa-bitcoin f-50 text-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                        <!-- statustic-card start -->
                    </div>
                </div>
            </div>

            @foreach ($todayBet as $bk => $bv)
                <div class="col-12" id="{{ $bv['item'] }}">
                    <div class="mb-3">
                        <b >Game Time: </b> {{ strtoupper($bv['item']) }}
                    </div>
                    <div class="card">
                        <div class="row">
                            @foreach ($bv['details'] as $dk => $dv)
                                <div class="col-lg-1 col-md-2  col-sm-2  col-4  col-xs-4  text-center">
                                    <a href="javascript:void(0);" class="{{ $bv['item'] }}timecard"
                                        data-time="{{ $bv['item'] }}"
                                        onclick="tooltip('{{ $dv['game_no'] }}','{{ $dv['game_time'] }}')">
                                        <div class="card  small-game-card ">{{ $dv['game_no'] }}</div>
                                        {{ $dv['amount'] }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contribution List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>

        </div>
    </div>
</div>




<script>
    function tooltip(no, time) {

        $.ajax({
            type: "GET",
            url: '{{ route('toolTip') }}',
            data: {
                no: no,
                time: time
            },
            success: function(data) {
                //alert(data);
                $(".modal-body").html(data);
                $('#exampleModal').modal('show');
            }
        });

    }
</script>

@include('layouts.dashboard_footer')
