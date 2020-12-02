@extends('adminlte::page')
<!-- Main content -->
@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">Change Password</h3>
        </div>
           </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div>
        <div></div>
        <div></div>
      </div>
      <form method="POST" action="{{ route('user-management.search') }}">
         {{ csrf_field() }}
      </form>
    <div>
      <div >
        <div>
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr >
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>


                </tr>
            </thead>
            <tbody>
            @foreach ($user_mgmnt as $user)
                <tr>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>

                    <td>
                    <form class="row" method="POST" action="{{ route('user-management.destroy',  auth()->user()->id) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <a href="{{ route('user-management.edit',   auth()->user()->id) }}" class="btn btn-warning col-sm-3 col-xs-5 btn-margin">
                        Update
                        </a>
                        @if ($user->id != Auth::user()->id)
                         <button type="submit" class="btn btn-danger col-sm-3 col-xs-5 btn-margin">
                          Delete
                        </button>
                        @endif
                    </form>
                  </td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
      </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
@endsection
