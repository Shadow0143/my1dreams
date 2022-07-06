@include('layouts.dashboard_header')
<div class="wrapper">
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>User Profile</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Page-header end -->

                    <!-- Page-body start -->
                    <div class="page-body">
                        <!--profile cover start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cover-profile">
                                    <div class="profile-bg-img">
                                        <img class="profile-bg-img img-fluid"
                                            src="{{ asset('extra/libraries\assets\images\user-profile\bg-img1.jpg') }}"
                                            alt="bg-img">
                                        <div class="card-block user-info">
                                            <div class="col-md-12">
                                                <div class="media-left">
                                                    <a href="#" class="profile-image">
                                                        <img class="user-img img-radius"
                                                            src="{{ asset('uploads/profilePic') }}/{{ $userDetail->profile_pic }}"  alt="user-img">
                                                    </a>
                                                </div>
                                                <div class="media-body row">
                                                    <div class="col-lg-12">
                                                        <div class="user-title">
                                                            <h2>{{ ucfirst($userDetail->name) }}</h2>
                                                            <button id="edit-btn" type="button"
                                                            class="btn btn-sm btn-primary waves-effect waves-light f-right"  data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icofont icofont-edit"></i>
                                                        </button>
                                                        </div>
                                                    </div>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--profile cover end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- tab header start -->
                                <div class="tab-header card">
                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#personal"
                                                role="tab">Personal Info</a>
                                            <div class="slide"></div>
                                        </li>
                                      
                                    </ul>
                                </div>
                                <!-- tab header end -->
                                <!-- tab content start -->
                                <div class="tab-content">
                                    <!-- tab panel personal start -->
                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                        <!-- personal card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">About Me</h5>
                                              
                                            </div>
                                            <form action="{{ route('saveUserDetails') }}" method="post">@csrf
                                                <div class="card-block">
                                                    <div class="view-info">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="general-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-xl-6">
                                                                            <div class="table-responsive">
                                                                                <input type="hidden" name="user_id" id="user_id" value="{{ $userDetail->id }}">
                                                                                <table class="table m-0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th scope="row">Full Name
                                                                                            </th>
                                                                                            <td>
                                                                                                <input type="text" name="user_name" id="user_name" value="{{ $userDetail->name }}" class="form-control">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">Email</th>
                                                                                            <td>
                                                                                                <input type="email" name="user_email" id="user_email" value="{{ $userDetail->email }}" class="form-control">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end of table col-lg-6 -->
                                                                        <div class="col-lg-12 col-xl-6">
                                                                            <div class="table-responsive">
                                                                                <table class="table">
                                                                                    <tbody>
                                                                                    
                                                                                        <tr>
                                                                                            <th scope="row">Mobile Number
                                                                                            </th>
                                                                                            <td>
                                                                                                <input type="text" name="user_mobile" id="user_mobile" value="{{ $userDetail->Phone_number }}" class="form-control" readonly>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">Address</th>
                                                                                            <td>
                                                                                                <input type="text" name="user_address" id="user_address" value="{{ $userDetail->address }}" class="form-control">
                                                                                            </td>
                                                                                        </tr>
                                                                                    
                                                                                        
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end of table col-lg-6 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                                <!-- end of general info -->
                                                            </div>
                                                            <!-- end of col-lg-12 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <button type="submit" class="btn btn-danger">Update</button>
                                                    </div>
                                                
                                                </div>
                                            </form>
                                            <!-- end of card-block -->
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- personal card end-->
                </div>

            </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>
</div>
<!-- Main body end -->

</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Profile Pic</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('saveProfileImage') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{ $userDetail->id }}">
       <input type="file" name="user_pic" id="user_pic" class="form-control"  accept="image/*" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
      </div>
    </form>
    </div>
  </div>
</div>


@include('layouts.dashboard_footer')
