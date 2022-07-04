@include('layouts.dashboard_header')
<div class="wrapper">
    <div class="col-12" id="1pm">
        <div class="card">
            <div class="row">
                @foreach ($game as $key => $val)
                    <div class="col-1 text-center">
                        <a href="javascript:void(0);" class="1pmtimecard">
                            <input type="text" name="1pmsubmittime" id="submittime" value="1pm" class="1pmsubmittime" style="display: none">
                            <input type="text" name="1pmgameno" id="gameno" value="{{ $val->id }}" class="1pmgameno" style="display: none">
                            <div class="card  small-game-card ">{{ $val->id }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-12" id="4pm">
        <div class="card">
            <div class="row">
                @foreach ($game as $key => $val)
                <div class="col-1 text-center">
                    <a href="javascript:void(0);" class="4pmtimecard" data-time="4pm" data-gameno="{{ $val->id }}">
                        <input type="text" name="4pmsubmittime" id="submittime" value="4pm" class="4pmsubmittime" style="display: none">
                        <input type="text" name="4pmgameno" id="gameno" value="{{ $val->id }}" class="4pmgameno" style="display: none">
                        <div class="card  small-game-card ">{{ $val->id }}</div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <div class="col-12" id="8pm">
        <div class="card">
            <div class="row">
                @foreach ($game as $key => $val)
                <div class="col-1 text-center">
                    <a href="javascript:void(0);" class="8pmtimecard" data-time="8pm" data-gameno="{{ $val->id }}">
                        <input type="text" name="8pmsubmittime" id="submittime" value="8pm" class="8pmsubmittime" style="display: none">
                        <input type="text" name="8pmgameno" id="gameno" value="{{ $val->id }}" class="8pmgameno" style="display: none">
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
            <form action="" method="post">
                <input type="text" name="time" id="time" class="modaltime">
                <input type="text" name="game_no" id="game_no" class="modalgameno">
                <div class="modal-body">
                    <div class="col-12">
                        <label for="amount">Amount</label>
                        <input type="text" name="bet_amount" id="bet_amount" class="form-control numericOnly">
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
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- BS JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
        $('.1pmtimecard').click(function(e) {
           value = $(this);
           var time = value.find('input:text[name=1pmsubmittime]').val();
           var gameno = value.find('input:text[name=1pmgameno]').val();
           alert(time);
           alert(gameno);
            $('.modalgameno').val(gameno);
            $('.modaltime').val(time);
            $('#exampleModal').modal('show');
        });


        $('.4pmtimecard').click(function(e) {
            value = $(this);
            var time = value.find('input:text[name=4pmsubmittime]').val();
            var gameno = value.find('input:text[name=4pmgameno]').val();
            alert(time);
            alert(gameno);
             $('.modalgameno').val(gameno);
             $('.modaltime').val(time);
             $('#exampleModal').modal('show');
         });

         $('.8pmtimecard').click(function(e) {
            value = $(this);
            var time = value.find('input:text[name=8pmsubmittime]').val();
            var gameno = value.find('input:text[name=8pmgameno]').val();
            alert(time);
            alert(gameno);
             $('.modalgameno').val(gameno);
             $('.modaltime').val(time);
             $('#exampleModal').modal('show');
         });

    </script>




@include('layouts.dashboard_footer')
