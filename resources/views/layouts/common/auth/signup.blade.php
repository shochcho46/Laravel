@extends('layouts.normal.main')

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
                <strong>Sign up</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->

                    <form class="text-center" style="color: #757575;" method="POST" id="signup" action="{{ route('normal.register') }}"
                        enctype="multipart/form-data">
                        @csrf
                        {{-- @method('POST') --}}


                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" name="name" id="materialRegisterFormFirstName" value="{{ old('name') }}"  class="form-control">
                        <label for="materialRegisterFormFirstName">Name</label>
                    </div>

                    @if($errors->has('name'))
                    <div class="error text-danger m-2">{{ $errors->first('name') }}</div>
                    @endif



                    <!-- E-mail -->
                    <div class="md-form mt-0">
                        <input type="email" name="email" id="materialRegisterFormEmail" value="{{ old('email') }}" class="form-control">
                        <label for="materialRegisterFormEmail">E-mail</label>
                    </div>

                    @if($errors->has('email'))
                    <div class="error text-danger m-2">{{ $errors->first('email') }}</div>
                    @endif

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

                    <!-- Phone number -->
                    <div class="md-form">
                        <input type="number" name="mobile" id="materialRegisterFormPhone" class="form-control" value="{{ old('mobile') }}"  required min="1"
                            aria-describedby="materialRegisterFormPhoneHelpBlock">
                        <label for="materialRegisterFormPhone">Phone number</label>

                        {{-- <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                            Optional - for two step authentication
                        </small> --}}
                    </div>
                    @if($errors->has('mobile'))
                    <div class="error text-danger m-2">{{ $errors->first('mobile') }}</div>
                    @endif



                    <!-- Sign up button -->
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                        type="submit">Sign in</button>

                    <!-- Social register -->

                    {{-- <p>or sign up with:</p>

                    <a type="button" class="btn-floating btn-fb btn-sm">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a type="button" class="btn-floating btn-tw btn-sm">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a type="button" class="btn-floating btn-li btn-sm">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a type="button" class="btn-floating btn-git btn-sm">
                        <i class="fab fa-github"></i>
                    </a> --}}

                    <hr>

                    <!-- Terms of service -->
                    <p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="" target="_blank">terms of service</a>

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
