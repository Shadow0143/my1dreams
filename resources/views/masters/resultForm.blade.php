@include('layouts.dashboard_header')

<div class="wrapper">
    <div class="card">
        <div class="card-header">
            <div class="col-12 row">
                <div class="col-md-12 text-center">
                    <h3>Create Result </h3>
                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body col-12">
            <form action="{{ route('submitResult') }}" method="post">
                @csrf
                <div class="row">
                        <div class="col-6">
                            <label for="date">Result Date</label>
                            <input type="date" name="result_date" id="result_date" class="form-control" value="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="col-6">
                            <label for="date">Result Time</label>
                            <select name="result_time" id="result_time" class="form-control" required>
                                <option value="">Select Time</option>
                                <option value="1:00">1 PM</option>
                                <option value="4:00">4 PM</option>
                                <option value="8:00">8 PM</option>
                            </select>
                        </div>
                        <div class="col-3 mt-5">
                            <div class="card">
                                <label for="first_value"> First Value</label>
                                <input type="text" name="first_value" id="first_value" class="form-control numericOnly" required maxlength="1">
                            </div>
                        </div>
                        <div class="col-3 mt-5">
                            <div class="card">
                                <label for="second_value"> Second Value</label>
                                <input type="text" name="second_value" id="second_value" class="form-control numericOnly" required maxlength="1">
                            </div>
                        </div> 
                        <div class="col-3 mt-5">
                            <div class="card">
                                <label for="third_value"> Third Value</label>
                                <input type="text" name="third_value" id="third_value" class="form-control numericOnly" required maxlength="1" >
                            </div>
                        </div>
                        <div class="col-3 mt-5">
                            <div class="card">
                                <label for="sum_value"> Sum</label>
                                <input type="text" name="sum_value" id="sum_value" class="form-control" readonly>
                            </div>
                        </div>
                        {{--  <div class="col-2 mt-5">
                            <div class="card">
                                <label for="result"> Result</label>
                                <input type="text" id="sum_value2" class="form-control" readonly>
                            </div>
                        </div>  --}}
                        <div class="col-12 text-center">
                            <button href="" class="btn btn-danger btn-sm" type="submit">Save</button>
                        </div>
                </div>
            </form>
        </div>


    </div>
</div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

        
        $('#first_value').keyup(function(event) {
            var first_value = $('#first_value').val();
            $('#sum_value').val(first_value);
        });

        $('#second_value').keyup(function(event) {
            var first_value = $('#first_value').val();
            var second_value = $('#second_value').val();
            var sum = parseInt(first_value) + parseInt(second_value);
            $('#sum_value').val(sum);
        });

        $('#third_value').keyup(function(event) {
            var first_value = $('#first_value').val();
            var second_value = $('#second_value').val();
            var third_value = $('#third_value').val();
            var sum = parseInt(first_value) + parseInt(second_value) + parseInt(third_value);
            $('#sum_value').val(sum);

           // var lastvalue = sum.substr(-1);
            //$('#sum_value2').val(lastvalue);
        });
    </script>
@include('layouts.dashboard_footer')
