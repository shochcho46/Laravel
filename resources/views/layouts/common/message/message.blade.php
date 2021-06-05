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

@if (session('update'))

<div class="mt-3 alert alert-info alert-dismissible fade show" id="update" role="alert">
       {{ session('update') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
 </div>
@endif

@if (session('warning'))

<div class="mt-3 alert alert-warning alert-dismissible fade show" id="warning" role="alert">
       {{ session('warning') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
 </div>
@endif




@section('script')

<script type="text/javascript">
    $(document).ready(function() {

        $("#update").delay(3000).hide(500);
        $("#fail").delay(3000).hide(500);
        $("#success").delay(3000).hide(500);
        $("#warning").delay(3000).hide(500);

});


</script>


@endsection
