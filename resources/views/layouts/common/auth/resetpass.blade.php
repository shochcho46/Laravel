
@extends('layouts.normal.main')

@section('css')

@endsection

@section('content')


<div class="row">

    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">

    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

        @include('layouts.common.message.message')


        <form method="POST" id="secuirity" action="{{ route('confirmpass',$user->id) }}"
            enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}

            <div class="card mb-3">
                <h5 class="card-header secondary-color white-text text-center py-4">
                    <strong>Change Password</strong>
                    </h5>
                <div class="card-body px-lg-5 pt-0">



                    <div class="md-form">
                        <input type="text" id="resetcode" name="resetcode" class="form-control"   required>
                        <label for="resetcode">Code</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            Varification code send to your recovery mail
                        </small>
                    </div>
                        @if($errors->has('resetcode'))
                            <div class="error text-danger m-2">{{ $errors->first('resetcode') }}</div>
                        @endif

                <div class="md-form">
                    <input type="password" id="password" name="password" class="form-control"  minlength="8" required>
                    <label for="password">New Password</label>
                </div>
                    @if($errors->has('password'))
                        <div class="error text-danger m-2">{{ $errors->first('password') }}</div>
                    @endif

                    <div class="md-form">
                    <input type="password" id="password_confirmation" name ="password_confirmation" class="form-control" required>
                    <label for="password_confirmation">Retype New Password</label>
                </div>
                    <div class="text-center">
                    <button class="btn btn-outline-secondary btn-md btn-rounded waves-effect z-depth-0 my-4"  type="submit">UPDATE</button>
                    </div>
            </div>
        </div>
        </form>



    </div>


    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">

    </div>

</div>


<!-- Material form register -->


<!-- Material form register -->

@endsection


@section('script')

<script type="text/javascript">
    $(document).ready(function() {



});


</script>


@endsection



