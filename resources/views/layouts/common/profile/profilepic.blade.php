
@if (session('success'))

<div class="mt-3 alert alert-success alert-dismissible fade show" id="success" role="alert">
       {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
 </div>
@endif

@if (session('fail'))

<div class="mt-3 alert alert-danger alert-dismissible fade show" id="fail" role="alert">
       {{ session('fail') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
 </div>
@endif


<div class="mt-2 row">
    <div class="col card p-2 text-center m-2 ">
        <h5 class="mt-1">Profile Picture Upload </h5>
    </div>

</div>


<div class="row mt-3">


    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
        <div class="card m-2">

            <form method="POST" id="picuserid" action="{{ route('profiles.updatepic',$user->id) }}"
                enctype="multipart/form-data">
                @csrf
                {{-- @method('PATCH') --}}

                <div class="md-form p-2">
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="btn-floating btn-secondary"><i
                                    class="mdi mdi-cloud-upload mdi-18px"></i></span>

                        </div>
                        <div class="custom-file ">

                            <input type="file" class="custom-file-input" id="location" name="location"
                                accept='image/*' onchange="loadFile(event)" required>

                            <label class="custom-file-label" for="location">Choose file</label>
                        </div>
                    </div>
                </div>




        </div>


    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

        <div class="card m-2">

            <div class="md-form text-center p-2">

                <img id="output" class="img-fluid rounded-circle uploadImageBoxSize p-2" src="{{$user->location}}"
                    alt="No Image">
                <p class="mt-2">
                    <small>Max H : 1080 px</small>&nbsp;
                    <small>Max W : 1920 px</small>;&nbsp;
                    <small>Max Size : 2 Mb</small>&nbsp;
                </p>
            </div>

            @if($errors->has('location'))
            <div class="error text-danger m-2">{{ $errors->first('location') }}</div>
            @endif


        </div>


</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
    <div class="card m-2 p-3">

        <div class="text-center p-4">
            <button type="submit" class=" btn btn-secondary btn-rounded btn-block">UPLOAD</button>
        </div>

    </div>

</div>
</form>

</div>
@section('script')

<script type="text/javascript">
    $(document).ready(function() {


        $("#fail").delay(3000).hide(500);
        $("#success").delay(3000).hide(500);


});


var loadFile = function(event) {
   var output = document.getElementById('output');
   output.src = URL.createObjectURL(event.target.files[0]);
   output.onload = function() {
     URL.revokeObjectURL(output.src) // free memory
   }
 };


 $('.datepicker').pickadate({
        selectYears:1000,
        clear: 'effacer',
        formatSubmit: 'yyyy-mm-dd',
        editable: true
        });



</script>


@endsection
