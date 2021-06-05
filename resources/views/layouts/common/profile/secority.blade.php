


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  ">
        <h5 class="card mt-1 p-2 text-center">
            Security

        </h5>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <form method="POST" id="secuirity" action="{{ route('profiles.password',$user->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card mb-3">
                    <h5 class="card-header secondary-color white-text text-center py-4">
                        <strong>Change Password</strong>
                        </h5>
                    <div class="card-body px-lg-5 pt-0">


                            <div class="md-form">

                            <input type="text" id="name" name ="name" value="{{ old('name') ?? $user->name}}" class="form-control" required>
                             <label for="name">Name</label>

                            </div>

                            @if($errors->has('name'))
                                <div class="error text-danger m-2">{{ $errors->first('name') }}</div>
                            @endif


                            <div class="md-form">

                                <input type="number" id="mobile" name ="mobile" value="{{ old('mobile') ?? $user->mobile}}" class="form-control" required min="1">
                                 <label for="mobile">Mobile</label>

                                </div>

                                @if($errors->has('mobile'))
                                    <div class="error text-danger m-2">{{ $errors->first('mobile') }}</div>
                                @endif


                            <div class="md-form">


                                <input type="email" id="email" name ="email" value="{{ old('email') ?? $user->email}}" class="form-control" required>

                                <label for="email">Email</label>
                                </div>

                                @if($errors->has('email'))
                                    <div class="error text-danger m-2">{{ $errors->first('email') }}</div>
                                @endif


                        <div class="md-form">
                            <input type="password" id="oldpassword" name="oldpassword" class="form-control"  minlength="8" required>
                            <label for="oldpassword">Old Password</label>
                        </div>
                            @if($errors->has('oldpassword'))
                                <div class="error text-danger m-2">{{ $errors->first('oldpassword') }}</div>
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




    </div>



</div>


<script type="text/javascript">



</script>
