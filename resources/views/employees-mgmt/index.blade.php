@extends('adminlte::page')
    <!-- Main content -->
@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h1 class="box-title"> Employees</h1>
        </div>
        <div class="col-sm-4">
      <!--    <a class="btn btn-primary" href="{{ route('employee-management.create') }}">Add new employee</a>-->
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      <form method="POST" action="{{ route('employee-management.search') }}">
         {{ csrf_field() }}
        </form>
    <div>
      <div class="row">
        <div>
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th>Picture</th>
                  <th>Employee Name</th>

                  <th>Age</th>
                  <th>Birthdate</th>
                  <th> Hired Date</th>
                  <th>Department</th>
                  <th>Division</th>
                  <th> Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($employee as $employees)
                <tr>
                  <td><img src="../{{$employees->picture }}" width="50px" height="50px"/></td>
                  <td class="sorting_1">{{ $employees->name }}</td>

                  <td class="hidden-xs">{{ $employees->age }}</td>
                  <td class="hidden-xs">{{ $employees->birthdate }}</td>
                  <td class="hidden-xs">{{ $employees->date_hired }}</td>
                  <td class="hidden-xs">{{ $employees->department_name }}</td>
                  <td class="hidden-xs">{{ $employees->division_name }}</td>
                  <td>
                    <form class="row" method="POST" action="{{ route('employee-management.destroy',$employees->id) }}" onsubmit = "return confirm('Are you sure?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <a href="{{ route('employee-management.edit',$employees->id)}}" class="btn btn-warning col-sm-3 col-xs-5 btn-margin">
                        Update
                        </a>
                                              @if (Auth::user()->id != Auth::user()->id)
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
      <div class="row">
        <div class="col-sm-5">
         </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
    <!-- /.content -->
@stop

