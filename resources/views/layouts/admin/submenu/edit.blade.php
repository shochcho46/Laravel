@extends('layouts.admin.main')


@section('content')
 <div class="container">

    <div class="row">


    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
    </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">


            <form method="POST" action="{{ route('submenu.update',$data->id) }}">

                @csrf

                @method('PUT')

            <!-- Material form subscription -->
                        <div class="card">

                            <h5 class="card-header secondary-color white-text text-center py-4">
                                <strong>EDIT SUB MENU</strong>
                            </h5>

                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                <div class="md-form mt-3">
                                    <select name ="mainmenu_id" class="mdb-select colorful-select dropdown-secondary" searchable="Search here.." required>
                                        <option value="" disabled selected>Main menu</option>
                                        @foreach($mainmenu as  $value)
                                            @if($value->id == $data->mainmenu_id)

                                            <option class="p-2" selected value="{{ $value->id }}">
                                            {{ $value->main_name }}
                                            </option>
                                            @else
                                            <option class="p-2" value="{{ $value->id }}">
                                            {{ $value->main_name }}
                                            </option>
                                            @endif

                                        @endforeach


                                    </select>
                                    <label class="mdb-main-label">Main menu select</label>
                                </div>
                                <!-- Form -->

                                    <!-- Name -->
                                    <div class="md-form mt-3">
                                        <input type="text" id="sub_name" name="sub_name"  placeholder="Menu Name in English" value="{{ old('sub_name') ?? $data->sub_name }}" required class="form-control">
                                        <label for="sub_name">Sub Menu</label>
                                    </div>
                                    @if($errors->has('sub_name'))
                                        <div class="error text-danger m-2">{{ $errors->first('sub_name') }}</div>
                                    @endif

                                    <!-- E-mai -->
                                    <div class="md-form">
                                        <input type="number" id="serial" name="serial" placeholder="Serial" value="{{ old('serial') ?? $data->serial}}" required min="1" class="form-control">
                                        <label for="serial">Serial</label>
                                    </div>
                                    @if($errors->has('serial'))
                                    <div class="error text-danger m-2">{{ $errors->first('serial') }}</div>
                                    @endif

                                    <input type="hidden"  name="status"  value="{{ old('status') ?? $data->status}}" required  class="form-control">


                                    <!-- Sign in button -->
                                    <button class="btn btn-outline-secondary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">UPDATE</button>

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
 $(document).ready(function() {


    });
</script>
@endsection
