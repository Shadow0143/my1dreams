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
                <table id="issue-list-table" class="table dt-responsive width-100">
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
                        @forelse($masterList as $key => $val)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $val->name }}</td>
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
                                        <span class="label label-success">No</span>
                                    @else
                                        <span class="label label-danger">Yes</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="" class="text-warning"> <i class="fa fa-pencil-square-o" aria-hidden="true" title=" Edit"></i></a>
                                    <a href="" class="text-danger"><i class="fa fa-ban" aria-hidden="true" title="Block"></i></a>
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
@include('layouts.dashboard_footer')
