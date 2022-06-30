{{--  @extends('layouts.app')

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
@endsection  --}}

@include('layouts.dashboard_header')


<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">

                        <!-- statustic-card start -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-yellow text-white">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="m-b-5">New Customer</p>
                                            <h4 class="m-b-0">852</h4>
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
                                            <p class="m-b-5">Income</p>
                                            <h4 class="m-b-0">$5,852</h4>
                                        </div>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-credit-card f-50 text-c-green"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-pink text-white">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="m-b-5">Ticket</p>
                                            <h4 class="m-b-0">42</h4>
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
                                            <p class="m-b-5">Orders</p>
                                            <h4 class="m-b-0">$5,242</h4>
                                        </div>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- statustic-card start -->

                   
                    </div>
                </div>
            </div>

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>


 @include('layouts.dashboard_footer')