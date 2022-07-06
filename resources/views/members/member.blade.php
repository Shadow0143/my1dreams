@include('layouts.dashboard_header')

<div class="wrapper">
    <div class="card">
        <div class="card-header">
            <div class="col-12 row">
                <div class="col-md-10">
                    <h3>Member List</h3>
                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>
                </div>
                <div class="col-md-2">
                    @if ($limit >= 20)
                        <a href="javascript:void(0);" class="btn btn-sm" disabled style="cursor: not-allowed"><span class="label label-danger">+ Add Member</a>
                    @else
                        <a href="{{ route('addMemberForm') }}" class="btn btn-sm"><span class="label label-danger">+
                                Add Member</span> </a>
                    @endif
                </div>
            </div>

        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table id="memberTable" class="table dt-responsive width-100">
                    <thead class="text-left">
                        <tr>
                            <th>Sl. No.</th>
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
                        @forelse($memberList as $key => $val)
                            <tr id="removerow{{ $val->id }}">
                                <td>{{ $key + 1 }}</td>
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
                                        <a href="" class="text-danger block_unblock"
                                            data-id="{{ $val->id }}" data-type="block" id="blockMaster"><i
                                                class="fa fa-ban icon_size" aria-hidden="true" title="Block"></i></a>
                                    @else
                                        <a href="" class="text-success block_unblock"
                                            data-id="{{ $val->id }}" data-type="unblock" id="unblock"><i
                                                class="fa fa-ban icon_size" aria-hidden="true" title="Unblock"></i></a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('editMember', ['id' => $val->id]) }}" class="text-warning"
                                        id="editMaster"> <i class="fa fa-pencil-square-o icon_size" aria-hidden="true"
                                            title=" Edit"></i></a>

                                    {{--  <a href="javaScript:void(0);" class="text-danger deleteMember" id="deleteMember"
                                        data-id="{{ $val->id }}"> <i class="fa fa-trash icon_size"
                                            aria-hidden="true" title=" Delete"></i></a>  --}}

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="8">No data found.</td>
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
        $('#memberTable').DataTable();
    });


    $(document).on('click', '.block_unblock', function(e) {
        e.preventDefault();
        var master_id = $(this).data('id');
        var master_type = $(this).data('type');
        if (master_type == 'block') {
            var messsage = "You won't block this member !";
        } else {
            var messsage = "You won't unblock this member !";

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
                    url: '{{ route('blockMember') }}',
                    data: {
                        master_id: master_id,
                        master_type: master_type
                    },
                    success: function(data) {
                        if (data.type == 'block') {
                            swal({
                                title: 'Success',
                                text: "Blocked",
                                icon: 'success',
                                buttons: true,
                                buttonsStyling: false,
                                reverseButtons: true
                            });
                            setInterval(window.location.reload(), 100000);
                        }
                        if (data.type == 'unblock') {
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


    $(document).on('click', '.deleteMember', function(e) {
        e.preventDefault();
        var member_id = $(this).data('id');
        swal({
            title: 'Are you sure?',
            text: "You want to delete member !",
            icon: 'warning',
            buttons: true,
            buttonsStyling: false,
            reverseButtons: true
        }).then((confirm) => {
            if (confirm) {
                $.ajax({
                    type: "GET",
                    url: '{{ route('deleteMember') }}',
                    data: {
                        member_id: member_id,
                    },
                    success: function(data) {
                        swal({
                            title: 'Success',
                            text: "Deleted",
                            icon: 'success',
                            buttons: true,
                            buttonsStyling: false,
                            reverseButtons: true
                        });
                        $('#removerow' + data).hide();

                    }
                });
            }

        });
    });
</script>
@include('layouts.dashboard_footer')
