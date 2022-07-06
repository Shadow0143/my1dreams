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

            </div>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table id="issue-list-table" class="table dt-responsive width-100">
                    <thead class="text-left">
                        <tr>
                            <th>Sl. No.</th>
                            <th>User Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Coin </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        @forelse($members as $key => $val)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $val->refral_code }}</td>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->email }}</td>
                                <td>{{ $val->Phone_number }} </td>
                                <td>{{ $val->address }}</td>
                                <td>
                                    @if (count($val->coins) > 0)
                                       <strong>  {{ $val->coins[0]->available_amount }} </strong>
                                    @else
                                        0
                                    @endif

                                </td>
                                <td>
                                    <a href="javaScript:void(0);" class="btn btn-sm btn-danger user_id"
                                        data-id="{{ $val->refral_code }}" id="user_id"> + Refill </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="5">No data found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- end of table -->
        </div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Refill Amount</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('submitRefillAmount') }}" method="post">
                @csrf
                <input type="hidden" name="refCode" id="refCode" class="refCode">
                <div class="modal-body">
                    <div class="col-12">
                        <label for="amount">Amount</label>
                        <input type="text" name="refill_amount" id="refill_amount" class="form-control numericOnly"
                            required autocomplete="new-amount">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="subimt" class="btn btn-primary">Save </button>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script>
    $(".numericOnly").keypress(function(e) {
        if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
    });
</script>



<script>
    $(document).on('click', '.user_id', function(e) {
        e.preventDefault();
        var user_id = $(this).data('id');

        $('.refCode').val(user_id);
        $('#exampleModal').modal('show');

    });
</script>

@include('layouts.dashboard_footer')
