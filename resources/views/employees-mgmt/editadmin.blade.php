@extends('adminlte::page')
<!-- Main content -->
@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1> <div class="panel-heading">Update employee</div></h1>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('employee-management.update', $employees->id) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $employees['name'] }}" required autofocus readonly>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-6">
                                <select class="form-control" name="city_id">
                                    @foreach ($cities as $city)
                                        <option {{$employees['city_id'] == $city->id ? 'selected' : ''}} value="{{$city['id']}}">{{$city['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                              <div class="form-group">
                            <label class="col-md-4 control-label">State</label>
                            <div class="col-md-6">
                                <select class="form-control" name="state_id">
                                    @foreach ($states as $state)
                                        <option {{$employees['state_id'] == $state->id ? 'selected' : ''}} value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-6">
                                <select class="form-control" name="country_id">
                                    @foreach ($countries as $country)
                                        <option {{$employees['country_id'] == $country->id ? 'selected' : ''}} value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-4 control-label">Zip</label>

                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control" name="zip" value="{{ $employees['zip'] }}" required>

                                @if ($errors->has('zip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" value="{{ $employees['age'] }}" required>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Birthday</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" value="{{ $employees['birthdate'] }}" name="birthdate" class="form-control pull-right" id="birthDate" required>
                                </div>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Hired Date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" value="{{ $employees['date_hired'] }}" name="date_hired" class="form-control pull-right" id="hiredDate" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Department</label>
                            <div class="col-md-6">
                                <select class="form-control" name="department_id">
                                    @foreach ($departments as $department)
                                        <option {{$employees['department_id'] == $department->id ? 'selected' : ''}} value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Division</label>
                            <div class="col-md-6">
                                <select class="form-control" name="division_id">
                                    @foreach ($divisions as $division)
                                        <option {{$employees['division_id'] == $division->id ? 'selected' : ''}} value="{{$division->id}}">{{$division->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Picture</label>
                            <div class="col-md-6">
                                <img src="../../{{$employees['piture'] }}" width="50px" height="50px"/>
                                <input type="file" id="picture" name="picture" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection