@extends('layouts.admin.main')

@section('content')
 <div class="container">

    <div class="row mb-3">


    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
    </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            @include('layouts.common.message.message')

                 <form method="POST" action="{{ route('mainmenu.store') }}">

            <!-- Material form subscription -->
                        <div class="card">

                            <h5 class="card-header secondary-color white-text text-center py-4">
                                <strong>ADD MAIN MENU</strong>
                            </h5>

                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                <!-- Form -->
                                <form class="text-center" style="color: #757575;" action="#!">

                                    @csrf
                                    <!-- Name -->
                                    <div class="md-form mt-3">
                                        <input type="text" id="main_name" name="main_name"  placeholder="Menu Name in English" value="{{ old('main_name') }}"required class="form-control">
                                        <label for="main_name">Main Menu</label>
                                    </div>
                                    @if($errors->has('main_name'))
                                        <div class="error text-danger m-2">{{ $errors->first('main_name') }}</div>
                                    @endif

                                    <!-- E-mai -->
                                    <div class="md-form">
                                        <input type="number" id="serial" name="serial" placeholder="Serial" value="{{ old('serial') }}" required min="1" class="form-control">
                                        <label for="serial">Serial</label>
                                    </div>
                                    @if($errors->has('serial'))
                                    <div class="error text-danger m-2">{{ $errors->first('serial') }}</div>
                                    @endif

                                    <input type="hidden"  name="status"  value="active" required  class="form-control">

                                    <!-- Sign in button -->
                                    <button class="btn btn-outline-secondary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">SUBMIT</button>

                                </form>
                                <!-- Form -->

                            </div>

                        </div>
                        <!-- Material form subscription -->


        </div>


    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
    </div>


</div>


 </div>





@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection

