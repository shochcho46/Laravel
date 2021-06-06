@extends('layouts.admin.main')

@section('content')


<div class="container-fluid">

    <br>


 @include('layouts.common.message.message')

 <h4 class="text-center mt-2">{{ $heading }}</h4>

 <div class="table-responsive m-3">
    <table class="table text-center">
        <thead class="secondary-color-dark white-text">
          <tr>
            <th scope="col">#</th>

            <th scope="col"> Name</th>
            <th scope="col"> type</th>
           <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($user as $key => $value)

            @if($value->status == "active")



            <tr>
                 <td >{{ $user->firstItem() + $key }}</td>


                <td>{{ $value->name }}</td>
                <td>{{ $value->type }}</td>


                <td>

                    <a class="btn-floating btn-sm btn-info"  href="{{ route('admin.loadrestpass',$value->id) }}"><i class="mdi mdi-lock-check mdi-18px"></i></a>

                    {{-- <a class="btn-floating btn-sm btn-danger"  href="{{ route('mainmenu.destroy',$value->id) }}" onclick="event.preventDefault(); document.getElementById('del{{$value->id}}').submit();">
                        <i class="mdi mdi-trash-can mdi-18px"></i>
                    </a>





                    <form method="POST" id="del{{$value->id}}" action="{{ route('mainmenu.destroy', $value->id) }}" style="display: none;">
                        @csrf
                        @method('DELETE')


                    </form> --}}

                    <a class="btn-floating btn-sm btn-dark"  href="{{ route('admin.blacklistuser',$value->id) }}" onclick="event.preventDefault(); document.getElementById('disa{{$value->id}}').submit();">
                        <i class="mdi mdi-eye-off mdi-18px"></i>
                    </a>


                    <form method="POST" id="disa{{$value->id}}" action="{{ route('admin.blacklistuser', $value->id) }}" style="display: none;">
                        @csrf
                        @method('PUT')


                    </form>

                </td>
            </tr>



             @endif
            @endforeach
         </tbody>
      </table>

  </div>


  <h1 class="float-right">
    {{ $user->links() }}
  </h1>

<div>


@endsection

@section('script')
<script type="text/javascript">
 $(document).ready(function() {

    });

</script>
@endsection
