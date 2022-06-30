@include('layouts.dashboard_header')

<div class="wrapper">
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
              

                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                          
                            <div class="col-sm-12">
                                <!-- Job application card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Add Masters</h3>
                                    </div>
                                    
                                    <div class="card-block">    
                                        <div >
                                            <form action="{{ route('submitMaster') }}" method="post" class="j-pro"
                                                id="j-pro" enctype="multipart/form-data" > 
                                                @csrf
                                                <!-- end /.header-->
                                                <div class="j-content">
                                                    <!-- start name -->
                                                    <div class="j-row">
                                                        <div class="j-span6 j-unit">
                                                            <div class="j-input">
                                                                <label class="j-icon-right" for="first_name">
                                                                    <i class="icofont icofont-ui-user"></i>
                                                                </label>
                                                                <input type="text" id="first_name" name="full_name"
                                                                    placeholder="Full name">
                                                                    <span
                                                                    style="font-weight: bold;color: #ff0000">{{ $errors->first('full_name') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="j-row">
                                                            <div class="j-span6 j-unit">
                                                                <div class="j-input">
                                                                    <label class="j-icon-right" for="email">
                                                                        <i class="icofont icofont-envelope"></i>
                                                                    </label>
                                                                    <input type="email" placeholder="Email" id="email"
                                                                        name="email">
                                                                        <span
                                                                    style="font-weight: bold;color: #ff0000">{{ $errors->first('email') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="j-span6 j-unit">
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end name -->
                                                    <!-- start email phone -->
                                                    <div class="j-row">
                                                        <div class="j-span6 j-unit">
                                                            <div class="j-input">
                                                                <label class="j-icon-right" for="password">
                                                                    <i class="icofont icofont-ui-password"></i>
                                                                </label>
                                                                <input type="password" id="password" name="password"
                                                                    placeholder="Password">
                                                                    <span
                                                                    style="font-weight: bold;color: #ff0000">{{ $errors->first('full_name') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="j-row">
                                                            <div class="j-span6 j-unit">
                                                                <div class="j-input">
                                                                    <label class="j-icon-right" for="confirm_password">
                                                                        <i class="icofont icofont-ui-password"></i>
                                                                    </label>
                                                                    <input type="password" placeholder="Confirm Password" id="confirm_password"
                                                                        name="confirm_password">
                                                                        <span
                                                                    style="font-weight: bold;color: #ff0000">{{ $errors->first('confirm_password') }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="j-span6 j-unit">
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end email phone -->
                                                    <div class="divider gap-bottom-25"></div>
                                                
                                                    <!-- start city post code -->
                                                    <div class="j-row">
                                                        <div class="j-span8 j-unit">
                                                            <div class="j-input j-append-small-btn">
                                                                <div class="j-file-button">
                                                                    Browse
                                                                    <input type="file" name="profile_pic"
                                                                        onchange="document.getElementById('profile_pic').value = this.value;">
                                                                </div>
                                                                <input type="text" id="profile_pic" readonly=""
                                                                    placeholder="Profile Pic">
                                                            </div>
                                                        </div>
                                                        <div class="j-span4 j-unit">
                                                            <div class="j-input">
                                                                <label class="j-icon-right" for="phone">
                                                                    <i class="icofont icofont-phone"></i>
                                                                </label>
                                                                <input type="text" placeholder="Phone" id="phone"
                                                                    name="phone">
                                                                <span class="j-tooltip j-tooltip-right-top">Your contact
                                                                    phone number</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end city post code -->
                                                    <!-- start address -->
                                                    <div class="j-unit">
                                                        <div class="j-input">
                                                            <label class="j-icon-right" for="address">
                                                                <i class="icofont icofont-building"></i>
                                                            </label>
                                                            <input type="text" id="address"
                                                                placeholder="Address" name="address">
                                                        </div>
                                                    </div>
                                                    <!-- end address -->
                                                    <div class="divider gap-bottom-25"></div>
                                                </div>
                                                <!-- end /.content -->
                                                <div class="j-footer">
                                                    <button type="submit" class="btn btn-danger">Send</button>
                                                    <button type="reset"
                                                        class="btn btn-default m-r-20">Reset</button>
                                                </div>
                                                <!-- end /.footer -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Job application card end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>
@include('layouts.dashboard_footer')
