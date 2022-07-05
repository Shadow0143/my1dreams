@include('layouts.dashboard_header')
<div class="wrapper">
    <div class="col-12 mt-2 mb-2 text-left" style="margin-left: 90%;">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#historyModal">
            View History
        </button>
    </div>
    <div class="col-12" id="1pm">
        <input type="checkbox" name="1pmgames" id="1pmgames"> <b>Game Time: </b> 1 PM
        <div class="card">
            <div class="row">
                @foreach ($game as $key => $val)
                    <div class="col-1 text-center">
                        <a href="javascript:void(0);" class="1pmtimecard">
                            <input type="text" name="1pmsubmittime" id="submittime" value="1pm"
                                class="1pmsubmittime" style="display: none">
                            <input type="text" name="1pmgameno" id="gameno" value="{{ $val->id }}"
                                class="1pmgameno" style="display: none">
                            <div class="card  small-game-card ">{{ $val->id }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-12" id="4pm">
        <input type="checkbox" name="4pmgames" id="4pmgames"> <b>Game Time: </b> 4 PM
        <div class="card">
            <div class="row">
                @foreach ($game as $key => $val)
                    <div class="col-1 text-center">
                        <a href="javascript:void(0);" class="4pmtimecard" data-time="4pm"
                            data-gameno="{{ $val->id }}">
                            <input type="text" name="4pmsubmittime" id="submittime" value="4pm"
                                class="4pmsubmittime" style="display: none">
                            <input type="text" name="4pmgameno" id="gameno" value="{{ $val->id }}"
                                class="4pmgameno" style="display: none">
                            <div class="card  small-game-card ">{{ $val->id }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-12" id="8pm">
        <input type="checkbox" name="8pmgames" id="8pmgames"> <b>Game Time: </b> 8 PM
        <div class="card">
            <div class="row">
                @foreach ($game as $key => $val)
                    <div class="col-1 text-center">
                        <a href="javascript:void(0);" class="8pmtimecard" data-time="8pm"
                            data-gameno="{{ $val->id }}">
                            <input type="text" name="8pmsubmittime" id="submittime" value="8pm"
                                class="8pmsubmittime" style="display: none">
                            <input type="text" name="8pmgameno" id="gameno" value="{{ $val->id }}"
                                class="8pmgameno" style="display: none">
                            <div class="card  small-game-card ">{{ $val->id }}</div>
                        </a>
                    </div>
                @endforeach
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
                <h5 class="modal-title" id="exampleModalLabel">Add Amount</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addAmount') }}" method="post">
                @csrf
                <input type="hidden" name="time" id="time" class="modaltime">
                <input type="hidden" name="game_no" id="game_no" class="modalgameno">
                <div class="modal-body">
                    <div class="col-12">
                        <label for="amount">Amount</label>
                        <input type="text" name="bet_amount" id="bet_amount" class="form-control numericOnly"
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

<!-- Modal -->
<div class="modal fade" id="historyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tr>
                        <th>Sl.no</th>
                        <th>Game Time</th>
                        <th>Game Number</th>
                        <th>Amount</th>
                    </tr>
                    @forelse($play_game as $key => $val)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->game_time }}</td>
                            <td>{{ $val->game_no }}</td>
                            <td>₹{{ $val->amount }}</td>
                        </tr>
                    @empty
                        <tr>
                            <th class="text-center" colspan="4"> No History.</th>
                        </tr>
                    @endforelse

                </table>
            </div>

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
    $(document).ready(function(e) {
        $('.1pmtimecard').css('pointerEvents', 'none');
        $('.4pmtimecard').css('pointerEvents', 'none');
        $('.8pmtimecard').css('pointerEvents', 'none');

    });

    $('#1pmgames').click(function(e) {
        if (this.checked) {
            $('.1pmtimecard').css('pointerEvents', 'auto');
            $('.1pmtimecard').css('cursor', 'default');

        } else {
            $('.1pmtimecard').css('pointerEvents', 'none');
            $('.1pmtimecard').css('cursor', 'not-allowed');
        }
    });
    $('#4pmgames').click(function(e) {
        if (this.checked) {
            $('.4pmtimecard').css('pointerEvents', 'auto');

        } else {
            $('.4pmtimecard').css('pointerEvents', 'none');
            $('.4pmtimecard').css('cursor', 'not-allowed');
        }
    });
    $('#8pmgames').click(function(e) {
        if (this.checked) {
            $('.8pmtimecard').css('pointerEvents', 'auto');

        } else {
            $('.8pmtimecard').css('pointerEvents', 'none');
            $('.8pmtimecard').css('cursor', 'not-allowed');
        }
    })
</script>

<script>
    $(".numericOnly").keypress(function(e) {
        if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
    });
</script>


<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
    $('.1pmtimecard').click(function(e) {
        value = $(this);
        var time = value.find('input:text[name=1pmsubmittime]').val();
        var gameno = value.find('input:text[name=1pmgameno]').val();

        $('.modalgameno').val(gameno);
        $('.modaltime').val(time);
        $('#exampleModal').modal('show');
    });


    $('.4pmtimecard').click(function(e) {
        value = $(this);
        var time = value.find('input:text[name=4pmsubmittime]').val();
        var gameno = value.find('input:text[name=4pmgameno]').val();

        $('.modalgameno').val(gameno);
        $('.modaltime').val(time);
        $('#exampleModal').modal('show');
    });

    $('.8pmtimecard').click(function(e) {
        value = $(this);
        var time = value.find('input:text[name=8pmsubmittime]').val();
        var gameno = value.find('input:text[name=8pmgameno]').val();

        $('.modalgameno').val(gameno);
        $('.modaltime').val(time);
        $('#exampleModal').modal('show');
    });
</script>

<script>
    $(document).ready(function(e) {
        var current = new Date();
        if (current.getHours() > 12) {
            $("#1pmgames").attr("disabled", true);

        }
        if(current.getHours() > 15) {
            $("#4pmgames").attr("disabled", true);
        }
        if(current.getHours() > 19) {
            $("#8pmgames").attr("disabled", true);
        }
    });
</script>



@include('layouts.dashboard_footer')
