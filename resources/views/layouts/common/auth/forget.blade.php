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

            <h5 class="card-header info-color white-text text-center py-4 mb-3">
                <strong>Forget Password</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->

                    <form class="text-center" style="color: #757575;" method="POST" id="signup" action="{{ route('resetpassword') }}"
                        enctype="multipart/form-data">
                        @csrf
                        {{-- @method('POST') --}}






                    <!-- E-mail -->
                    <div class="md-form mt-3">
                        <input type="text" name="emailormobile" id="materialRegisterFormEmail" class="form-control">
                        <label for="materialRegisterFormEmail">E-mail or Mobile</label>
                    </div>







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
