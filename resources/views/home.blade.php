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
                            @if (Auth::user()->user_type == 'superAdmin' || Auth::user()->user_type == 'Master')
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

                            @if (Auth::user()->user_type == 'Master' || Auth::user()->user_type == 'Member')
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-c-pink text-white">
                                        <div class="card-block">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <p class="m-b-5">Coins</p>
                                                    <h4 class="m-b-0">
                                                        @if(!empty($coins))
                                                        {{ $coins->available_amount }}
                                                        @else
                                                            0
                                                        @endif
                                                        
                                                    </h4>
                                                </div>
                                                <div class="col col-auto text-right">
                                                    <i class="feather icon-book f-50 text-c-pink"></i>
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
                                                    <p class="m-b-5">Invest Amount</p>
                                                    <h4 class="m-b-0">
                                                        @if(!empty($playGame))
                                                        {{ $playGame }}
                                                        @else
                                                            0
                                                        @endif
                                                    </h4>
                                                </div>
                                                <div class="col col-auto text-right">
                                                    <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
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
                @if (Auth::user()->user_type == 'superAdmin')

                <div class="col-12" id="1pm">
                     <b>Game Time: </b> 1 PM
                    <div class="card">
                        <div class="row">
                            @foreach($todayBet as $key => $value)
                                <div class="col-1 text-center">
                                    <a href="javascript:void(0);" class="1pmtimecard" data-toggle="tooltip" title="add to cart">
                                        @if($value->game_time =='1pm')
                                        <div class="card  small-game-card ">{{  $value->game_no  }}</div>
                                            amount: {{ $value->amount }}
                                            @endif
                                        </a>
                                    </div>
                                    @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12" id="4pm">
                  <b>Game Time: </b> 4 PM
                    <div class="card">
                        <div class="row">
                            @foreach($todayBet as $key => $value)
                                <div class="col-1 text-center">
                                    <a href="javascript:void(0);" class="4pmtimecard" data-time="4pm" data-toggle="tooltip" title="add to cart">
                                        @if($value->game_time =='4pm')
                                        <div class="card  small-game-card ">{{  $value->game_no  }}</div>
                                            amount: {{ $value->amount }}
                                        
                                            @endif
                                        </a>
                                    </div>
                                    @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12" id="8pm">
                <b>Game Time: </b> 8 PM
                    <div class="card">
                        <div class="row">
                            @foreach($todayBet as $key => $value)
                                <div class="col-1 text-center">
                                    <a href="javascript:void(0);" class="8pmtimecard" data-time="8pm" data-toggle="tooltip" title="add to cart"    >
                                      @if($value->game_time =='8pm')
                                      <div class="card  small-game-card ">{{  $value->game_no  }}</div>
                                          amount: {{ $value->amount }}
                                      
                                          @endif
                                        </a>
                                    </div>
                                    @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>

    


    <script>
        $('a[data-toggle="tooltip"]').tooltip({
            animated: 'fade',
            placement: 'bottom',
        });
    </script>

    @include('layouts.dashboard_footer')

   
