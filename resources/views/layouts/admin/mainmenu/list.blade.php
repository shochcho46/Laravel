@extends('layouts.admin.main')

@section('content')


<div class="container-fluid">
   @php
   $i=1
   @endphp
    <br>
 <h4 class="text-center mt-2">Menu List</h4>

 @include('layouts.common.message.message')

 <div class="table-responsive m-3">
    <table class="table text-center">
        <thead class="secondary-color-dark white-text">
          <tr>
            <th scope="col">#</th>

            <th scope="col"> Name</th>
            <th scope="col"> Status</th>
            <th scope="col">Display Order</th>

            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($mainmenu as  $value)

            @if($value->status == "active")



            <tr>
                 <td >{{ $i }}</td>


                <td>{{ $value->main_name }}</td>
                <td>{{ $value->status }}</td>

                <td>{{ $value->serial}}</td>

                <td>

                    <a class="btn-floating btn-sm btn-primary"  href="{{ route('mainmenu.edit',$value->id) }}"><i class="mdi mdi-circle-edit-outline mdi-18px"></i></a>

                    <a class="btn-floating btn-sm btn-danger"  href="{{ route('mainmenu.destroy',$value->id) }}" onclick="event.preventDefault(); document.getElementById('del{{$value->id}}').submit();">
                        <i class="mdi mdi-trash-can mdi-18px"></i>
                    </a>





                    <form method="POST" id="del{{$value->id}}" action="{{ route('mainmenu.destroy', $value->id) }}" style="display: none;">
                        @csrf
                        @method('DELETE')


                    </form>

                    <a class="btn-floating btn-sm btn-dark"  href="{{ route('mainmenu.disable',$value->id) }}" onclick="event.preventDefault(); document.getElementById('disa{{$value->id}}').submit();">
                        <i class="mdi mdi-eye-off mdi-18px"></i>
                    </a>


                    <form method="POST" id="disa{{$value->id}}" action="{{ route('mainmenu.disable', $value->id) }}" style="display: none;">
                        @csrf
                        @method('PUT')


                    </form>

                </td>
            </tr>


            @php
             $i=$i+1;
            @endphp
             @endif
            @endforeach
         </tbody>
      </table>

  </div>

<div>


@endsection

@section('script')
<script type="text/javascript">
 $(document).ready(function() {

    });

</script>
@endsection
