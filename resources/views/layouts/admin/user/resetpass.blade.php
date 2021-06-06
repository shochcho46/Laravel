@extends('layouts.admin.main')

@section('css')

@endsection

@section('content')


<div class="row">

    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">

    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

        @include('layouts.common.message.message')


        <div class="card">

            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Reset Password</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->

                    <form class="text-center" style="color: #757575;" method="POST" id="signup" action="{{ route('admin.passresetconfirm',$user->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        {{-- @method('POST') --}}
                 <!-- Password -->
                    <div class="md-form">
                        <input type="password" name="password" id="materialRegisterFormPassword" class="form-control"
                            aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="materialRegisterFormPassword">Password</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            At least 8 characters
                        </small>
                    </div>

                    @if($errors->has('password'))
                    <div class="error text-danger m-2">{{ $errors->first('password') }}</div>
                    @endif

                    <div class="md-form">
                        <input type="password" id="password_confirmation" name ="password_confirmation" class="form-control" required>
                        <label for="password_confirmation">Retype Password</label>
                    </div>





                    <!-- Sign up button -->
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                        type="submit">Sign in</button>



                </form>
                <!-- Form -->

            </div>

        </div>



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
