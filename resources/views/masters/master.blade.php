@include('layouts.dashboard_header')

<div class="wrapper">
    <div class="card">
        <div class="card-header">
            <div class="col-12 row">
                <div class="col-md-10">
                    <h3>Masters List</h3>
                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('addMasterForm') }}" class="btn btn-sm"><span class="label label-danger">+ Add
                            Masters</span> </a>
                </div>
            </div>

        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table id="memberTable" class="table dt-responsive">
                    <thead class="text-left">
                        <tr>
                            <th>Sl. No.</th>
                            <th>Master Id.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Block</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        @forelse($masterList as $key => $val)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $val->refral_code }}</td>
                                <td>{{ ucfirst($val->name) }}</td>
                                <td>{{ $val->email }}</td>
                                <td>{{ $val->Phone_number }}</td>
                                <td>{{ $val->address }}</td>
                                <td>
                                    @if ($val->status == 1)
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-danger">Deactive</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($val->is_block == 'no')
                                    <a href="" class="text-danger block_unblock" data-id="{{ $val->id }}" data-type="block" id="blockMaster"><i class="fa fa-ban icon_size" aria-hidden="true" title="Block"></i></a>
                                @else
                                    <a href="" class="text-success block_unblock" data-id="{{ $val->id }}" data-type="unblock" id="unblock"><i class="fa fa-ban icon_size" aria-hidden="true" title="Unblock"></i></a>
                                @endif
                                </td>
                                <td>
                                    <a href="{{ route('editMaster',['id' => $val->id]) }}" class="text-warning"  id="editMaster"> <i class="fa fa-pencil-square-o icon_size" aria-hidden="true" title=" Edit"></i></a>
                                   

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No data found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- end of table -->
        </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function () {
        $('#memberTable').DataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false });
    
    });

    $(document).on('click', '.block_unblock', function(e) {
        e.preventDefault();
        var master_id = $(this).data('id');
        var master_type = $(this).data('type');
        if(master_type =='block')
        {
            var messsage = "You won't block this master !";
        }else{
            var messsage = "You won't unblock this master !";

        }
        swal({
            title: 'Are you sure?',
            text: messsage,
            icon: 'warning',
            buttons: true,
            buttonsStyling: false,
            reverseButtons: true
        }).then((confirm) => {
            if (confirm) {
                $.ajax({
                    type: "GET",
                    url: '{{ route('blockMaster') }}',
                    data: {
                        master_id: master_id,
                        master_type:master_type
                    },
                    success: function(data) {
                        if(data.type =='block'){
                        swal({
                            title: 'Success',
                            text: "Blocked",
                            icon: 'success',
                            buttons: true,
                            buttonsStyling: false,
                            reverseButtons: true
                        });
                        setInterval(window.location.reload(), 100000);
                    }   if(data.type =='unblock'){
                        swal({
                            title: 'Success',
                            text: "Unblocked",
                            icon: 'success',
                            buttons: true,
                            buttonsStyling: false,
                            reverseButtons: true
                        });
                        setInterval(window.location.reload(), 100000);
                    }
                    }
                });
            }

        });
    });
</script>
@include('layouts.dashboard_footer')

